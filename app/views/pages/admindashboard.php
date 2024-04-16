<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_admindashboard.css">
</head>

<body>

<h1>Admin Dashboard</h1>

<div style="width: 600px;">
    <canvas id="myChart"></canvas>
</div>
    <a href="<?php echo URLROOT ?>/PageController/logout">Logout</a>

    <script src="<?php echo URLROOT ?>/public/js/admindashboard.js"></script>
</body>

</html>