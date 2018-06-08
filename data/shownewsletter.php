<?php include 'template/header.php'; ?>
 <div class="col-md-12">
 <h1><center><i class="fa fa-envelope" ></i>&nbspShow Newsletter</center></h1>
 	<div class="container">
 	<?php
	include_once("../classes/Crud.php");
	$crud = new Crud();
	//fetching data in descending order (lastest entry first)
	$query = "SELECT * FROM email_newsletter";
	$result = $crud->getData($query);
	 ?>
	<table id="myTable" class="display">
	    <thead>
	        <tr>
	            <th>ipaddress</th>
	            <th>Email</th>
	            <th>info</th>
	            <th>waktu</th>
	            <th>Jam</th>
	        </tr>
	    </thead>
	    <tbody>
	        <?php foreach ($result as $key => $res) { ?>
	        <tr>
	            <td><?php echo $res['ipaddress'] ?></td>
	            <td><?php echo $res['email'] ?></td>
	            <td><?php echo $res['info'] ?></td>
	            <td><?php echo $res['waktu'] ?></td>
	            <td><?php echo $res['jam'] ?></td>
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