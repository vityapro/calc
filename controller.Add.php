<?php
function add($twig)
{
    $data=$_POST['data'];
    $summa=$_POST['summa'];
  validAdd($summa,$data,$twig);
        addDate($data,$summa);
        redirect('index.php');


}