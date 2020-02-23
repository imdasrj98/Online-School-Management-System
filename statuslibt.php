<?php
require_once('config.php');
require_once('allmenu.html');
require_once('teacherlogin.php');
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
        <h1>BOOK Status<h1>
      </div>
      <table class="tblwithhlines">
        <tr>
          <td>Book Name</td>
          <td>Return Date</td>
        </tr>
        <tr>
          <td>Head First HTML</td>
          <td>29.2.2020</td>
        </tr>
        <tr>
          <td>Head First JAVASCRIPT</td>
          <td>4.3.2020</td>
        </tr>
      </table>
    </center>
  </body>
</html>
