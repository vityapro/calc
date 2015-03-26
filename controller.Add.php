<?php
function add()
{
    $data=$_POST['data'];
    $summa=$_POST['summa'];
    addDate($data,$summa);
    redirect('index.php');
}