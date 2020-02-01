<html>

<head>
  <title>Create an Account</title>
  <link rel="stylesheet" href="style.css">
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


<body id="signup_body">
<div class="signup_tab">
  <h1><u><font color="white">Enter Student Detail</font></u></h1>
  <br><br>
  <div class="signup_details">
    <h2>Enter your details here</h2>
    <form action="addscheck.php" method="post" >
      <p>Registration Number</p>
      <input type="text" name="regno" placeholder="Enter ID" required>
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
