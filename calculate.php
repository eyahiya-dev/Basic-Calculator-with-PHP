<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $numOne = $_POST['numberOne'];
    $numTwo = $_POST['numberTwo'];
    $operation = $_POST['operation'];
    
    if($operation == '+'){
        $result = $numOne + $numTwo;          
    }elseif($operation == '-'){
        $result = $numOne - $numTwo;          
    }elseif($operation == '*'){
        $result = $numOne * $numTwo;          
    }elseif($operation == '/'){
        if($numTwo == 0){
            $result = "Devidation by ZERO (0) not allowed!";
        }else{
            $result = $numOne / $numTwo;                  
        }
    }else{
        $result = "Invalid Operation!";
        header("location: index.php");
    }
}

$_SESSION['numOne'] = $_POST['numberOne'];
$_SESSION['numTwo'] = $_POST['numberTwo'];
$_SESSION['operation'] = $_POST['operation'];
$_SESSION['result'] = "Your Calculation is : {$result}";
header("location:index.php");