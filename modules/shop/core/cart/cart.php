<?php
	namespace Project;
	
	class Test
	{
		public function __construct()
		{
			// Создаем 3 объекта одного класса:
			$data1  = new \Core\Users\Data('user1');
			$data2  = new \Core\Users\Data('user3');
			$data3  = new \Core\Users\Data('user3');
		}
	}
?>