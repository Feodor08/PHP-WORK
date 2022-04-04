<?php
	header('Content-Type: text/html; charset=utf-8');
	require_once 'cat.php';

	$pet1 = new Cat('Василий', 'Сфинкс');
	$pet1->display();
?>