<?php
require_once('config.php');
require_once('allmenu.html');
require_once('teacherlogin.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>

    .tblwithhlines a{
      color: RED;
    }

    .tblwithhlines a:hover{
      color: purple;
    }

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
        font-size:18px;
        font-weight:normal;
        background-color:#ECEFF1;
        border-left: 0px solid #D0CFD4;
        border-right: 0px solid #D0CFD4;
        border-bottom: 1px solid #D0CFD4;
        border-top: 0px solid #D0CFD4;
    }

    .h
    {
      color: #0A639C;
    }
    </style>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="indexstyle.css">
  </head>
  <body>
    <center>
      <h1 class="h">Student Details<h1>
      <table class="tblwithhlines">
        <tr>
          <td>Name</td><td>Details</td>
        </tr>
        <tr>
          <td>Debayan Das</td><td><a href="#">View</a></td>
        </tr>
        <tr>
          <td>Himadri Chatterjee</td><td><a href="#">View</a></td>
        </tr>
        <tr>
          <td>Subhadeep Paul</td><td><a href="#">View</a></td>
        </tr>
      </table>
    </center>
  </body>
</html>
