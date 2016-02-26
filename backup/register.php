<?php
 require_once("connect.php");
if(isset($_POST['fname'])&&isset($_POST['lname'])&&isset($_POST['email'])&&isset($_POST['ph'])&&isset($_POST['pwd'])&&isset($_POST['cfm-pwd']))
{
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $ph=$_POST['ph'];
//  $gender=$_POST['M1'];
  $pass=$_POST['pwd'];
  $cpass=$_POST['cfm-pwd'];
  if(!empty($fname)&&!empty($lname)&&!empty($email)&&!empty($ph)&&!empty($pass)&&!empty($cpass))
  {
       if($pass!=$cpass){?>
         <script>alert('Password Not Matched');</script>
         <?php
       }
       else {
         $q="select id from users where email='$email' AND phoneno='$ph'";
         $run=mysql_query($q);
         $row=mysql_num_rows($run);
         if($row==0){
         $query="insert into users values('','$fname','$lname','$email','$ph','$pass')";
         if(mysql_query($query)){
           ?>
             <script>alert('Registered Successfully');</script>
             <?php
             //header("location: login.php");
          }
        else {
          ?>
            <script>alert('Sorry!! Not able to Register');</script>
            <?php
        }
      }
      else {
        ?>
        <script>alert('User Already Exits')</script>
        <?php
      }
      }
  }
  else {
    ?>
      <script>alert('Please Fill the required Details');</script>
      <?php
  }
}

?>
