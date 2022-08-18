
<?php
include_once'../functions.php';
include 'inc/header.php';
if(!isLoggedIn()){
    header('location:../login.php');
}
?>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        google.charts.setOnLoadCallback(drawChart1);
  
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ['Year', 'Sales', 'Expenses'],
            ['2019',  1000,      400],
            ['2020',  1170,      460],
            ['2021',  660,       1120],
            ['2022',  1030,      540]
          ]);
  
          var options = {
            title: 'Te ardhura vjetore',
            curveType: 'function',
            legend: { position: 'bottom' }
          };
  
          var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
  
          chart.draw(data, options);
        }
        function drawChart1() {
          var data = google.visualization.arrayToDataTable([
            ['Year', 'Sales', 'Expenses'],
            ['2019',  1000,      400],
            ['2020',  1170,      460],
            ['2021',  660,       1120],
            ['2022',  1030,      540]
          ]);
  
          var options = {
            title: 'Porosi vjetore',
            curveType: 'function',
            legend: { position: 'bottom' }
          };
  
          var chart = new google.visualization.LineChart(document.getElementById('curve_chart1'));
  
          chart.draw(data, options);
        }
      </script>
<?php
include 'inc/nav.php';
?>
    <h1 class="text-center">Miresevini ne Panelin Admin</h1>
   
</div>
<div class="col-md-6" style="margin-left:28%; ">
    <div class="row d-block" style="margin-top:20%;" >
        <div id="curve_chart" style="width: 700px; height: 400px;"></div>
    </div>

</div>

<div class="col-md-6 d-block"style="margin-left:28%; ">
    <div class="row"style="margin-top: 30px;">
        <div id="curve_chart1" style="width: 700px; height: 400px " ></div>
    </div>

</div>
</div>
</div>
</div>
   
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>