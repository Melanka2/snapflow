<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_signIn.css">
</head>
<body>
    <h1 class="">Login</h1>
    <form method="post" action="<?php echo URLROOT; ?>/UserController/signIn">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <button type="submit" name="submitSignin">Login</button>
    </form>
</body>
</html>
