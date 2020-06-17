<?php
require_once('config.php');
require_once('allmenu.html');
require_once('administratorlogin.php')
?>

<?php
if(isset($_POST))
{
  $id   =$_POST['regno'];
  $name   =$_POST['name'];
  $email   =$_POST['email'];
  $phone   =$_POST['phone'];
  $address   =$_POST['address'];
  $bloodgr   =$_POST['blood'];

  /*$stmt = $conn->prepare("INSERT INTO studentdetail VALUES (?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("sissis", $name, $id, $address, $email, $phone, $bloodgr);
  $result=$stmt->execute();

  $stmt1 = $conn->prepare("INSERT INTO users (userid, password, type) VALUES (?, ?, ?)");
  $stmt1->bind_param("iss", $id, $password, $type);
  $result1=$stmt1->execute();*/

  $sql="UPDATE studentdetail SET name='".$name."',address='".$address."',email='".$email."',phone=".$phone.",blood='".$bloodgr."' where regno=".$id;
  $stmt = $conn->prepare($sql);
  $result=$stmt->execute();

	if($result)
  {
	   echo '<br><br><center><h3>Successfully Updated.</center>';
	}
  else
  {
	   echo '<br><br><center><h3>There were errors while saving the data.</center>';
	}
}
else
{
  echo "</center>no data</center>";
}
