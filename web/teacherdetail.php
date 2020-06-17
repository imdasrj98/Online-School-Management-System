<?php
require_once('config.php');
require_once('allmenu.html');
require_once('teacherlogin.php')
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
  <h2 class="h"><center>Teacher Details<center></h2>


<?php

if(isset($_POST))
{
  $userid=$_SESSION["user"];
  $sql1="SELECT * FROM teacherdetail WHERE id=".$userid;
  $result1 = $conn->query($sql1);
  if($result1->num_rows>0)
  {
    while($row=$result1->fetch_assoc())
    {
?>
<br>
<center>
  <table class="tblwithhlines">
    <tr>
      <td>ID <td><input type="text" style="font-size: 18px;" value=<?php echo $row['id'];?>>
    </tr>
    <tr>
      <td>Name <td><input type="text" style="font-size: 18px;" value="<?php echo $row['name'];?>">
    </tr>
    <tr>
      <td>Email <td><input type="text" style="font-size: 18px;" value=<?php echo $row['email'];?>>
    </tr>
    <tr>
      <td>Phone <td><input type="text" style="font-size: 18px;" value=<?php echo $row['phone'];?>>
    </tr>
    <tr>
      <td>Cabin <td><input type="text" style="font-size: 18px;" value=<?php echo $row['cabin'];?>>
    </tr>
    <tr>
      <td>Address <td><input type="text" style="font-size: 18px;" value=<?php echo $row['address'];?>>
    </tr>
  </table>
</center>
<?php
    }
  }
}

?>

</body>
</html>
