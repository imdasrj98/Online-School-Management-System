<?php
require_once('config.php');
require_once('allmenu.html');
require_once('studentlogin.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>

    .sidenav1 {
      height: 80%;
      width: 250px;
      position: fixed;
      z-index: 1;
      top: 192;
      left: 200;
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
    </style>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="indexstyle.css">
  </head>
  <body>
    <div class="sidenav1">
          <a href="booksearch.php">Search Book</a>
          <a href="statuslib.php">Check Status</a>
    </div>
  </body>
</html>
