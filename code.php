<?php
header('Content-Type: text/html; charset=utf-8');
$x = $_POST['ch1'];
$y = $_POST['ch2'];
$z = $x + $y;
echo $z;
print_r($_POST);
echo '<a href = "pip.html">Вернуться назад</a>';
?>
