
<?php
require_once('config.php');
require_once('studentlogin.php')
?>

<?php
if(isset($_POST))
{
  $comp=$_POST['complain'];

  $stmt = $conn->prepare("INSERT INTO complaint VALUES (?)");
  $stmt->bind_param("s", $comp);
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
