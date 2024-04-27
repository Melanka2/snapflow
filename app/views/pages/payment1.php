<!DOCTYPE html>
<head>
	<title>Payment 1</title>
	
	<link rel="stylesheet" href="payment1.css">
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

    <div class="padding">
        <form style="background-color:#ddf1f7">
        <fieldset>

        <h1>We accept credit card or debit card payments only.</h1>

        <h2>Debit/Credit card</h2>

        <label>Name on card:</label><br>
        <div class="input-padding">
        <input type="text" id="cardholder" name="cardholder" value="Card holder's name" required>
        </div>
        <br><br>

        <label>Debit/Credit card number:</label><br>
        <div class="input-padding">
        <input type="text" id="cardnumber" name="cardnumber" value="0000 0000 0000 0000" required>
        </div>
        <br><br>

        <label>Expiration date:</label><br>
        <div class="input-padding">
        <input type="date" id="expdate" name="expdate" required>
        </div>
        <br><br>

        <label>Security code:</label><br>
        <div class="input-padding">
        <input type="text" id="pin" name="pin" size="3" maxlength="3" required>
        </div>
        <br><br>
        
        <button onclick="back()">Back</button>
        
        <div class="right">
        <input type="submit" value="Pay">
        </div>
        
        </fieldset>
        </form>
    </div>

    <script>
        function back(){
            window.history.back();
        }
    </script>
	
</body>
</html>