<?php
  include 'template/header.php';
  include_once("../classes/Crud.php");
  $crud = new Crud();
  //fetching data in descending order (lastest entry first)
  $queryTimeSpent = "SELECT COUNT(id_time_spent) as jumlah_timespent FROM `time_spent` ";
  $queryEmailNewsletter = "SELECT COUNT(id_email) as jumlah_email FROM `email_newsletter` ";
  $queryUserInteraction = "SELECT COUNT(id_histori) as jumlah_histori FROM `klik_histori` ";
  $timeSpent = $crud->getData($queryTimeSpent);
  $emailNewsletter = $crud->getData($queryEmailNewsletter);
  $userInteraction = $crud->getData($queryUserInteraction);
   ?>      <!-- Icon Cards-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-4 col-sm-6 mb-4">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-envelope"></i>
              </div>
              <div class="mr-5"><?php 
              foreach ($emailNewsletter as $key => $value) {
               echo $value['jumlah_email'] ;

              }
              ?> Email</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="shownewsletter.php">
              <span class="float-left">Lihat Detail</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5"><?php 
              foreach ($timeSpent as $key => $value) {
              echo $value['jumlah_timespent']; 
              }
               ?> Data</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="showtimespent.php">
              <span class="float-left">Lihat Detail</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-4">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-user"></i>
              </div>
              <div class="mr-5"><?php 
              foreach ($userInteraction as $key => $value) {
              echo $value['jumlah_histori'] ;}?> Data</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="showinteractionuser.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        
      </div>
</div>
      <!-- Area Chart Example-->
<?php 
  include 'template/footer.php';
?>