<?php
 require_once 'human.php';
 require_once 'Iprogrammer.php';

 class Programmer extends Human implements Iprogrammer{
 	private $langs = array();

 	public function addLang($l) {
 		array_push($this->langs, $l);
 	}
 	public function getLangs() {
 		return $this->langs;
 	}
 	public function display() {
 		parent::display();
 		echo '<h2>Список языков</h2>';
 		foreach ($this->langs as $lang) {
 			echo $lang.'<br>';
 		}
 	}
 }
?>