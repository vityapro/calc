<?php
function add()
{
    $data=$_POST['data'];
    $summa=$_POST['summa'];
    $sql = 'INSERT INTO '.myDB::getTable().'(data, summa)
 VALUES("'.$data.'", "'.$summa.'")';
    mysql_query($sql, myDB::getDbh());
    redirect('index.php');
}