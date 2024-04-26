<!DOCTYPE html>
<head>
    <title>Booking Page</title>

    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_booking.css">
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
    </div>
    <div class="log">
      <a href="<?php echo URLROOT ?>/PageController/signup">Signup</a>
      <a href="<?php echo URLROOT ?>/PageController/signIn">Login</a>
    </div>
  </div>

<img class="img-booking" src="<?php echo URLROOT ?>/public/img/booking.jpg">

<div class="padding">
	<form style="background-color:#E6E6FA">
	<fieldset>

				<label>First Name</label>
				<input type="text" value="(Amila)">
				<br><br>
	
				<label>Last Name</label>
				<input type="text" value="(Fernando)">
				<br><br>
	
				<label>Email</label>
				<input type="text" value="Email Address">
				<br><br>
	
				<label>Phone Number</label>
				<input type="text" value="+94">
				<br><br>
				
				<label>Package Type</label>
				<select>
					<option value="pack1">Package 1</option>
					<option value="pack2">Package 2</option>
					<option value="pack3">Package 3</option>
				</select>
				<br><br>
				
				<label>Photographer Name</label>
				<select>
					<option value="p1">Lakshan</option>
					<option value="p2">Kasun</option>
					<option value="p3">Malith</option>
				</select>
				<br><br>
				
				<label>Date</label>
				<input type="date">
				<br><br>
				
				<label>Venue</label>
				<input type="text" value="Location">
				<br><br>
				
				<label>Copy Type</label>
				<br>
                <div class="radio-padding">
				<input type="radio" id="softcopy" value="softcopy" name="copy"> Soft Copy </div>
				<div class="radio-padding">
                <input type="radio" id="hardcopy" value="hardcopy" name="copy"> Hard Copy </div>
				<br><br>
				
				<div class="right">
				<input type="submit" value="Proceed">
				<br><br>
				</div>

	</fieldset>
	</form>	
	</div>
</body>
</html>