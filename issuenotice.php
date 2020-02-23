<?php
require_once('config.php');
require_once('allmenu.html');
require_once('adminlogin.php');
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

    textarea{
      width: 500px;
    padding: 5px 8px;
    margin: 2px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 2px;
    box-sizing: border-box;
    text-align: center;
    font-size: 20px;
    }

    input[type="submit"], select{
      height: 100%;
      width: 20%;
      padding: 12px 20px;
      margin: 8px 0px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      font-size: 20px;
      align-self: center;
    }

    input[type="text"], select{
      height: 100%;
      width: 100%;
      padding: 12px 12px;
      margin: 8px 0px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      font-size: 20px;
      align-self: center;
    }

    </style>
        <body>
            <center>
              <div class="h">
                <h1>Write Notice<h1>
              </div>
              <table class="tblwithhlines">
                <tr>
                  <td>Name of the Notcie</td>
                  <td><input type="text" name="name"></td>
                </tr>
                <tr>
                  <td>Body</td>
                  <td><textarea name="notice" rows="8" cols="200"></textarea>
                  </td>
                </tr>
                <tr>
                  <td colspan="2"><center><input type="submit" value="submit"></center></td>
                </tr>
              </table>
    </center>
  </body>
</html>
