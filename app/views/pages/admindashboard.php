<!DOCTYPE html>
<html>

<head>
    <title>Admin</title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_admindashboard.css">
</head>

<body>

    <h1 class=""><?php echo $_SESSION["email"] ?></h1>
    <a href="<?php echo URLROOT ?>/PageController/logout">Logout</a>
</body>
<script src="<?php echo URLROOT; ?>/public/js/form.js"></script>

</html>