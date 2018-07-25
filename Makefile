lint:
	node ./node_modules/eslint/bin/eslint.js resources --ext js,vue

lintfix:
	node ./node_modules/eslint/bin/eslint.js resources --ext js,vue --fix
