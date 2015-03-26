<?php

function delete ()
{
    $id = $_GET['id'];
    // передаем переменной id значение глобального массива POST
    $sql ="DELETE FROM ".myDB::getTable()." WHERE id = $id";
    mysql_query($sql, myDB::getDbh());
    mysql_query($sql);
    redirect('index.php');
}