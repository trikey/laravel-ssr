<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class SsrController extends Controller
{
    public function index() {
        $html = $this->render();
        return view('ssr', ['html' => $html]);
    }

    private function render() {
        $renderer = File::get(base_path('node_modules/vue-server-renderer/basic.js'));
        $app = File::get(public_path('js/server.js'));

        $v8 = new \V8Js();

        ob_start();

        $js = '
            var process = { env: { VUE_ENV: "server", NODE_ENV: "production" } }; 
            this.global = { process: process };
        ';

        $v8->executeString($js);
        $v8->executeString($renderer);
        $v8->executeString($app);

        return ob_get_clean();
    }
}