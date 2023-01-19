<?php
use Core\Facebook;
use Core\Cimri;
use Core\Google;

function autoload($classname){
	$classname = str_replace("\\","/",$classname).".php";
    if(file_exists($classname) && is_file($classname)){
        include_once($classname);
    }
}
spl_autoload_register('autoload');

$data = json_decode(file_get_contents("products.json"));

$convert = new Facebook();
$convert->outputFile($data);

$convert2 = new Cimri();
$convert2->outputFile($data);

$convert3 = new Google();
$convert3->outputFile($data);