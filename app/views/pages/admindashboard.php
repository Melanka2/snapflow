

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_admindashboard.css">
</head>

<body>

<div class="topnav">
    <div class="test">
      <img src="<?php echo URLROOT ?>/public/images/logo new.png" alt="logo" width="100">
    </div>
    <div>
      <a class="active" href="#home">Home</a>
      <a href="#Blog">Blog</a>
      <a href="#About us">About Us</a>
      <a href="#Packages">Packages</a>
    </div>
</div>

<h1>Admin Dashboard</h1>
<?php echo $_SESSION['email']  ?>
<a href="<?php echo URLROOT ?>/PageController/logout">Logout</a>


<div style="width: 400px;">
    <canvas id="myChart"></canvas>
</div>

<div style="width: 300px;">
    <canvas id="myChart1"></canvas>
</div>
  
<div style="width: 400px;">
    <canvas id="myChart2"></canvas>
</div>

<div style="width: 400px;">
    <canvas id="myChart3"></canvas>
</div>
  
  
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="<?php echo URLROOT ?>/public/js/barChart.js"></script>

    <script src="<?php echo URLROOT ?>/public/js/pieChart.js"></script>

    <script src="<?php echo URLROOT ?>/public/js/lineChart.js"></script>

    <script src="<?php echo URLROOT ?>/public/js/dotLineChart.js"></script>
</body>

</html>