<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
      <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_signup.css">
</head>
<body>

<div class="signup-container">
        <form id="signup-form">
            <h2>Sign Up</h2>
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Sign Up</button>
        </form>
    </div>

    <script src="<?php echo URLROOT ?>/public/js/form.js"></script>
</body>
</html>