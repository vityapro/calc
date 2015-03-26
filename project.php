<?php
require_once '/vendor/autoload.php';
require_once('db.php');

function summ ($st,$table)
{

    $result = mysql_query("select sum($st) as lol from $table",  myDB::getDbh() );
    $row= mysql_fetch_assoc($result);
    $table1 = '';
    $table1 .= 'Загальна сума витрат '.$row['lol']." грн";
     return $table1;
}


