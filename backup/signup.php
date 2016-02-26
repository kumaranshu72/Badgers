
<html>
<head>
  <style>
  #search{
    width:73%;
    height:80%;
    margin: 8% 0 0 20%;
  }
  #search1{
    background-color:#39A9A5;
    width: 20%;
    height: 8%;
  }
  #search2{
    background-color:#354348;
    width: 20%;
    height: 8%;
  }
  #search3{
    background-color:#33A9A5;

    width: 40%;
    height: 8%;
  }
  #new_search{
display:none
;
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
  <div id="search">
  <form>
    <input type="button" id="search1" value="SignUp"><input type="button"id="search2" value="Login">
  </form>
    <br>
    <br>
    <h1>Sign Up</h1>
    <br>
    <div id="new_search">
      <form method="POST" action='login.php' >
  <input type="text"  class="search4" size="50" placeholder="enter e-mail id*" name="email1">
  <br>
  <br>
  <input type="password" class="search4" size="20" placeholder="Password*" name='pwd'>
  <br>
  <br>
    <input type="submit" id="search3" value="Login">
  </form>
    </div>
      <br>
    <form method='POST' action='register.php'>
    <input type="text"  class="search5" size="20" placeholder="First Name*" name="fname">&nbsp;&nbsp;<input type="text" class="search5" size="20" placeholder="Last Name*" name="lname">
    <br>
    <br>
    <input type="text" class="search4" size="50" placeholder="enter the e-mail id*" name='email'>
    <br>
    <br>
    <input type="text" class="search4" size="12" placeholder="Phone no.*" name='ph'>
    <br>
    <br>
      <input type="password" class="search4" size="20" placeholder="Password*" name='pwd'>
      <br>
      <br>
        <input type="password" class="search4" size="20" placeholder="confirm password*" name='cmf-pwd'>
        <br>
        <br>
        <input type="submit" id="search3" value="Get Started">
      </form>
    </div>

</body>
</html>
