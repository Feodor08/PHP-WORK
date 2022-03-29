<?php 
    header('Content-Type: text/html; charset utf-8');
    $files = array('1.txt','2.txt','3.txt');
    $str =''; 
    
    	echo $i;
    }
    for ($i=0; $i<count($files); $i++) {
    for ($i=1; $i<count($files); $i++) {
    	print_r($i);
    	$name = $files[$i];
    	echo '--'.$files[$i].'++<br>';
    	$str .= file_get_contents($name);
    }  
    file_put_contents('new.txt', $str);
?>