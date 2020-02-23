<?php
require_once('config.php');
require_once('allmenu.html');
require_once('studentlogin.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
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
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="indexstyle.css">
  </head>
  <body>
    <center>
      <div class="h">
        <h1>Result<h1>
      </div>
      <table class="tblwithhlines">
        <tr>
          <td>Examination</td>
          <td>Details</td>
        </tr>
        <tr>
          <td>Fall Semester 2019</td>
          <td><a href="#">View</a></td>
        </tr>
        <tr>
          <td>Winter Semseter</td>
          <td><a href="#">View</a></td>
        </tr>
      </table>
    </center>
  </body>
</html>
