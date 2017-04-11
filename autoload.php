<?php 

require_once 'config.php';

spl_autoload_register(function ($classe) {
	if (strpos($classe, 'Controller') > -1) {
		if (file_exists('controllers/'.$classe.'.php')) {
			require_once 'controllers/'.$classe.'.php';
		}
	} else if (file_exists('models/'.$classe.'.php')) {
		require_once 'models/'.$classe.'.php';
	} else {
		require_once 'app/'.$classe.'.php';
	}
});