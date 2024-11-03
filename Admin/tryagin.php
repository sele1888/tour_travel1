<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
  <link rel="stylesheet" href="css/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Admin Login</h1>
	  <p><font color="#FF0000">*Invalid user name or password*</font></p>
	  <p>*Please try again </p>
      <form method="post"   action="../adlogin.php">
        <p><input type="text" name="username" value="" placeholder="Username"></p>
		<p><select name='usertype' id='select'>
<option selected="usertype">--user type--</option>
<option value="1">operator</option>
<option value="2">adminstartor</option
><option value="3">tourist</option>
</select> </p>
       <p><input type="password" name="password" value="" placeholder="Password"></p>
			<p class="submit">&nbsp;</p>
        <p class="submit"><span class="reset">
          <input  type="reset" name="commit2" value="Cancel">
          <input type="submit" name="go" value="Login">
        </span></p>
		
      </form>
    </div>

</section>
</body>
</html>
