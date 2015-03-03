

<?php

require_once('project.php');


$site='
    <html>
        <body background="money.jpg">';

    $site .= '<h1 align="center">Звіт по витратах</h1>';
    $site .= summ('summa','zvit');
    $site .= tableM(getPayments());
$site .='</br>';
$site .='</br>';
$site .='</br>';
//$site .= '<h2 align="center"><a href="http://localhost/test/132.php" >Додати новий заис</a></h2>';
$site .= '<table align="center"><tr><td><button   onclick="window.location.href=\'index.php?go=addData\'"><img src="add.png" alt="Add"
          style="vertical-align: middle">' .'Додати новий запис'.'</button></td></tr></table>';
$site .= '</body>';
$site .= '</html>';
echo $site;

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