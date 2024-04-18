<!DOCTYPE html>
<html>

<head>
  <title>Blog</title>
  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_blog.css">
</head>

<body>
 <?php var_dump($data); ?>
  <div class="topnav">
    <div class="test">
      <img src="<?php echo URLROOT ?>/public/images/logo new.png" alt="logo" width="100">
    </div>
    <div>
      <a href="#Home">Home</a>
      <a class="active" href="#Blog">Blog</a>
      <a href="#About us">About Us</a>
      <a href="#Packages">Packages</a>
    </div>
    <div class="log">
      <a href="<?php echo URLROOT ?>/PageController/signup">Signup</a>
      <a href="<?php echo URLROOT ?>/PageController/signIn">Login</a>
    </div>
  </div>

  <h1>Photography Organization</h1>

  <div class="testimonial-container">

  <?php foreach ($data as $organization) :  
  ?>
    <div class="testimonial">
      <img src="<?php echo URLROOT ?>/public/images/p1.png" alt="company 1">
      <p class="testimonial-text">"Best photography,Nice photo editing & Good service..."</p>

      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <p class="testimonial-company"><?php echo $organization->name; ?>  </p>
    </div>
    <?php endforeach; ?>
  
  </div>
  </div>

  <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="<?php echo URLROOT ?>/public/images/image9.jpeg" alt="wedding 1" style="width:100%">
      <div class="text">Caption Text</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="<?php echo URLROOT ?>/public/images/image10.jpg" alt="wedding 2" style="width:100%">
      <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="<?php echo URLROOT ?>/public/images/image8.jpg" alt="wedding 3" style="width:100%">
      <div class="text">Caption Three</div>
    </div>

  </div>
  <br>

  <div class="dot text">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>

  <script src="<?php echo URLROOT ?>/public/js/blog.js"></script>

</body>

</html>