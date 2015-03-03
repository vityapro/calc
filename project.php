<?php
require_once('db.php');
function tableM($data)
{


    $str = '';
    $str .= '<table align="center">';

    for ($i = 0; $i < count($data['list']); $i++) {
        $str .= '<tr>';
        $str .= '<td>' . $data['list'][$i]['data'] . '</td>
	<td>' . $data['list'][$i]['summa'] . '</td>	<td><button  onclick="window.location.href=\'index.php?id='.$data['list'][$i]['id'].'&go=delete\'"><img src="del.gif" alt="Del"
          style="vertical-align: middle">' .'' . '</button></td>';
        $str .= '</tr>';

    }
    $str .= '</table>';
    return $str;
}
function summ ($st,$table)
{

    $result = mysql_query("select sum($st) as lol from $table",  myDB::getDbh() );
    $row= mysql_fetch_assoc($result);

    $table1 = '';
    $table1 .= '<table align="center">';

    $table1 .= '<tr>';
    $table1 .= '<td>Загальна сума витрат</td><td>'.$row['lol']." грн".'</td>';
    $table1 .= '</tr>'.'</table>';
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
function delete ($id)
    {
     // передаем переменной id значение глобального массива POST
    $sql ="DELETE FROM ".myDB::getTable()." WHERE id = $id";
    mysql_query($sql, myDB::getDbh());
        if(!mysql_query($sql))
        {echo '<p><b>Помилка при видаленні даних!</b></p>';}
    }
function redirect($url)
{
    header('Location: '.$url);
    exit;
}
function showForm()
{

    $form = '';

    $form.= '<html>';

    $form.= '<head>';
    $form.= '<meta charset="utf-8">';
    $form.= '<title>Додавання данних</title>';
    $form.= '</head>';
    $form.= '<body background="money.jpg">';

    $form.= '<form name="test" method="post" action="index.php">';

    $form.= '<p align="center"><b>Введіть дату в форматі гггг-мм-дд:</b></br>';
    $form.= '<input type="hidden" name="go" value="add" >';
    $form.= '<input type="text" size="40" name="data" align="center" ></br>';

    $form.= '<b align="center">Введіть витрачену сумму:</b></br>';
    $form.= '<input type="text" size="40" name="summa" align="center"></br>';
    $form.= '</p>';

    $form.= '<p align="center"><input type="submit" value="Додати запис">';
    $form.= '<input type="reset" value="Очистити"></p>';
    $form.= '</form>';

    $form.= '</body>';
    $form.= '</html>';
    return $form;

}
function addDate($data,$summa)
{


    $sql = 'INSERT INTO '.myDB::getTable().'(data, summa)
 VALUES("'.$data.'", "'.$summa.'")';
// проверка
    mysql_query($sql, myDB::getDbh());


}