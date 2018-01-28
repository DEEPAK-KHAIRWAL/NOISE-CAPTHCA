<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  
      <link rel="stylesheet" href="css/style.css">

  
</head>
<style>


.button1 {
	 background-color: MediumSeaGreen; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
	width:150px
}
.button1:hover {
    background-color: MediumSeaGreen;
    color: white;
}
</style>
<body>
<?php
session_start();
session_unset();
session_destroy(); 
?>

  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1> User Sign Up Page</h1>
          
          <form action="signup.php" method="post" enctype="multipart/form-data">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                 Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="on" name="name" />
            </div>
        
            <div class="field-wrap">
              <label>
                User Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="on" name="uname"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="on" name="email"/>
          </div>
		  
		   <div class="field-wrap">
            <label>
              Place<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="on" name="place"/>
          </div>
          
		  <div class="field-wrap">
            <label>
              Contact no.
            </label>
            <input type="text"required autocomplete="on" name="contact"/>
          </div>
		  <br>
          <p class="forgot" style="color:white;float:left">Select a profile picture<br></p>
		  <div class="field-wrap">
            <label>
             
            </label>
            <input type="file" required autocomplete="on" name="fileToUpload" id="fileToUpload">
          </div>
		  
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="on" name="pass"/>
          </div>
		  
		  <img src="captcha.php" id='abc' style="margin-left:130px">
          <input type="button"  class="button button1" onclick=document.getElementById('abc').src='captcha1.php' value="Reload" />		 

		
		 </form>
		 
		  <div class="field-wrap">
            <label>
              Enter the captcha shown<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="on" name="cap"/>
          </div>
          
          <button type="submit" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="login.php" method="post">
          
            <div class="field-wrap">
            <label>
             User Name<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="on" name="uname2"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="on" name="pass2"/>
          </div>
          
          <p class="forgot" ><a href="forgot.php">Forgot Password?</a></p>
		  <img src="captcha.php"  style="margin-left:130px" id='az'>
		  <input type="button"  class="button button1" onclick="document.getElementById('az').src='CAPTCHA.php'" value="Reload" />
		  
		  <div class="field-wrap">
            <label>
              Enter the captcha shown<span class="req">*</span>
            </label>
			
            <input type="text"required autocomplete="on" name="cap"/>
          </div>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div>
      
</div> 
<script>
function refreshcaptcha() {
    var x=document.getElementById("az");
	if(x.getAttribute('src')=='captcha.php'){x.src="captcha1.php";}
	else x.src="captcha.php";	
});
</script>
<script src="navigation/js/jquery-2.1.4.js"></script>

    <script  src="js/index.js"></script>

</body>
</html>
