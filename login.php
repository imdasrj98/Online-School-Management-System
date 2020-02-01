<html>
<head>
<title>DGS LOG IN</title>
<link rel="stylesheet" href="style.css">

<style>
body{
  background-image: url("./images/log.jpg");
  background-size: 70% auto;
  background-repeat: no-repeat;
  background-position: center;
}
</style>


</head>
<body>
  <div class="login_tab" name="login_form">
    <img src="./images/login_avatar.jpeg" alt="Login Avatar" class="login_avatar">
    <h1>Login here</h1>
    <form action="logincheck.php" method="post">
      <p>Username</p>
      <input type="text" name="userid" placeholder="Enter your username" required>
      <p>Password</p>
      <input type="password" name="password" placeholder="Enter your password" required>
      <input type="submit" name="login" value="Login">
    </form>
    <a href="forgetpass.php">Forget Password. Click Here</a>
  </div>

</body>
</html>
