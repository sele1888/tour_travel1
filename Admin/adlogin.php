
<?php
$con=mysql_connect("localhost","root","");

if(!$con){

die ("can not connected :" .mysql_error());
}
mysql_select_db("tours",$con);
if(isset($_POST['go'])){
     $username= mysql_real_escape_string($_POST['username']);
	 $usertype= mysql_real_escape_string($_POST['usertype']);
	 $password= mysql_real_escape_string($_POST['password']);
	  $cpassword=md5($password);
	 
	 $url = 'http://localhost/tour/admin/admin.php';
	 $url2='http://localhost/tour/home/Admin/Change/tryagin.php';
	 $sql=mysql_query ("SELECT * FROM users Where  username= '$username' AND password= '$cpassword'") ;
	 
	 if(mysql_num_rows($sql)>0){
	
	echo"
<iframe src =$url height=5000px width=1280px frameborder=0 scrolling =no>
</iframe>
";
}
	  
	  else{
	  echo"
<iframe src =$url2 height=5000px width=1280px frameborder=0 scrolling =no>
</iframe>
";
	  }

}
mysql_close($con);
?>
