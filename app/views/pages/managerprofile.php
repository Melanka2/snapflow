<!DOCTYPE html>
<html>

<head>
  <title> maneger profile</title>
  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_managerprofile.css">
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
   <div style="background-color: #b1c2fc ;width: 203px;height: 780px;float :left">
   
    
  <center>
  <h2>manager Profile</h2>
</center>
<form method = "post" action = ""> 
<center>
<table>
  <tr>
<td width="60px"><img src="<?php echo URLROOT ?>/public/images/user.png" alt="logo" width="35" ></td>
  <td><a style=" color: #151515;text-decoration: none;font-size: 17px;"href="# info"> user info</a></td>
  <tr>

  <tr>
<td><img src="<?php echo URLROOT ?>/public/images/edituser.png" alt="logo" width="35" ></td>
  <td><a style=" color: #151515;text-decoration: none;font-size: 17px;" href="#edit profile"> edit profile</a></td>
  <tr>


<tr>
<td><img src="<?php echo URLROOT ?>/public/images/settings.png" alt="logo" width="35" ></td>
  <td><a style=" color: #151515;text-decoration: none;font-size: 17px;" href="#setting"> setting</a></td>
  <tr>

  </table><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<table>
  <tr>
  <td width="60px"><img src="<?php echo URLROOT ?>/public/images/signout.png" alt="logo" width="35" ></td>
  <td><a  style=" color: #151515;text-decoration: none;font-size: 17px;"href="<?php echo URLROOT ?>/PageController/logout">Logout</a></td>
  </tr>
</table>
</center>
   </div>
   <div style="background-color:  aliceblue; width: 1300px;height: 780px; float:right; ">

   <form action="" method="post"></form><br><br><br>

   <center>
      <labael><h2>Photographers Name</h2></label>
       <select style ="width: 50%; padding: 12px 20px; display: inline-block;  border: 1px solid #ccc; 
   border-radius: 10px; box-sizing: border-box;margin: 8px 0; display: inline-block;" >
         <option value="RathnaKumara"> RathnaKumara</option>
         <option value="ediri"> Edirimuni</option>
         <option value="wigita"> Wigitapriya</option>
         <option value="kumarasiri">kumarasiri</option>
       </select>

         <br><br><br><br><hr>
     
   <h2 font-size: 34px> Client Request for photographer</h2>

  <labal  style=" font-size: medium; font-weight: bold;font-size: 20px">client name</labal>
   <input type ="text" class="" placeholder=""style ="width: 50%; padding: 12px 20px; display: inline-block;  border: 1px solid #ccc; 
   border-radius: 10px; box-sizing: border-box;margin: 8px 0; display: inline-block;"><br><br><br>

   <labal  style=" font-size: medium; font-weight: bold; font-size: 20px">event name </labal>
   <input type ="text" class="" placeholder=""style ="width: 50%; padding: 12px 20px; display: inline-block;  border: 1px solid #ccc; 
   border-radius: 10px; box-sizing: border-box;margin: 8px 0; display: inline-block;"><br><br><br>

   <labal  style=" font-size: medium; font-weight: bold;font-size: 20px">location </labal>
   <input type ="text" class="" placeholder=""style ="width: 50%; padding: 12px 20px; display: inline-block;  border: 1px solid #ccc; 
   border-radius: 10px; box-sizing: border-box;margin: 8px 0; display: inline-block;"><br><br><br>

   <input type="submit" value="submit" style="width: 35%; padding: 12px 20px; display: inline-block; 
    border: 1px solid #ccc;border-radius: 10px; box-sizing: border-box; margin: 8px 0;background-color:#8d87e8">

 </form>

    <center>
    

            <tr>
              <td><img src="<?php echo URLROOT ?>/public/images/settings.png" alt="logo" width="50"></td>
              <td><a style=" color: #151515;text-decoration: none;font-size: 17px;" href="#setting"> setting</a></td>
            <tr>

          </table><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          <table>
            <tr>
              <td width="60px"><img src="<?php echo URLROOT ?>/public/images/signout.png" alt="logo" width="50"></td>
              <td><a style=" color: #151515;text-decoration: none;font-size: 17px;" href="<?php echo URLROOT ?>/PageController/logout">Logout</a></td>
            </tr>
          </table>
        </center>
    </div>
    <div style="background-color:  aliceblue; width: 1000px;height: 780px; float:right; ">


      </div">

    </div>
</body>

</html>