<?php  
include '../controller/bdatacontroller.php' ;

$name = $_GET['product'];

$student = studentInfo($name);

	echo $student['product'];
	echo "<br>";
	echo $student['quantity'];
	echo "<br>";
	
	
	

?>