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
    <html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #307A97;
}

* {
  box-sizing: border-box;
}

/* style the container */
.container {
  position: relative;
  border-radius: 5px;
  background-color: #f2f2f2
  padding: 20px 0 30px 0;
}

/* style inputs and link buttons */
input,
.btn {
  width: 20%;
  padding: 12px;
  border:2px solid Violet;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 15px;
  line-height: 15px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}


/* style the submit button */
input[type=submit] {
  background-color: #ffa500;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #ffa450
}

/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
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
  height: 175px;
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
<h1>Forgot Password?</h1>

<form action="/action_page.php">
  <label for="email">Enter your email:</label>
  <input type="email" id="email" name="email"><br><br>

  <label for="pin">Enter a PIN:</label>
  <input type="text" id="pin" name="pin" maxlength="4"><br><br>


  <input type="submit" value="Submit">
</form>
<a href="chgpwd.html" style="color:white" class="btn">Change Password</a>
 </html>
