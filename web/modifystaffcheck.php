<?php
require_once('config.php');
require_once('allmenu.html');
require_once('adminlogin.php')
?>

<?php
if(isset($_POST))
{
  $id   =$_POST['id'];
  $name   =$_POST['name'];
  $email   =$_POST['email'];
  $phone   =$_POST['phone'];
  $address   =$_POST['address'];

  $sql="UPDATE schoolstaff SET name='".$name."',address='".$address."',email='".$email."',phone=".$phone." where id=".$id;
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
