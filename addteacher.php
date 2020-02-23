<?php
require_once('config.php');
require_once('allmenu.html');
require_once('adminlogin.php');
?>

<html>

<head>

  <style>
  .signup_tab{
    display: grid;
    background-color: transparent;
    grid-template-columns: 60% 40%;
    grid-gap: 0px;
    padding-top: 3%;
    padding-left: 30%;
  }

  .signup_tab div{
    background-color: black;
    color: white;
    opacity: 0.90;
    font-family: sans-serif;
    font-size: 15px;
    margin: 100px;
    padding: 5px;
  }

  .signup_tab .signup_info{
    background-color: transparent;
    margin: 50px;
    padding: 50px;
  }

  .signup_tab .signup_info h2{
    position: relative;
    font-size: 20px;
    text-align: justify;
  }

  .signup_tab .signup_details{
    margin: 0;
    padding: 30px 30px;
  }

  .signup_tab .signup_details h2{
    position: relative;
    font-size: 20px;
    text-align: center;
  }

  .signup_tab .signup_details p{
    padding: 0px;
    margin: 0;
    font-weight: bold;
  }

  .signup_tab .signup_details input[type="text"], input[type="password"], input[type="email"]{
    width: 100%;
    margin-bottom: 25px;
    border: 0px;
    border-bottom: 2px solid white;
    background: transparent;
    outline: none;
    height: 50px;
    color: white;
    font-size: 15px;
  }

  .signup_tab .signup_details input[type="submit"]{
    width: 100%;
    margin-top: 5px;
    margin-bottom: 5px;
    border:0;
    background-color: green;
    outline: none;
    height: 50px;
    color: white;
    font-size: 15px;
  }

  .signup_tab .signup_details input[type="submit"]:hover{
    cursor: pointer;
    background: blue;
  }

  </style>

  <title>Create an Account</title>
  <link rel="stylesheet" href="indexstyle.css">
  <!--<link rel="stylesheet" href="style.css">-->
  <script type="text/javascript">
    function isMatch(){
      var passwd = document.getElementById('pass').value;
      var cpasswd = document.getElementById('cpass').value;
      if (passwd !== cpasswd){
        alert("Paswords do not match.")
        return false;
      }
    }
  </script>
</head>


<body>
<div class="signup_tab">
  <h1><u><font color="#0A639C"><center>Enter Teacher Detail</center></font></u></h1>
  <br><br>
  <div class="signup_details">
    <h2>Enter your details here</h2>
    <form action="addascheck.php" method="post" >
      <p>ID</p>
      <input type="text" name="id" placeholder="Enter ID" required>
      <p>Name</p>
      <input type="text" name="name" placeholder="Enter name" required>
      <p>Email</p>
      <input type="text" name="email" placeholder="Enter email" required>
      <p>phone</p>
      <input type="text" name="phone" placeholder="Enter phone" required>
      <p>Cabin</p>
      <input type="text" name="cabin" placeholder="Enter cabin" required>
      <p>Address</p>
      <input type="text" name="address" placeholder="Enter address" required>
      <p>Password</p>
      <input type="password" name="password" id="pass" placeholder="Enter password" required>
      <p>Confirm password</p>
      <input type="password" name="conf_passwd" id="cpass" placeholder="Re-enter the password" required>
      <input type="submit" name="signup" value="CONFIRM" onclick="return isMatch();">
    </form>
  </div>
</div>
</body>
</html>
