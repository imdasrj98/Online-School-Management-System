<?php
require_once('config.php');
require_once('allmenu.html');
require_once('adminlogin.php')
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

</head>


<body>
  <br>
<h2 class="h"><center>Update Teacher<center></h2>
  <br>
  <center>
<?php

if(isset($_POST))
{
  //$userid=$_SESSION["user"];
  $id=$_POST["id"];
  $sql1="SELECT * FROM teacherdetail where id=".$id;
  $result1 = $conn->query($sql1);
  if($result1->num_rows>0)
  {
    while($row=$result1->fetch_assoc())
    {
?>
<form action="modifyteachercheck.php" method="post">
<table class="tblwithhlines">
  <tr>
    <td>ID <td><input type="text" style="font-size: 18px;" value=<?php echo $row['id'];?> name="id">
  </tr>
  <tr>
    <td>Name <td><input type="text" style="font-size: 18px;" value="<?php echo $row['name'];?>" name="name">
  </tr>
  <tr>
    <td>Email <td><input type="text" style="font-size: 18px;" value=<?php echo $row['email'];?> name="email">
  </tr>
  <tr>
    <td>Phone <td><input type="text" style="font-size: 18px;" value=<?php echo $row['phone'];?> name="phone">
  </tr>
  <!--<tr>
    <td>Cabin <td><input type="text" style="font-size: 18px;" value=<?php echo $row['cabin'];?> name="cabin">
  </tr>-->
  <tr>
    <td>Address <td><input type="text" style="font-size: 18px;" value=<?php echo $row['address'];?> name="address">
  </tr>
  <tr>
    <td colspan="2"><center><input type="submit" style="font-size:18px;" value="UPDATE"></center></td>
  </tr>
</table>
</form>
<?php
    }
  }
}
?>
</center>
</body>
</html>
