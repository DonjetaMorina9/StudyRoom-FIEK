<?php


$server = "localhost";
$lenda = "";
$semestri = "";
$zgjedhja = "";

$file = "";
$db = "";

//nga ketu behet lidhja me databaze dhe vendosja e informacioneve

require_once("config.php");
 $conn = new mysqli($server,$lenda, $semestri, $zgjedhja, $file ,$dbname);
 if($conn->connect_error){
	die("Connection failed ". $conn->connect_error);
 }
 echo "Connected successfully";

 $conn->close();


