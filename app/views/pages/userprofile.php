<!DOCTYPE html>
<html>
<head>
   <title>User Profile</title>
   <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_userprofile.css">
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
    <div class="log">
      <a href="<?php echo URLROOT ?>/PageController/signup">Signup</a>
      <a href="<?php echo URLROOT ?>/PageController/signIn">Login</a>
    </div>
  </div>
<section class="profile">
    <div class="profile-bg">
        <div class="profile-info">
            <div class="profile-info-img">
                <p>User Profile</p>
                <div class="break"></div>
                <h3> User Info</h3>
                <h3> Editing</h3>
                <h3> Settings</h3>
                <h3> Download Folders</h3>
            </div>
        </div>
    </div>
    <div class="profile-content">
        <div class="profile-intro">
            <h3> Anumi Inupama</h3>
            <br> <br>
            <form action="">
                <label for="fname">First Name</label>
              <br>
                <input type="text" id="fname" name="fname" value="Anumi" required><br>
                <label for="lname">Last Name</label>
             <br>
                <input type="text" id="lname" name="lname" value="Inupama" required><br>
                <label for="email">Email Address</label>
            <br>
                <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please enter valid E-mail" required><br>
                <label for ="number"> Phone Number</label>
            <br>
                <input type="tel" id="number" name="number" pattern="[0-9](10)" title="Please enter valid mobile number" required><br>
                <label for="NIC"> NIC Number</label>
            <br>
                <input type="NIC" id="NIC" name="NIC" required><br>
                <label for="EmergContact">Emergency Contact</label>
            <br>
                <input type="EmergContact" id="EmergContact" name="EmergContact" required><br>

            <!--need to change as save changes-->
                <input type="submit" value="Submit">
</form>


</body>
</html>           