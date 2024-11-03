
<?php

$oldpassword =md5($_POST['oldpassword']);
$newpassword = md5($_POST['newpassword']);
$repeatnewpassword =md5($_POST['repeatnewpassword']);
$user =($_POST['admin']);
//check password against db</p>

//connect to db
$connect = mysql_connect ("localhost","root","") or die();
mysql_select_db("tours")or die();

$queryget = mysql_query ("SELECT password FROM users WHERE username='$admin'")or die ("Query didnt work");
$oldpassworddb=null;
while ($row = mysql_fetch_array($queryget)){
$oldpassworddb = $row ['password'];
//check passwords
}
if($oldpassword==$oldpassworddb)
{
//check the new password<
if ($newpassword==$repeatnewpassword)
{
$querychange=mysql_query("UPDATE users SET password='$newpassword' WHERE username='$user'",$connect);
die ("Your password has been changed"."  "."<a href=http://localhost/home/index.php>Return to page</a>");

}
else
 die ("New password dont match!"."  "."<a href=http://localhost/home/index.php>Return to page</a>");//
}
else 
 die("Old password doesnt match!"."  "."<a href=http://localhost/home/index.php>Return to page</a>");
 

?>
