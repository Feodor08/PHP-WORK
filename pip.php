<?php
	header('Content-Type: text/html; charset=utf-8');
	require_once 'cat.php';
	require_once 'Dog.php';

	$pet1 = new Cat('Василий', 'Сфинкс');
	$pet1->display();

	$pet2 = new Dog('Генадий', 'Пудель');
	$pet2->display();
?>