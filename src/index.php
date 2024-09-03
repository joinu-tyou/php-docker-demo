<?php
const HOST_NAME = 'mysql'; //172.21.0.3
const HOST_PORT = '3306';
const DB_NAME   = 'php-docker-db';
const USER_NAME = 'user';
const PASSWORD  = 'password';


echo '<h1>Hello World1 張勇</h1>' . HOST_NAME;


$db_settings = [
	'host='.HOST_NAME,
	'port='.HOST_PORT,
	'dbname='.DB_NAME,
	'charset=utf8'
];

try {
	$db = new PDO('mysql:'.implode(';', $db_settings), USER_NAME, PASSWORD);

	echo '接続成功';
} catch (PDOException $e) {
	echo '接続失敗：'.$e->getMessage();
}
phpinfo();