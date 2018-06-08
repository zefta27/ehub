<?php
include_once("classes/Crud.php");
$crud = new Crud();

$id_email = rand(0000000,9999999);
$ipaddress  =$_SERVER['REMOTE_ADDR'];
$info = $_SERVER['HTTP_USER_AGENT'] ;
$email= $_POST['email'];
$waktu = date("Y-m-d");
$jam  = date("h:i:s");


$result = $crud->execute("INSERT INTO email_newsletter(id_email, ipaddress, info, email, waktu, jam) VALUES('$id_email','$ipaddress','$info','$email','$waktu','$jam')");


?>