<?php

$id = 3;

// получаем из базы нужный контент
$sql = "SELECT * FROM kafedra, disciplines WHERE kafedra.kaf_id = disciplines.kaf_fkey_id and disciplines.id = $id";
$con = mysql_connect('localhost', 'root', '1234');
mysql_set_charset( 'utf8' ); // кодировка в которой с базой работаем
mysql_select_db('study', $con);
$result = mysql_query($sql); // получаем resource из базы данных

// конвертируем ресурс в массив PHP
$rows = array();
while($r = mysql_fetch_assoc($result)) {
    $rows[] = $r;
}

// преобразовываем информацию от СУБД в удобный для верстки формат
$array = [];
$array[name] = $rows[0][disc_name];
$array[kaf_name] = $rows[0][kaf_name];
$array[alias] = $rows[0][disc_alias];
$array[id] = $rows[0][id];

// выводим результат
var_dump($array);
header( 'Content-Type: text/html; charset=utf-8' );
?>