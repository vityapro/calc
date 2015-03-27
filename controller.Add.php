<?php
function add($twig)
{
    $data=$_POST['data'];
    $summa=$_POST['summa'];
    if ($summa>0 and validateDate($data))
    {
        addDate($data,$summa);
        redirect('index.php');
    } else {
        $da='stopudovo';
        return $twig->render('form.html',array('bla' => $da,'summa'=>$summa,'data'=>$data));
    }

}