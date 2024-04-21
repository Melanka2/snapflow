<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_signIn.css">
</head>

<body>
    <h1 class="">Login</h1>
    <form method="post" action="<?php echo URLROOT; ?>/UserController/signIn">
        <input type="text" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="submitSignin">Login</button>
    </form>
    <div class='img-cls'>
        <img class="img-login" src="<?php echo URLROOT ?>/public/img/website.jpg" alt="login">
    </div>
</body>

</html>