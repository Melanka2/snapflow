<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
      <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_signup.css">
</head>
<body>

<div class="signup-container">
<form id="signup-form" method="post" action="<?php echo URLROOT; ?>/UserController/signUp">
            <h2>Sign Up</h2>
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" name="email" placeholder="email">
            </div>
            
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="Password">
            </div>
            <button name="submitSignup" value="submitSignup">Signup</button>
        </form>
</form>
    </div>

    <script src="<?php echo URLROOT ?>/public/js/form.js"></script>
</body>
</html>