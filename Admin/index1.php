<?php 
 include('dbcon.php');?>
<body>
<?php include('index-nav.php'); 
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
?>
<div class="coat">
<div class="wrapper">

</br>
</br>
</br>



<div id="element" class="hero-body-index">
	<p><font color="#FF0000" align="center"><h2>Login</h2></font></p>
	<form method="POST" >
	<table> 
    <tr><td><font color="white">User Name:</font>&nbsp;&nbsp;</td><td><input type="text"  name="user_name" class="user_name_hover" id="span9001" placeholder="User Name" required="required"></td></tr>
	<tr><td>-<td></tr>
    <tr><td><font color="white">Password:</font>&nbsp;&nbsp;</td><td><input type="password" name="password" class="password_hover" id="span9001" placeholder="Password" required="required"></td></tr>
	<tr><td>-<td></tr>
	<tr><td><font color="white"></font>&nbsp;&nbsp;</td><td> <input type="hidden" name="user_type" class="span3"  id="span9001">
	<option>Admin</option>
	</select>
	  </td></tr>
	  
	
	<tr><td>-<td></tr>
	<tr><td></td><td>	<button class="btn btn-primary" name="Login"><i class="icon-ok-sign icon-large"></i>&nbsp;Login</button> &nbsp;&nbsp;
						<button class="btn btn-primary" name="cler"><i class="icon-remove-sign icon-large"></i>&nbsp;Clear</button> 
<br><br><font color="white"> <a href="Forgot_Password.php">forget Password?</font></a>
	</td></tr>
	<tr><td>
	</td><tr>
	
	</table>
	</form>

	<div class="error">
<?php
			
			if (isset($_POST['Login']))
			
			{
			
			   function clean($str) {
										$str = @trim($str);
										if (get_magic_quotes_gpc())
											 {
												$str = stripslashes($str);
											   }
										return mysql_real_escape_string($str);
								}

			$user_name=clean($_POST['user_name']);
			$password=clean($_POST['password']);
			$user_type=clean($_POST['user_type']);
			
			$login_query=mysql_query("select * from users where user_name='$user_name' and password='$password' and user_type='Admin'");
			$login_query1=mysql_query("select * from users where user_name='$user_name' and password='$password' and user_type='tourist'");
	
	$count=mysql_num_rows($login_query); // this is 4 admin
	$count1=mysql_num_rows($login_query1); // this is 4 user
	
$row=mysql_fetch_array($login_query);
$row1=mysql_fetch_array($login_query1);
$f=$row['first_name'];
$l=$row['last_name'];
$user_type=$row['user_type'];


if ($count == 1)
	{
		$logout_query=mysql_query("select * from users where user_id='".$row['user_id']."'");
		$row=mysql_fetch_array($logout_query);
		$f=$row['first_name'];
		$l=$row['last_name'];
		$user_type=$row['user_type'];



			mysql_query("INSERT INTO history (data,action,date,user)VALUES('$f $l', 'Login', NOW(),'$user_type')")or die(mysql_error());

					 session_start();
                     session_regenerate_id();
				$_SESSION['id']=$row['user_id'];
				header('location:index.php');
				session_write_close();
                                        exit();
		}

	
		else if ($count1 == 1)
			{
				session_start();
				$_SESSION['id']=$row2['user_id'];
				
				$logout_query=mysql_query("select * from users where user_id='".$row['user_id']."'");
				$row=mysql_fetch_array($logout_query);
				$f=$row['first_name'];
				$l=$row['last_name'];
				$user_type=$row['user_type'];

					mysql_query("INSERT INTO history (data,action,date,user)VALUES('$f $l', 'Login', NOW(),'$user_type')")or die(mysql_error());
					
					 session_start();
						session_regenerate_id();
					$_SESSION['id']=$row['user_id'];
					header('http://localhost/tour/tourist/message.php');
					session_write_close();
							exit();
	}




			else
			{
			?>
				<div class="alert alert-error">
				<button class="close" data-dismiss="alert">×</button>
			  	 Please check your User Name,Password and select ur account type
				 and try again!!!
				</div>
			<?php } 
			
			}
			
			?>	
</div>
</div>
</br>


<?php include('footer.php');?>


</div>
</div>
</body>
</html>