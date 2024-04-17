<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_admindashboard.css">
</head>

<body>

<h1>Admin Dashboard</h1>
<a href="<?php echo URLROOT ?>/PageController/logout">Logout</a>


<div style="width: 600px;">
    <canvas id="myChart"></canvas>
</div>

<canvas id="myChart" width="400" height="200"></canvas>

<div class="grid">
      <div class="bar" style="--bar-value:85%;" data-name="Your Blog" title="Your Blog 85%"></div>
      <div class="bar" style="--bar-value:23%;" data-name="Medium" title="Medium 23%"></div>
     <div class="bar" style="--bar-value:7%;" data-name="Tumblr" title="Tumblr 7%"></div>
      <div class="bar" style="--bar-value:38%;" data-name="Facebook" title="Facebook 38%"></div>
      <div class="bar" style="--bar-value:35%;" data-name="YouTube" title="YouTube 35%"></div>
      <div class="bar" style="--bar-value:30%;" data-name="LinkedIn" title="LinkedIn 30%"></div>
      <div class="bar" style="--bar-value:5%;" data-name="Twitter" title="Twitter 5%"></div>
      <div class="bar" style="--bar-value:20%;" data-name="Other" title="Other 20%"></div>    
  </div>
  <script src="<?php echo URLROOT ?>/public/js/admindashboard.js"></script>
</body>

</html>