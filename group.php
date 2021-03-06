<?php

require_once 'discipline.php';

class Group {
	private $id;
	private $title;
	private $students = array();
	private $disciplines = array();

	public function __construct($i, $t) {
		$this->id = $i;
		$this->title = $t;
	}
	public function getTitle() {
		return $this->title;
	}
	public function addStudents($s) {
		array_push($this->students, $s);
	}
	public function adddiscipline($d) {
		array_push($this->disciplines, $d);
	}
	public function show() {
		echo '<h1>Группа '.$this->title.'</h1>';
		echo '<h2>Список студентов </h2>';
		foreach ($this->students as $student) {
			$student->display();
		}
		echo '<h2>Список дисциплин</h2>';
		foreach ($this->disciplines as $discipline) {
			$discipline->display();
		}
	}
}
?>