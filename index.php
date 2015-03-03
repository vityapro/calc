

<?php

require_once('project.php');
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' => 'compilation_cache',));
$data='';
$data .= summ('summa','zvit');
$data .= tableM(getPayments());
echo $twig->render('index.html', array('data' => $data));




if (array_key_exists('go', $_REQUEST))
    {
    $go=$_REQUEST['go'];
    }
    else
    {
    $go='';
    }
switch ($go) {
    case '':

        break;
    case 'addData':
        $form = showForm();
        echo "$form";
        break;
    case 'add':
        $data=$_POST['data'];
        $summa=$_POST['summa'];
        addDate($data,$summa);
        redirect('index.php');
        break;
    case 'delete':
        $id = $_GET['id'];
        delete($id);
        redirect('index.php');
        break;
}