<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $numOne = $_POST['numberOne'];
    $numTwo = $_POST['numberTwo'];
    $operation = $_POST['operation'];
    
    if($operation == 'add'){
        $numOne + $numTwo;
    }elseif($operation == 'subtract'){
        $numOne - $numTwo;
    }elseif($operation == 'multiply'){
        $numOne * $numTwo;
    }elseif($operation == 'divide'){
        
    }
}
