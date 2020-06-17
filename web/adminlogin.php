<?php
require_once('config.php');
require_once('allmenu.html');
$name="";
if(isset($_POST))
{
  session_start();
  $userid=$_SESSION["user"];
  $sql1="SELECT * FROM admindetail WHERE id=".$userid;
  $result1 = $conn->query($sql1);
  if($result1->num_rows>0)
  {
    if($row=$result1->fetch_assoc())
    {
      $name=$row['name'];
    }
  }
}

?>

<html>

<head>
  <link rel="stylesheet" href="indexstyle.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  body {
    font-family: "Lato", sans-serif;
  }

  .sidenav {
    height: 80%;
    width: 200px;
    position: fixed;
    z-index: 1;
    top: 70;
    height: auto;
    background-color: #000000;
    overflow-x: hidden;
    padding-top: 120px;
    padding-bottom: 20px;
  }

  .sidenav a {
    padding: 6px 6px 6px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
  }

  .sidenav a:hover {
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

  .Name{
    padding-top: 100px;
  }
  </style>

</head>


<body bgcolor="pink">

  <div class="sidenav">
    <a href="admindetail.php">Profile</a>
    <a href="manageteacher.php">Manage Teacher</a>
    <a href="managestaff.php">Manage School Staff</a>
    <a href="addadmin.php">Add Admin</a>
    <a href="addadministrator.php">Add Administrator</a>
    <a href="addcourse.php">Add Course</a>
    <a href="addprogramme.php">Add Programme</a>
    <a href="issuenotice.php">Issue Notice</a>
    <a href="logout.php">Log Out</a>
  </div>

<div class="Name">
<center><h2>
<?php
      echo "Welcome ", $name;
?>
</h2>
</center>
</div>

</body>
</html>
