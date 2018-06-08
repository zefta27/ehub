<!DOCTYPE html>
<html>
<head>
	<title>Show Interaction User</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
	<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

</head>
<body>
 <h1><center>Show Interaction User</center></h1>
 <div class="col-md-12">
 	<div class="container">
 	<?php
	include_once("../classes/Crud.php");
	$crud = new Crud();
	//fetching data in descending order (lastest entry first)
	$query = "SELECT * FROM klik_histori";
	$result = $crud->getData($query);
	 ?>
	<table id="myTable" class="display">
	    <thead>
	        <tr>
	            <th>ip_address</th>
	            <th>info</th>
	            <th>aksi</th>
	            <th>waktu</th>
	        </tr>
	    </thead>
	    <tbody>
	        <?php foreach ($result as $key => $res) { ?>
	        <tr>
	            <td><?php echo $res['ip_address'] ?></td>
	            <td><?php echo $res['info'] ?></td>
	            <td><?php echo $res['aksi'] ?></td>
	            <td><?php echo $res['waktu'] ?></td>
	        </tr>
	        <?php } ?>
	    </tbody>
	</table>		
 	</div>
 </div>
 
 <script type="text/javascript">
 $(document).ready( function () {
    $('#myTable').DataTable();
 });
 </script>
</body>
</html>