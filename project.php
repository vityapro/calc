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


function getPayments()
{
// Contact too DB
    $data = array();
    $result = mysql_query("select * from " . myDB::getTable(),  myDB::getDbh() );
    while ($row = mysql_fetch_array($result)) {
        $data['list'][] = $row;
    }
    return $data;
    }
function del ($id)
    {
     // передаем переменной id значение глобального массива POST
    $sql ="DELETE FROM ".myDB::getTable()." WHERE id = $id";
    mysql_query($sql, myDB::getDbh());
       mysql_query($sql);

    }
function redirect($url)
    {
    header('Location: '.$url);
    exit;
    }

function addDate($data,$summa)
    {
    $sql = 'INSERT INTO '.myDB::getTable().'(data, summa)
 VALUES("'.$data.'", "'.$summa.'")';
    mysql_query($sql, myDB::getDbh());
    }

function validateDate($date, $format = 'Y-m-d')
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}