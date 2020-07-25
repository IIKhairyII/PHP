<?php
include_once "connection.php";
$inputs = file_get_contents("php://input");
$test = json_decode($inputs);
$print=  $test[0];
echo $print . "<br>";
$SelectSql = "SELECT * FROM calculations where id = 2";
$QuerySql = mysqli_query($conn, $SelectSql);
$FetchSql = mysqli_fetch_assoc($QuerySql);
$value = $FetchSql['results'];
$operator = substr($print, -1);
$number = rtrim($print, $operator);
switch ($operator){
    case "+":
        $value = $value + $number; 
        
        break;
    case "-":
        $value = $value - $number;
    break;
    default:
        echo "Operator not found";
}
$UpdateSqL = "UPDATE calculations SET results = '$value' WHERE id = 2";
$QueryUpdate = mysqli_query($conn, $UpdateSqL);
echo $value;
?>