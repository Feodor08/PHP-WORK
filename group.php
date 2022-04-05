<?php

class Group {
	private $id;
	private $title;
	private $students = array();

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
	public function show() {
		echo '<h1>Группа '.$this->title.'</h1>';
		echo '<h2>Группа Список студентов </h2>';
		foreach ($this->students as $student) {
			$student->display();
		}
	}
}
?>