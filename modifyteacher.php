<?php
require_once('config.php');
require_once('allmenu.html');
require_once('adminlogin.php');
?>

<html>

<head>

  <style>
  .tblwithhlines
  {
      border-left: 5px solid #00ffff;
      border-right: 5px solid #00ffff;
      border-bottom: 5px solid #00ffff;
      border-top: 5px solid #00ffff;
      font-family:Verdana, Arial, Helvetica, sans-serif;
      font-size:20px;
      font-weight:normal;
      background-color: cyan;
  }
  .tblwithhlines th
  {
      padding-left:10px;
      background-image:url(../images/package_bg.gif);
      background-repeat:repeat-x;
      font-family:Verdana, Arial, Helvetica, sans-serif;
      color:#000000;
      font-size:20px;
      font-weight:bold;
      height:20px;
  }
  .tblwithhlines td
  {
      padding:4px 4px 4px 10px;
      font-family:Verdana, Arial, Helvetica, sans-serif;
      color:#000000;
      font-size:20px;
      font-weight:normal;
      background-color:#ECEFF1;
      border-left: 0px solid #D0CFD4;
      border-right: 0px solid #D0CFD4;
      border-bottom: 1px solid #D0CFD4;
      border-top: 0px solid #D0CFD4;
  }

  .tblwithhlines a{
    color: red;
  }

  .tblwithhlines a:hover{
    color: purple;
  }

  .h
  {
    color: #0A639C;
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

  <center>
    <div class="h">
      <h1>Select Teacher<h1>
    </div>
    <table class="tblwithhlines">
      <tr>
        <td>Prof. S. Banarjee</td>
        <td><a href="updateteacher.php">update</a></td>
      </tr>
      <tr>
        <td>Prof. S. Giri</td>
        <td><a href="updateteacher.php">update</a></td>
      </tr>
    </table>
</center>

</body>
</html>
