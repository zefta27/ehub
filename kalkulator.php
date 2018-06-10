<!DOCTYPE html>
<html>

<head>
    <title>Kalkulator</title>
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="Shortcut Icon" href="assets/img/favicon.ico" type="image/ico" />
  <!-- Custom fonts for this template -->
  <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">

</head>
<body style="padding:20px;">
   <div class="col-md-12">
   <div class="container">
     
<div class="card" >
  <div class="card-header">Kalkulator</div>
  <div class="card-body" style="text-align: center;">
   <input type="text" class="form-control e_bill" name="e_bill" placeholder="Masukkan Ebill Anda"><br>
      <button name="hitung" class="hitung btn btn-lg btn-primary">
          Hitung
      </button>
  </div>
</div>

<div class="card-result" style="margin-top: 20px;">
    <div class="card" >
  <div class="card-body" style="text-align: center;">
    <div class="result">
        
    </div>
</div>

</div>
      
     
   </div>
   </div>
</body>
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(".hitung").click(function (){
var result = $(".result");
result.empty();
        var e_bill = parseInt($(".e_bill").val());
        

var grid_price=1500; 
var infl=0.05;  
var eff_sun_hour=3;
var bought_kwh_pre=(e_bill*12 )/grid_price; 
var kwh_per_day=bought_kwh_pre /365;
var kwh_installed=kwh_per_day/(0.2*24);
var kva_installed=kwh_installed/0.85;


var IC = [];
IC= [0.9, 1.3, 2.2, 3.5, 4.4, 5.5, 6.6, 7.7, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 30, 50, 75, 100];


var error = [];
error[0] = kva_installed - IC[0];
var a  = 0;
for (var i = 1 ; i < 22; i++) {

    var sementara = kva_installed - IC[i];
    
    error[i]= Math.abs(sementara);
    if (error[i]<5) {
           if (error[i]<error[i-1]){
           console.log(i+" : "+Math.abs(sementara));

             a = i;
           }
    }
}

console.log(a);

var installed_cap=0.85*IC[a];
var lifetime=25;
var exchange_rate=13514;
var unit_install_cost=1.6;
var  total_cost= installed_cap* unit_install_cost*exchange_rate*1000;
var produced_kwh=365;
var bought_kwh_post=bought_kwh_pre-produced_kwh; 
var cost_pre = [];
var cost_post = [];
var percent_saving = [];
var saving = [];

var grid_price2 = [];
grid_price2[0] = grid_price;

for (var j = 0; j < lifetime; j++) {
    grid_price2[j+1]=grid_price2[j]*(1+infl);
}

for (var i = 0; i < lifetime; i++) {
    
    cost_pre[i] = bought_kwh_pre * grid_price2[i];
}

for (var i = 0; i < lifetime; i++) {
    
    cost_post[i] = bought_kwh_post * grid_price2[i];
}


var total_saving=0;

// console.log(total_saving);
for (var i = 0 ; i < lifetime; i++) {
    saving[i] = cost_pre[i]-cost_post[i];
    

    // console.log("percent_saving  :");
    // console.log(percent_saving[0]);


    percent_saving[i]=saving[i]/cost_pre[i];
    total_saving = total_saving + saving[i];
}

var yearly_saving=total_saving/lifetime;
var monthly_saving=yearly_saving/12;



var round_total_cost = Math.round(total_cost);
result.append('cost needed : '+round_total_cost+"<br>");

var res_installed_cap = installed_cap*1000;
result.append('to install solar system with Wp capacity of: '+res_installed_cap+"<br>");

var round_total_saving = Math.round(total_saving);
result.append('25 year saving: '+round_total_saving+"<br>");


var res_percent_saving = percent_saving[0]*100;
result.append('saving per year in percent: '+res_percent_saving+"<br>");

var round_yearly_saving = Math.round(yearly_saving);
result.append('average yearly saving: '+round_yearly_saving+"<br>");

var round_first_saving = Math.round(saving[0]/12);
result.append('1st month saving: '+round_first_saving+"<br>");

var round_monthly_saving = Math.round(monthly_saving);
result.append('average monthly saving:'+round_monthly_saving+"<br>");





        
        // $(".card-result").show();

     

    });
</script>
</html>