<!DOCTYPE html>
<html>
<head>
	<title>Show Time spent User</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
	<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

</head>
<body>
 <h1><center>Show Time Spent User</center></h1>
 <div class="col-md-12">
 	<div class="container">
 	<?php
	include_once("../classes/Crud.php");
	$crud = new Crud();
	//fetching data in descending order (lastest entry first)
	$query = "SELECT * FROM time_spent";
	$result = $crud->getData($query);
	 ?>
	<table id="myTable" class="display">
	    <thead>
	        <tr>
	            <th>ipaddress</th>
	            <th>info</th>
	            <th>waktu</th>
	            <th>migrasi_page</th>
	            <th>why_page</th>
	            <th>carakerja_page</th>
	            <th>kontak_page</th>
	       		<th>jam</th>
	        </tr>
	    </thead>
	    <tbody>
	        <?php foreach ($result as $key => $res) { ?>
	        <tr>
	            <td><?php echo $res['ipaddress'] ?> detik</td>
	            <td><?php echo $res['info'] ?> detik</td>
	            <td><?php echo $res['waktu'] ?> detik</td>
	            <td><?php echo $res['migrasi_page'] ?> detik</td>
	            <td><?php echo $res['why_page'] ?> detik</td>
	            <td><?php echo $res['carakerja_page'] ?> detik</td>
	            <td><?php echo $res['kontak_page'] ?> detik</td>
	            <td><?php echo $res['jam'] ?> detik</td>
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