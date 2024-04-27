<!DOCTYPE html>
<html>
<head>
    <title>Admin Table</title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_admintable.css">
</head>
<body>

<div class="topnav">
    <div class="test">
      <img src="<?php echo URLROOT ?>/public/images/logo new.png" alt="logo" width="100">
    </div>
    <div>
      <a class="active" href="#home">Home</a>
      <a href="#Blog">Blog</a>
      <a href="#About">About Us</a>
      <a href="#Packages">Packages</a>
    </div>
</div>
    <a href="<?php echo URLROOT ?>/PageController/logout">Logout</a>

    <?php var_dump($data) ?>

    <h3>Photography Oranization Request</h3>
    <table class="center">
  <tr>
    <th>Organization Name</th>
    <th>Description</th>
    <th>Skills</th>
    <th>Experence</th>
    <th>Select</th>
  </tr>
 
  <?php foreach ($data as $row) : ?>
      <tr>
        <td><?php echo $row->name; ?></td>
        <td><?php echo $row->description; ?></td>
        <td></td>
        <td></td>
        <td>
        <form method="post" action="<?php echo URLROOT; ?>/OrganizationController/acceptOrganization">
          <input type="hidden" name="id" value="<?php echo $row->organi_id; ?>">
          <button class="btn Accept" name="submitAccept" value="submitAccept" type="submit">Accept</button>
        </form>
          <button class="btn Decline">Decline</button>
          <button class="btn Delete">Delete</button>
        </td>
      </tr>
    <?php endforeach; ?>
</table>
</body>

</html>