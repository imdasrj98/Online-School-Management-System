
<?php
require_once('config.php');
require_once('allmenu.html');
require_once('studentlogin.php')
?>

<?php
if(isset($_POST))
{
  $regno   =$_POST['regno'];
  $name   =$_POST['name'];
  $email   =$_POST['email'];
  $phone   =$_POST['phone'];
  $address   =$_POST['address'];
  $cabin   =$_POST['cabin'];
  $password =$_POST['password'];
  $type="student";

  $stmt = $conn->prepare("INSERT INTO studentdetail VALUES (?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("isssis", $regno, $name, $address, $email, $phone, $cabin);
  $result=$stmt->execute();

  $stmt1 = $conn->prepare("INSERT INTO users (userid, password, type) VALUES (?, ?, ?)");
  $stmt1->bind_param("iss", $regno, $password, $type);
  $result1=$stmt1->execute();

	if($result and $result1)
  {
	   echo '<br><br><center><h3>Successfully saved.</center>';
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
