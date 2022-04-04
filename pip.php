<?php
	header('Content-Type: text/html; charset=utf-8');
	require_once 'student.php';
	require_once 'group.php';

    $group1 = new Group(1, 'И-01');
    $group2 = new Group(2, 'И-02');
    $group3 = new Group(3, 'И-03');
	$s1 = new Student('Фёдор', 'Медведенко','Павлович', $group1);
	$s2 = new Student('Кирилл', 'Королев','Николаевич', $group3);

	$s1->display();
	$s2->display();
    

	
?>