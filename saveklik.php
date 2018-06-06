<?php

$ipaddress = $_POST['ipaddress'];
$info =  $_POST['info'];
$aksi= $_POST['aksi'];

$data['success'] = true; 
$data['ipaddress'] = $ipaddress; 
$data['info'] = $info; 
$data['aksi'] = $aksi; 

echo json_encode($data);

?>