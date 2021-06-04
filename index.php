<?php
if(isset($_POST['userid']) and isset($_POST['pass'])){
   if($_POST['userid']=='Nivedita' and $_POST['pass']=='1234'){
       header("location: home page.html");
   }
}
   
?>

<html>
	<head>
	<title>Login Form Design</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
<div class="form-box">
<h2>Login Here</h2>
<form action="http://localhost/" method="post">
   	<div class="input-group">
   	    <label>Username</label>
       <input type="text" name="userid" id="userid">
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="pass" id="pass">
    </div>
    <button type="submit">Submit &#10132;</button>
</form>
    
    <p>Login with social media account</p>
    <div class="social">
    <img src="facebook.png">
    <img src="twitter.png">
    <img src="google.png">
</html>