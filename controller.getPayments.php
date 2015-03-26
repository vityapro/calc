<?php
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