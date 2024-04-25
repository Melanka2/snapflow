<!DOCTYPE html>
<head>
	<title>Payment Successful</title>
	
	<link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_booking.css">
</head>
<body>
    <img class="img-booking" src="<?php echo URLROOT ?>/public/img/booking.jpg">

    <div class="padding">
	<form style="background-color:#E6E6FA">
	<fieldset>
	<table table-width="100%">
		<tr>
			<td>
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
				<input type="radio" id="softcopy" value="Soft Copy">
                <input type="radio" id="hardcopy" value="Hard Copy">
				<br><br>
				
				<input type="submit" value="Proceed">
				<br><br>
			</td>
		</tr>
	</table>
	</fieldset>
	</form>
    </div>
</body>
</html>