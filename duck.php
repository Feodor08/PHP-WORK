<?php
abstract class Duck {
	protected $flyBehaivor;
	protected $quackBehaivor;

	public function swim() {
		echo 'я плыву!<br>';
	}
	abstract public function display();
	public function performFly() {
		$this ->flyBehaivor->fly();
	}
}
?>