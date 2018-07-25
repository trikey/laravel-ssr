import renderVueComponentToString from 'vue-server-renderer/basic';
import app from './app';

renderVueComponentToString(app, (err, res) => {
  print(res);
});
