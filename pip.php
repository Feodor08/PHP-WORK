<?php
	header('Content-Type: text/html; charset=utf-8');
	require_once 'student.php';


	$s1 = new Student('Фёдор', 'Медведенко','Павлович', 'Группа И-01');
	$s2 = new Student('Кирилл', 'Королев','Николаевич', 'Группа И-01');

	$s1->display();
	$s2->display();
    

	
?>