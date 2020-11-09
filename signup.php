<?php # include 'header.php';  ?>

<?php
$servername = "localhost";
$username = "michael";
$password = "123456789";
$dbname = "michael";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST["usrname"]   )){
$insert = "INSERT INTO customers(`username`, `password`) VALUES ('" .$_POST["usrname"] ."', '" .$_POST["psw"] ."')";
$conn->query($insert);
if ($conn->commit()) {
    echo("registration successful\n");
}}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

/* Style all input fields */
input {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}

/* Style the submit button */
input[type=submit] {
  background-color: #ffa500;
  color: white;
}

/* Style the container for inputs */
.container {
  background-color: #307A97;
  padding: 20px;
}

/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
/* Two-column layout */
.col1 {
  float: left;
  width: 48%;
  margin: auto;
  padding: 0 0px;
  margin-top: 6px;
}
/* Two-column layout */
.col2 {
  float: right;
  width: 40%;
  margin: right;
  padding: 0 10px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* vertical line */
.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  height: 335px;
}

/* text inside the vertical line */
.vl-innertext {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}

/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}

/* bottom container */
.bottom-container {
  text-align: center;
  background-color: #666;
  border-radius: 0px 0px 4px 4px;
}

/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}
</style>
</head>
<body>
	<body>
	<div class="header">
	<h1>Sign Up</h1>
	<p><b>Please fill in this form to create an account.<b></p>
	</div>
	<div class="container">
	  <form action="/action_page.php">
	    <div class="row">
	      <h2 style="text-align:center">Let's get started</h2>
	      <div class="vl">
	        <span class="vl-innertext">and</span>
	      </div>

    <hr>
<div class="col1">
<form action="social.html">
    <label for="usrname"><b>Username<b></label>
		<input type="text" id="usrname" name="usrname" required>
		<label for="Email"><b>Email<b></label>
		<input type="text" id="email" name="email" required>
    <label for="psw"><b>Password<b></label>
    <input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
    <input type="submit" value="Submit" formmethod="post" formtarget="social1.html">
    </form>
</div>


	<div class="hide-md-lg">

	</div>
<div class="col2">
	<div id="pswd_info">
  	<h3><b>Password must contain the following:<b></h3>
  	<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  	<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  	<p id="number" class="invalid">A <b>number</b></p>
  	<p id="length" class="invalid">Minimum <b>8 characters</b></p>
	</div>

</div>
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
</body>
</body>
</html>
