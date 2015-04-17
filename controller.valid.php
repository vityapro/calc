<?php
function valid ()
{
    $go=$_REQUEST['go'];
    $chekGo=arrayGiven();

   if(in_array($go,$chekGo))
   {

   }else{
redirect('404.html');
   }
}
function validAdd ($summa,$data,$twig) {
    if ($summa>0 and validateDate($data))
    {

    }else{
        $da='stopudovo';
        return $twig->render('form.html',array('bla' => $da,'summa'=>$summa,'data'=>$data));
    }
}