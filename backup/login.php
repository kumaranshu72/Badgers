<?php
  require_once("connect.php");
  if(isset($_POST['usr'])&&isset($_POST['pwd']))
  {
    $user=$_POST['usr'];
    $password=$_POST['pwd'];
    if(!empty($user)&&!empty($password))
    {
      $query="select id from users where email='$user' && password='$password'";
      $query_run=mysql_query($query);
      $query_rows=mysql_num_rows($query_run);
      if($query_rows==0)
      {
        echo "Invalid username/password";
      }
      else if($query_rows=1){
        $userid=$mysql_result($query_run,0,'id');
        $_SESSION['userid']=$user_id;
        header("location: index.htm");
      }
    }
    else {
      ?>
      <script>alert("Fill the *required fileds");</script>
      <?php
      }
  }

?>
