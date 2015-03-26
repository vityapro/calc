<?php

error_reporting(E_ALL);
require_once('project.php');
require_once('controller.Add.php');
require_once('controller.delete.php');
require_once('controller.form.php');


$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader,
    array(
        'cache' => 'compilation_cache',
        'debug' => true
    )
);
$twig->addExtension(new Twig_Extension_Debug());
$data='';
$data .= summ('summa','zvit');
$payments =getPayments();
$sum=summ('summa','zvit');
$param=array('','');
echo $twig->render('index.html',array('payments' => $payments,'sum'=>$sum));
if (array_key_exists('go', $_REQUEST))
    {
    $go=$_REQUEST['go'];

        $param=array($twig,'');
        echo call_user_func_array ($go,$param);


    }


//call_user_func_array ($func,$param);
/*switch ($go) {
    case '':
        echo $twig->render('index.html',array('payments' => $payments));

        break;
    case 'addData':
        echo $twig->render('form.html');
        break;
    case 'add':
        addDate();
        break;
    case 'delete':
          delete();

        break;
}
*/