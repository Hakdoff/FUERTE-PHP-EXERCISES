<?php 

include 'controller/calController.php';

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operator = $_POST['operator'];

$calculator = new Calculator($num1, $num2, $operator);

$result = $calculator->Compute();



?>

