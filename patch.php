<?php

//1 cоеденение с бд
$link = mysql_connect('localhost', 'kot', 'jokers12');

//2 проверка на существование бд
$db_selected = mysql_select_db('testdrive', $link);
if (!$db_selected) {
    $sql = 'CREATE DATABASE testdrive';
    if (mysql_query($sql, $link)) {
        echo "База testdrive успешно создана\n".'<br>';
    }
}
$db_selected = mysql_select_db('testdrive', $link);
if ($db_selected){
//3 cоеденение таблицы
$sql = "CREATE TABLE IF NOT EXISTS `user`(
`user_id`         INT(11) NOT NULL AUTO_INCREMENT,
`user_name`       VARCHAR(255) NOT NULL,
`user_email`      VARCHAR(255) NOT NULL,
`user_password`   VARCHAR(255) NOT NULL,


PRIMARY KEY(`user_id`))";

mysql_query($sql,$link);
    echo "Создание таблицы user завершено.".'<br>';
    
$sql = "CREATE TABLE IF NOT EXISTS `news`(
`news_id`         INT(11) NOT NULL AUTO_INCREMENT,
`news_name`       VARCHAR(255) NOT NULL,
`news_content`      VARCHAR(255) NOT NULL,



PRIMARY KEY(`news_id`))";

mysql_query($sql,$link);
    echo "Создание таблицы news завершено.".'<br>';
}