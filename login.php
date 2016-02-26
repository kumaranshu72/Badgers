<?php
 session_start();
 require "connect.php";
 if(isset($_POST['email']) && isset($_POST['pwd']))
 {
   $user=$_POST['email'];
   $pas=$_POST['pwd'];
   if(!empty($user)&&!empty($pas))
   {
     $query="select id from users where email='$user' && password='$pas'";
     $query_run=mysql_query($query);
     $rows=mysql_num_rows($query_run);
     if(!$rows)
     {?>
       <script>alert("Invalid username/Pasword");</script>
       <?php
     }
     else if($rows){
       {
        //  $userid=mysql_result($query_run,0,'id');
        $res = mysql_fetch_assoc($query_run);
        $userid = $res['id'];
         $_SESSION['userid']=$userid;
         header('Location: index.php');
       }
     }
   }
 }

?>


<html>
<head>
  <style>
  #search{
    width:73%;
    height:80%;
    margin: 8% 0 0 34%;
  }
  #search2{
    background-color:#39A9A5;
    width: 20%;
    height: 8%;
  }
  #search7{
    margin-left: 19%;
  }
  #search1{
    background-color:#354348;
    width: 20%;
    height: 8%;
  }
  #search6{
    margin-left:19%;
  }

  #search3{
    background-color:#33A9A5;

    width: 40%;
    height: 8%;
  }
input.search4
{ color:white;
    background-color:#394847;
  height:8%;
  width:40%;
  }
  input.search5
  {
    color:white;
    background-color:#394847;
    height:8%;
    width:19.65%;
  }
  h1
  {  font-family: verdana;
    color:white;
    margin-left:14.5%;
  }
  body
  {
    background-color: rgba(0,0,0,0.9);
  }
  </style>
</head>
<body>
  <script>
    // This is called with the results from from FB.getLoginStatus().
    function statusChangeCallback(response) {
      console.log('statusChangeCallback');
      console.log(response);
      // The response object is returned with a status field that lets the
      // app know the current login status of the person.
      // Full docs on the response object can be found in the documentation
      // for FB.getLoginStatus().
      if (response.status === 'connected') {
        // Logged into your app and Facebook.
        testAPI();
      } else if (response.status === 'not_authorized') {
        // The person is logged into Facebook, but not your app.
        document.getElementById('status').innerHTML = 'Please log ' +
          'into this app.';
      } else {
        // The person is not logged into Facebook, so we're not sure if
        // they are logged into this app or not.
        document.getElementById('status').innerHTML = 'Please log ' +
          'into Facebook.';
      }
    }

    // This function is called when someone finishes with the Login
    // Button.  See the onlogin handler attached to it in the sample
    // code below.
    function checkLoginState() {
      FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
      });
    }

    window.fbAsyncInit = function() {
    FB.init({
      appId      : '1112977612079925',
      cookie     : true,  // enable cookies to allow the server to access
                          // the session
      xfbml      : true,  // parse social plugins on this page
      version    : 'v2.5' // use graph api version 2.5
    });

    // Now that we've initialized the JavaScript SDK, we call
    // FB.getLoginStatus().  This function gets the state of the
    // person visiting this page and can return one of three states to
    // the callback you provide.  They can be:
    //
    // 1. Logged into your app ('connected')
    // 2. Logged into Facebook, but not your app ('not_authorized')
    // 3. Not logged into Facebook and can't tell if they are logged into
    //    your app or not.
    //
    // These three cases are handled in the callback function.

    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });

    };

    // Load the SDK asynchronously
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    // Here we run a very simple test of the Graph API after login is
    // successful.  See statusChangeCallback() for when this call is made.
    function testAPI() {
      console.log('Welcome!  Fetching your information.... ');
      FB.api('/me', function(response) {
        console.log('Successful login for: ' + response.name);
        document.getElementById('status').innerHTML =
          'Thanks for logging in, ' + response.name + '!';
      });
    }
  </script>
  <div id="status">
  </div>
  <div id="search">
  <form method='POST' action='login.php'>

      <a href="signup.php"><input type="button" id="search1" value="SignUp"></a><a href="login.php"><input type="button"id="search2" value="Login"></a>
    <br>
    <br>
    <h1>Login</h1>
    <br>
    <div id="new_search">
  <input type="text"  class="search4" size="50" placeholder="enter e-mail id*" name="email">
  <br>
  <br>
  <input type="password" class="search4" size="20" placeholder="Password*" name='pwd'>
  <br>
  <br>
    <input type="submit" id="search3" value="Login">
    </div>
      </form>
      <br>
      <br>
      <div id="search6"><font color="white">OR</font></div>
        <br><br>
<div id="search7">
        <div class="fb-login-button" data-max-rows="1" data-size="medium" data-show-faces="false" data-auto-logout-link="false"></div>
      </div>
    </div>

</body>
</html>
