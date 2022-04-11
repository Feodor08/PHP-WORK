<?php

class Discipline {
	private $id;
	private $title;

	public function __construct($n,$s,$p,$g,$d) {
		parent::__construct($n,$s,$p,$d);
		$this->group = $g;
		$this->grou = $d;
		$this->group->addStudents($this);
		$this->group->adddiscipline($this);

		
	}

	public function __construct($i, $t) {
		$this->id = $i;
		$this->title = $t;
	}
	public function getTitle() {
		return $this->title;
	}
}
?>