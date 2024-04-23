<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
      <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_signup.css">
</head>
<body>
    <center>
    <h1 >Signup</h1>
    <form method="post" action="<?php echo URLROOT; ?>/UserController/signUp">

    <img class="img-user" src="<?php echo URLROOT ?>/public/img/userlogo.png" alt="user">
    <input type="text" id="Name" name="Name" placeholder='user name'>

    </form>
</center>
<script src="<?php echo URLROOT ?>/public/js/form.js"></script>
</body>
</html>