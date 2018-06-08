<?php
include_once("classes/Crud.php");
$crud = new Crud();

$id_time_spent = rand(0000000,9999999);
$ipaddress = $_POST['ipaddress'];
$info =  $_POST['info'];
$waktu = date("Y-m-d");
$migrasi_page = $_POST['migrasi'];
$why_page = $_POST['why'];
$carakerja_page = $_POST['carakerja'];
$kontak_page = $_POST['kontak'];
$jam  = date("h:i:s");
$data['success'] = true; 
$data['ipaddress'] = $ipaddress; 
$data['info'] = $info; 

$result = $crud->execute("INSERT INTO time_spent(
	id_time_spent, 
	ipaddress, info, 
	waktu, migrasi_page, 
	why_page, 
	carakerja_page, 
	kontak_page,
	jam) 
	VALUES('$id_time_spent',
	'$ipaddress',
	'$info',
	'$waktu',
	'$migrasi_page',
	'$why_page',
	'$carakerja_page',
	'$kontak_page',
	'$jam')");

?>