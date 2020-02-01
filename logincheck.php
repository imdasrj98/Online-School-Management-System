<?php
require_once('config.php');
?>

<?php
if(isset($_POST))
{
    $userid   =$_POST['userid'];
    $password =$_POST['password'];
    $sql = "SELECT * FROM users WHERE userid=".$userid." AND password='".$password."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
      session_start();
      $_SESSION["user"]=$userid;
      $row=$result->fetch_assoc();
      $type=$row["type"];
      switch($type)
      {
        case "student":header("Location: studentlogin.php");break;
        case "admin":header("Location: adminlogin.php");break;
        case "teacher":header("Location: teacherlogin.php");break;
        case "administrator":header("Location: administratorlogin.php");break;
      }
  }
}
else {
  echo "Connection problem";
}
?>
