<?php include 'template/header.php' ?>
 <div class="col-md-12">

 <h1 class="title"><center>Show Time Spent User</center></h1>
 	<div class="container">
 	<?php
	include '../classes/Crud.php';
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
<?php include 'template/footer.php' ?>
 