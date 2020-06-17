
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

  $stmt = $conn->prepare("INSERT INTO programmedetails VALUES (?, ?)");
  $stmt->bind_param("is", $id, $name);
  $result=$stmt->execute();

	if($result)
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
