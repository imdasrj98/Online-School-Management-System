<?php
require_once('config.php');
require_once('allmenu.html');
require_once('adminlogin.php')
?>

<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  body {
    font-family: "Lato", sans-serif;
  }

  .sidenav1 {
    height: 80%;
    width: 250px;
    position: fixed;
    z-index: 1;
    top: 192px;
    left: 200px;
    margin-bottom: auto;
    background-color: #000000;
    overflow-x: hidden;
    padding-top: 20px;
    padding-bottom: 20px;
    height: auto;
  }

  .sidenav1 a {
    padding: 6px 6px 6px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
  }

  .sidenav1 a:hover {
    color: #f1f1f1;
  }

  .main {
    margin-left: 200px;
    /* Same as the width of the sidenav */
  }

  @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
  }
</style>

</head>

<body>

<div class="sidenav1">
  <a href="addstaff.php">Add Staff</a>
  <a href="modifystaff.php">Update Staff Details</a>
</div>


</body>
</html>
