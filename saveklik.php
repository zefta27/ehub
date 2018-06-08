<?php
include_once("classes/Crud.php");
$crud = new Crud();

$id_histori = rand(0000000,9999999);
$ipaddress = $_POST['ipaddress'];
$info =  $_POST['info'];
$aksi= $_POST['aksi'];
$waktu = date("Y-m-d");

$data['success'] = true; 
$data['ipaddress'] = $ipaddress; 
$data['info'] = $info; 
$data['aksi'] = $aksi; 

$result = $crud->execute("INSERT INTO klik_histori(id_histori, ip_address, info, aksi, waktu) VALUES('$id_histori','$ipaddress','$info','$aksi','$waktu')");

echo json_encode($data);

?>