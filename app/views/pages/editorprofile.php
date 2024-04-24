<!DOCTYPE html>
<html>
    <head>
        <title>Editor Profile</title>
        <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_editorprofile.css">
    </head>
<body>

<script src="editorprofile.js"></script>
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

    <div class="wrapper">
        <div class="left">
    <h3>Editor Profile</h3>
    <br><br>
    <h3> Editor Info</h3>
    <h3> Edit Profile</h3>
    <h3> Upload Folders</h3>
    <h3>settings</h3>
</div><br><br>

<!--need to add upload folder, name, date-->
<div class="right">
<h3><b>Client Chosen Photos</b></h3>

<!--need to add choose photo list-->

<h3><b>Client Feedback</b></h3>
<fieldset>
<div class="rating">
         <i class="rating__star far fa-star"></i>
         <i class="rating__star far fa-star"></i>
         <i class="rating__star far fa-star"></i>
         <i class="rating__star far fa-star"></i>
         <i class="rating__star far fa-star"></i>
</div>
<div>
<p>This is a Feeedback!This is a Feedback!This is a Feedback!This is a Feedback!This is a Feedback!</p>
</div>
</div>

</fieldset>
</body>



</html>