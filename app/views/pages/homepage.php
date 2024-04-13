<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_homepage.css">
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
      <a href="<?php echo URLROOT ?>/PageController/signup"><button class="Signup">Sign up</button></a>
      <a href="<?php echo URLROOT ?>/PageController/signIn"><button class="Login">Log in</button></a>
    </div>
  </div>

  <div class="center">
    <img src="<?php echo URLROOT ?>/public/images/image 3.jpg" alt="girl" width="100%" height="600">
    <div class="text-block_1">
      <h2>Welcome to <b>SnapFlow</b> event photography</h2>
    </div>
    <div class="text-block_2">
      <p>
      <h3>We are a photography company, creating memorirs through lens...</h3>
      </p>
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
      </select>
    </div>
  </div>

  <h2>Stories</h2><br>

  <div class="row" >
    <div class="column">
      <img src="<?php echo URLROOT ?>/public/images/image4.jpg" alt="wedding">
      <img src="<?php echo URLROOT ?>/public/images/image_2.jpg" alt="rock">
      <img src="<?php echo URLROOT ?>/public/images/image10.jpg" alt="uno">

    </div>
    <div class="column">
      <img src="<?php echo URLROOT ?>/public/images/image6.jpg" alt="uno">
      <img src="<?php echo URLROOT ?>/public/images/image9.jpeg" alt="ocun">
      <img src="<?php echo URLROOT ?>/public/images/image_2.jpg" alt="rock">
    </div>

    <div class="column">
      <img src="<?php echo URLROOT ?>/public/images/image7.jpeg" alt="falls">
      <img src="<?php echo URLROOT ?>/public/images/image8.jpg" alt="ocun">
      <img src="<?php echo URLROOT ?>/public/images/image4.jpg" alt="wedding">
    </div>
  </div>
  </div>

  <div class=cent>
  <h2>Best Rating</h2>

  <div class="testimonial-container">
    <div class="testimonial">
    <img src="<?php echo URLROOT ?>/public/images/photo1.jpg" alt="User 1">
        <p class="testimonial-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</p>
        <p class="testimonial-user">- John Doe</p>
    </div>
    <div class="testimonial">
        <img src="user2.jpg" alt="User 2">
        <p class="testimonial-text">"Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
        <p class="testimonial-user">- Jane Smith</p>
    </div>
    <div class="testimonial">
        <img src="user1.jpg" alt="User 1">
        <p class="testimonial-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</p>
        <p class="testimonial-user">- John Doe</p>
    </div>
    <div class="testimonial">
        <img src="user2.jpg" alt="User 2">
        <p class="testimonial-text">"Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
        <p class="testimonial-user">- Jane Smith</p>
    </div>
    <!-- Add more testimonials as needed -->
</div>
  </div>

<script src="script.js"></script>

</body>

</html>