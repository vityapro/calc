<?php
// Connect var
$db_host = 'localhost';
$db_name = 'zvit';
$db_username = 'vitya';
$db_password = '123';

// Connect to DB
$connect_to_db = @mysql_connect($db_host, $db_username, $db_password)
or die("Could not connect: " . mysql_error());
myDB::setDbh($connect_to_db);

// Select DB
mysql_select_db($db_name, myDB::getDbh())
or die("Could not select DB: " . mysql_error());



class myDB
{
    static $table = 'zvit';
    static $dbh;
    static public function setDbh($dbh)
    {
        self::$dbh = $dbh;
    }

    static public function getDbh()
    {
        return self::$dbh;
    }

    static public function getTable()
    {
        return self::$table;
    }


}
