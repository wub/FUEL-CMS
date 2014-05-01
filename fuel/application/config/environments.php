<?php
/*
|--------------------------------------------------------------------------
| Environments
|--------------------------------------------------------------------------
|
| This configuration file will automatically set the ENVIRONMENT constant
| based on the server address (e.g. $_SERVER['HTTP_HOST'])
| If no environment is set, it will default to development.
|
|
|	$environments = array(
|				'development' => array('localhost*', '192.:*'),
|				'production' => array('mysite.com'),
|				);
*/

$environments = array(
				'development' => array('localhost*', '192.*', '*.dev'),
				);
