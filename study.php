<?php
require_once('config.php');
require_once('allmenu.html');
require_once('teacherlogin.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>
    input[type="submit"], select{
      height: 100%;
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      font-size: 20px;
      align-self: center;
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
        font-size:20px;
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
      <div class="h">
        <h1>NOTICE<h1>
      </div>
      <table class="tblwithhlines">
        <tr>
          <td><input type="submit" name="choose file" value="choose file">
          </td>
        </tr>
      </table>
    </center>
  </body>
</html>
