<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $numOne = $_POST['numberOne'];
    $numTwo = $_POST['numberTwo'];
    $operation = $_POST['operation'];
    
    if($operation == 'add'){
        $result = $numOne + $numTwo;
        $_SESSION['add'] = $result;
    }elseif($operation == 'subtract'){
        $result = $numOne - $numTwo;
        $_SESSION['subtract'] = $result;
    }elseif($operation == 'multiply'){
        $result = $numOne * $numTwo;
        $_SESSION['multiply'] = $result;
    }elseif($operation == 'divide'){
        if($numTwo == 0){
            echo "Devidation by ZERO (0) not allowed!";
        }else{
            $result = $numOne / $numTwo;
            $_SESSION["divide"] = $result;
        }
    }else{
        echo "Invalid Operation!";
    }
}
session_destroy();