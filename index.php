<?php

error_reporting(E_ALL);
require_once('project.php');
require_once('controller.Add.php');
require_once('controller.delete.php');
require_once('controller.form.php');
require_once('controller.index.php');
require_once('controller.zapros.php');
require_once('controller.edit.php');
require_once('controller.valid.php');
require_once('conf.php');


$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader,
    array(
        'cache' => 'compilation_cache',
        'debug' => true
    )
);
$twig->addExtension(new Twig_Extension_Debug());


$param=array('','');
$param=array($twig,'');

if (array_key_exists('go', $_REQUEST)){
    $go = $_REQUEST['go'];
    valid();
    echo call_user_func_array($go, $param);
} else {
           $go='index';
           echo call_user_func_array($go, $param);
}




