<?php
require_once('config.php');
require_once('allmenu.html');
require_once('studentlogin.php')
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
        .div2
        {
            top: 100px;
        }

        .div1
        {
            top: 90px;
            position: relative;
            text-align: justify;
        }

        .ex1
        {
            border: 1px solid indianred;
            background-color:lightsteelblue;
        }

    </style>
    <link rel="stylesheet" type="text/css" href="staff1.css">
  </head>
  <body>
    <div class="div1">
        <center>
            <br>
            <div class="wpb_text_column wpb_content_element  vc_custom_1560747593912 iw-teaching-box">
                <div class="wpb_wrapper">
                    <p style="text-align: center; margin: 0;"><b style="font-size: 35px; font-weight: 900; font-family:Helvetica sans-serif;">Complaint Raise</b></p>
                </div>
            </div>
            <br>
          <form action="addcomplaincheck.php" method="post">
            <table width="500">
                <tbody>
                    <tr>
                        <td><strong style="color:#993034;font-weight:700; font-size: 20px"><center>Write Complain<center></strong>
                        </td>
                    </tr>
                    <tr>
                        <td><textarea rows=10 cols=100 name="complain"></textarea></td>
                    </tr>
                      <tr>
                        <td>
                          <center><input type="submit" name="" value="SUBMIT">
                        </td>
                      </tr>
            </table>
          </form>
        </center><br><br>
    </div>
  </body>
</html>
