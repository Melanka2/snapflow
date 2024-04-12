<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_homepage.css">
</head>
<body>


<img src="<?php echo URLROOT ?>/public/images/logo new.png" alt="logo" class="logimg">

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#Blog">Blog</a>
  <a href="#About us">About Us</a>
  <a href="#Packages">Packages</a>
    <div class="log">
    <a href="<?php echo URLROOT ?>/PageController/signup"><button class="Signup">Sign up</button></a>
    <a href="<?php echo URLROOT ?>/PageController/signIn"><button class="Login">Log in</button></a>
</div> 
</div>

<div class="center">
  <img src="<?php echo URLROOT ?>/public/images/image 3.jpg" alt="girl" width="98%" height="700">
  <div class="text-block_1">
    <h1>Welcome to SnapFlow event photography</h1>
</div>
    <div class="text-block_2">
    <p><h3>We are a photography company, creating memorirs through lens...</h3></p>
  </div>
  <div class="centered">
    
    <label for="date">Select Date:</label>
    <input type="date" id="date" name="date">

    <label for="category">Select Category:</label>
    <select id="category" name="category">
      <option value="Wedding">Wedding</option>
      <option value="Birthday">Birthday</option>
      <option value="Get">Get</option>
      <button type="submit">Search</button>
  </div>
</div>

<h1>Stories</h1><br>

<div class="row">
  <div class="column">
    <img src="<?php echo URLROOT ?>/public/images/image4.jpg" alt="wedding">
    <img src="<?php echo URLROOT ?>/public/images/image_2.jpg" alt="rock">
    <img src="<?php echo URLROOT ?>/public/images/image10.jpg" alt="uno">
    
  </div>
  <div class="column">
    <img src="<?php echo URLROOT ?>/public/images/image6.jpg" alt="uno">
    <img src="<?php echo URLROOT ?>/public/images/image5.jpg" alt="ocun">
  </div>

    <div class="column">
    <img src="<?php echo URLROOT ?>/public/images/image7.jpeg" alt="falls">
    <img src="<?php echo URLROOT ?>/public/images/image8.jpg" alt="ocun" >
  </div>
    
  </div>
 
</div>
</body>
</html>
