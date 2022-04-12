<?php
require_once 'context.php'; 
require_once 'concreteStrategyAdd.php'; 
require_once 'concreteStrategySubtract.php'; 
require_once 'concreteStrategyMulpiply.php'; 


if (!empy($_POST)) {
	$context = new Context();
	$x = $_POST['first_num'];
	$y = $_POST['last_num'];
	$act = $_POST['deistvie'];
	switch ($act) {
		case'+': $context->setStrategy(new ConcreteStrategyAdd()); break;
		case'-': $context->setStrategy(new ConcreteStrategySubtract()); break;
		case'*': $context->setStrategy(new ConcreteStrategyMulpiply()); break;
		default: die('Невереное действие!');
}
$result = $context->executeStratefy($x, $y);
echo '<h1>'.$result.'<h1>';
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Калькулятор</title>
</head>
<body>
    <form action="" method="post">
    	<input type="text" name="first_num" placeholder="первое число">
    	<select name="deistvie">
    		<option value="+">+</option>
    		<option value="-">-</option>
    		<option value="*">*</option>
    	</select>
    	<input type="text" name="last_num" placeholder="второе число"><br>
    	<input type="submit" value="Посчитать">
    </form>
</body>
</html>