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
      <h1>Edit Your Account </h1>
      <form method="post" action="scrpt.php">
        <p><input type="text" name="user" value="" placeholder="Current Username"></p>
        <p><input type="password" name="oldpassword" value="" placeholder="Current Password"></p>
		<p><input type="password" name="newpassword" value="" placeholder="New Password"></p>
		<p><input type="password" name="repeatnewpassword" value="" placeholder="Retype New Password"></p>
        <p class="submit">&nbsp;</p>
        <p class="submit"><span class="reset">
          <input  type="reset" name="commit2" value="Cancel">
          <input type="submit" name="commit" value="Apply change">
        </span></p>
		
      </form>
    </div>

</section>
</body>
</html>
