<!DOCTYPE html>
<html>

<head>
  <title> maneger profile</title>
  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_managerprofile.css">
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
      <a href="#feedback">Feedback </a>
    </div>
  </div>
  <div style="background-color: blueviolet; width: 1503px;height: 780px;">
    <div style="background-color: #b1c2fc ;width: 503px;height: 780px;float :left">


      <center>
        <h2>Photographer Profile</h2>
      </center>
      <form method="post" action="">
        <center>
          <table>
            <tr>
              <td width="60px"><img src="<?php echo URLROOT ?>/public/images/user.png" alt="logo" width="50"></td>
              <td><a style=" color: #151515;text-decoration: none;font-size: 17px;" href="# info"> user info</a></td>
            <tr>

            <tr>
              <td><img src="<?php echo URLROOT ?>/public/images/edituser.png" alt="logo" width="50"></td>
              <td><a style=" color: #151515;text-decoration: none;font-size: 17px;" href="#edit profile"> edit profile</a></td>
            <tr>


            <tr>
              <td><img src="<?php echo URLROOT ?>/public/images/settings.png" alt="logo" width="50"></td>
              <td><a style=" color: #151515;text-decoration: none;font-size: 17px;" href="#setting"> setting</a></td>
            <tr>

          </table><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          <table>
            <tr>
              <td width="60px"><img src="<?php echo URLROOT ?>/public/images/signout.png" alt="logo" width="50"></td>
              <td><a style=" color: #151515;text-decoration: none;font-size: 17px;" href="<?php echo URLROOT ?>/PageController/logout">Logout</a></td>
            </tr>
          </table>
        </center>
    </div>
    <div style="background-color:  aliceblue; width: 1000px;height: 780px; float:right; ">


      </div">

    </div>
</body>

</html>