<?php include 'template/header.php'; ?>
 <div class="col-md-12">
 <h1><center><i class="fa fa-user"></i>&nbspShow Interaction User</center></h1>
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

<?php include 'template/footer.php'; ?>