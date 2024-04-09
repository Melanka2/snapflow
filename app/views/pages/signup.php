<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
      <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_signup.css">
</head>
<body>
    <h1 >Signup</h1>
    <form method="post" action="<?php echo URLROOT; ?>/UserController/signUp">
        <input type="text" name="email" placeholder="email">
        <input type="password" name="password" placeholder="Password">
        <button name="submitSignup" value="submitSignup">Signup</button>
    </form>
</body>
</html>