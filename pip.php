<?php
	header('Content-Type: text/html; charset=utf-8');
	require_once 'programmer.php';

	$p1 = new Programmer('Иван','Иванов','Иванович');
	$p1->addLang('C++');
	$p1->addLang('Pascal');
	$p1->addLang('PHP');
	$p1->display();
?>