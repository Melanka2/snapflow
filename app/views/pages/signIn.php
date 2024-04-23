<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_signIn.css">
</head>

<body>
    
    <form method="post" action="<?php echo URLROOT; ?>/UserController/signIn">

   <form action="/action_page.php" method="post">
  
  <img src="<?php echo URLROOT ?>/public/images/log image.jpg" alt="log" width="100%" height="80%">

<div class="login-container">
        <form id="login-form">
           
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
    
    <script src="<?php echo URLROOT ?>/public/js/login.js"></script>
</body>

</html>