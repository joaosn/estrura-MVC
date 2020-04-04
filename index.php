<?php  
session_start();
require 'config.php';

//indentifica onde esta a $class seja onde for ele da require.'puxa'.
spl_autoload_register(function($class){

	if(file_exists('Controllers/'.$class.'.php')) { 
		require 'Controllers/'.$class.'.php';
	}
	else if(file_exists('Models/'.$class.'.php')) {
		require 'Models/'.$class.'.php';
	}
	else if(file_exists('Core/'.$class.'.php')) {
		require 'Core/'.$class.'.php';
	}

});

$core = new Core();
$core->run();