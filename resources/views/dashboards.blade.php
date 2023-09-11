<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<style>
    .col-3:nth-child(1){
background-color:white;
width: 180px;
border:2px solid white;
color:black;


}
.col-3:nth-child(2){
background-color:white;
width: 180px;
border:2px solid white;
color:black;
}

.col-3:nth-child(3){
background-color:white;
width: 180px;
border:2px solid white;
color:black;
}
.col-3:nth-child(4){
background-color:white;
width: 180px;
border:2px solid white;
color:black;



}


#col-2 {


}

</style>




</head>
<body>

<div class="container-fluid mt-3" style="background-color: #1c2e4a; color:white;">
  <center><h1>ZOEZI</h1></center>
  <i class="fa fa-bars" id="burger" style="position:relative;font-size:36px;top:-52px"></i>
 
  <div class="container-fluid" >
    <div class="row" >
    
  

      <div class="col-2 bg-white text-white p-3" id="col-2" style="position:absolute;border:2px solid black;background-color:#B7E9F7;border-bottom:none;display:none;">
      <a href="/dashboards" class="fa fa-home" style="font-size:15px; text-decoration:none;color: #333;">HOME</a> <br><br>

    
  
     <a href="/members" class="fa fa-plus-square" style="font-size:15px; text-decoration:none;color: #333;">CLIENTS</a><br><br>
     <a href="/trainers" class="fa fa-calendar" style="font-size:15px; text-decoration:none;color: #333;">TRAINERS</a><br><br>
      <a href="/schedule" class="fa fa-calendar" style="font-size:15px; text-decoration:none;color: #333;">TRAINERS_SCHEDULE</a><br><br>
      <a href="/payment" class="fa fa-money" style="font-size:15px; text-decoration:none;color: #333;">PAYMENTS</a>


     
      </div>



    <div class="col-10 bg-white text-white p-3" id="col-10" style="position:relative;border:2px solid black;border-left:none;left:8%">
    <div class="row p-0 p-sm-1 p-md-2 p-lg-5 gap-0 gap-sm-5">  
    <div class="col-3 p-3" style="border:2px solid white;background-color: #1c2e4a;color:white">


 <p>ACTIVE CLIENTS</p>
 
 <i class="fa fa-user-plus" style="font-size:36px"></i>
 
 
        <h2>{{ $active_clients}} </h2>
   
    </div>


<div class="col-3 p-3" style="border:2px solid white;background-color: #1c2e4a;color:white;position:relative;right:-5%">

<p>TOTAL CLIENTS</p>
<i class="fa fa-group" style="font-size:36px"></i>
<h2>  {{$total}}</h2>
</div>


<div class="col-3 p-3"  style="border:2px solid white;background-color: #1c2e4a;color:white;position:relative;right:-10%">

<p>PAID THIS MONTH</p>
<i class="fa fa-money" style="font-size:36px"></i>
<h2>  {{$total_amount}}</h2>
</div>

<div class="col-3 p-3" style="position:relative;border:2px solid white;background-color: #1c2e4a;color:white;right:-14%">

<p>TOTAL TRAINERS</p>
<i class="fa fa-group" style="font-size:36px"></i>
<h2>  {{$total_trainers}}</h2>

</div>

</div>


      </div>
    </div>
    <canvas id="myChart" height="75px" ></canvas>
  </div>
  

</div>

</body>
  
<script type="text/javascript">
  
      var labels =  {{ Js::from($labels) }};
      var users =  {{ Js::from($data) }};
  
      const data = {
        labels: labels,
        datasets: [{
          label: 'Monthly payment curve',
          backgroundColor: 'red',
          borderColor: 'maroon',
          data: users,
        }]
      };
  
      const config = {
        type: 'line',
        data: data,
        options: {}
      };
  
      const myChart = new Chart(
        document.getElementById('myChart'),
        config
      );



const myElement = document.getElementById("burger");
const Element = document.getElementById("col-2");

function myFunction() {
  
  Element.style.display = "inline"; 
  Element.style.transition = " width 2s, height 4s"; 

}

// Add the onclick event to the button
myElement.onclick = myFunction;
  
</script>
</html>