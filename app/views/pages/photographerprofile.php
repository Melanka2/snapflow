<!DOCTYPE html>
<html>
<head>
    <title>Photographer Profile</title>
   <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_photographerprofile.css">
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
      <a href="#feedback">Feedback </a>
    </div>
</div>

<div style="background-color: blueviolet; width: 1503px;height: 780px;">
  <div clsss="div2" style="background-color: #b1c2fc ;width: 503px;height: 780px;float :left">
   
  <center>
  <h2>Photographer Profile</h2>
</center>
<form method = "post" action = ""> 
<center>
<table>
  <tr>
<td width="60px"><img src="<?php echo URLROOT ?>/public/images/user.png" alt="logo" width="50" ></td>
  <td><a style=" color: #151515;text-decoration: none;font-size: 17px;"href="#photographer info"> Photographer info</a></td>
  <tr>

  <tr>
<td><img src="<?php echo URLROOT ?>/public/images/upload.png" alt="logo" width="50" ></td>
<td><a style=" color: #151515;text-decoration: none;font-size: 17px;"  href="#photographer info"> upload</a></td>
  <tr>

  <tr>
<td><img src="<?php echo URLROOT ?>/public/images/edituser.png" alt="logo" width="50" ></td>
  <td><a style=" color: #151515;text-decoration: none;font-size: 17px;" href="#edit profile"> edit profile</a></td>
  <tr>


<tr>
<td><img src="<?php echo URLROOT ?>/public/images/settings.png" alt="logo" width="50" ></td>
  <td><a style=" color: #151515;text-decoration: none;font-size: 17px;" href="#setting"> setting</a></td>
  <tr>

  </table><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<table>
  <tr>
  <td width="60px"><img src="<?php echo URLROOT ?>/public/images/signout.png" alt="logo" width="50" ></td>
  <td><a  style=" color: #151515;text-decoration: none;font-size: 17px;"href="<?php echo URLROOT ?>/PageController/logout">Logout</a></td>
  </tr>
</table>
</center>
</div>
  <div class="div1" style="background-color:  aliceblue; width: 1000px;height: 780px; float:right; ">
  <br>
  <center>
     <h2> Photographer Bio </h2>
  </center>
     <form method = "post" action = ""> 
<center>
  <table>
    <tr>
      <td ><labal>First Name :</label></td>
      <td width="700px"><input type="text" class="name" name="first name"placeholder="first name" ></td>
   </tr>

   <tr>
     <td><labal> Last Name :</labal></td>
     <td><input type ="text" class="name" name ="last name" placeholder ="last name"></td>
</tr>

   <tr>
     <td><lable>Contact Number :</labal></td>
     <td><input type ="text" class="name" name="contact" placeholder="contact"></td>
  </tr>
  
  <tr>
     <td><labal> E-Mail :</labal></td>
     <td><input type="email" class="name" name="e-mail" placeholder="e-mail"></td>
 </tr>

 <tr>
     <td><labal> NIC Number:</labal></td>
     <td><input type="text" class="name" name="nic" placeholder="nic number"></td>
 </tr>

</table>

<hr>

<h2> Photographer request</h2>


<table>
    <tr>
      <td ><labal>First Name :</label></td>
      <td width="700px"><input type="text" id="name" name="first name"placeholder="first name" ></td>
   </tr>

   <tr>
     <td><labal> Skill :</labal></td>
     <td><input type ="text" id="skill" name ="skill" placeholder ="skill"></td>
</tr>

   <tr>
     <td><lable>experiance :</labal></td>
     <td><input type ="text" id="exp" name="experience" placeholder="experiance"></td>
  </tr>
  
  <tr>
     <td><labal> E-Mail :</labal></td>
     <td><input type="email" class="name" name="e-mail" placeholder="e-mail"></td>
 </tr>
</table>

<input type ="submit" value ="submit"style="width: 35%; padding: 12px 20px; display: inline-block; 
 border: 1px solid #ccc;border-radius: 10px; box-sizing: border-box; margin: 8px 0;background-color:#8d87e8">
</form>

</center>  


</div>


</div>

</body>
</html>