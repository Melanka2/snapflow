<!DOCTYPE html>
<html>
<head>
    <title>Admin Profile</title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_adminprofile.css">
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
    <a href="<?php echo URLROOT ?>/PageController/logout">Logout</a>


    <h3>Photography Oranization Request</h3>
    <table class="center">
  <tr>
    <th>Photographer Name</th>
    <th>Editer Name</th>
    <th>Skills</th>
    <th>Experence</th>
    <th>Select</th>
  </tr>
  <tr>
    <td>kushan</td>
    <td>Sumith</td>
    <td></td>
    <td></td>
    <td><button class="btn Accept">Accept</button>
<button class="btn Decline">Decline</button></td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td></td>
    <td></td>
    <td><button class="btn Accept">Accept</button>
<button class="btn Decline">Decline</button></td>
  </tr>
  <tr>
    <td>John</td>
    <td>Doe</td>
    <td></td>
    <td></td>
    <td><button class="btn Accept">Accept</button>
<button class="btn Decline">Decline</button></td>
  </tr>
  <tr>
    <td>Yutheesh</td>
    <td>Sadira</td>
    <td></td>
    <td></td>
    <td><button class="btn Accept">Accept</button>
<button class="btn Decline">Decline</button></td>
  </tr>
</table>
</body>
</html>