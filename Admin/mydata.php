<html>

<head>

<title>Admin page</title>
<link rel="stylesheet" type="text/css" href="css/TableCSSCode.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body   bgcolor="#CCFFFF">
<div   align="center">
<a href="Change/index.php">Edit Account</a>
</div>
<a href=http://localhost/Zeli/ambasel/home.php  style="text-decoration: none;"><font size="+2"  color="#2A1F55">Back to sit</font></a>

            
<?php
echo "<body  background=../../../../Users/Solmix/Documents/sol/background.png>";
$con=mysql_connect("localhost","solmix","solmix");

if(!$con){

die ("can not connected :" .mysql_error());
}
mysql_select_db("project",$con);



if(isset($_POST['update'])){

$update = "UPDATE prodact SET 
Name='$_POST[N]',Price='$_POST[P]',Quantity='$_POST[Q]',Item_type='$_POST[IT]',Manufacturer='$_POST[M]',WeightUnit='$_POST[WU]' WHERE  Name='$_POST[FU]'" ;



 mysql_query($update,$con);
}



if(isset($_POST['add'])){


$add="INSERT INTO `prodact`(`Name`, `Price`, `Quantity`, `Item_type`, `Manufacturer`, `WeightUnit`) VALUES('$_POST[N]','$_POST[P]','$_POST[Q]','$_POST[IT]','$_POST[M]','$_POST[WU]')";
 
 
 mysql_query($add,$con);
}

if(isset($_POST['delete'])){
  
 $del="delete from prodact where Name='$_POST[N]'" ;
 mysql_query($del,$con);
   

}



$sql="select * from prodact";
$mydata = mysql_query($sql,$con);

echo "<div class=CSSTableGenerator >
<table width=200>

<tr>

<p align=center ><font  color=2A1F55 size=8px >Products Table</font></p>

 <td width=50 height=50>Name</td>
 <td width=50 height=50>Price</td>
 <td width=50 height=50>Quantity</td>
 <td width=50 height=50>Item type</td>
 <td width=50 height=50>Manufacturer</td>
 <td width=50 height=50>WeightUnit</td>
<td width=80 height=50>Functional</td>
<td width=80 height=50>Keys</td>
</tr>";
while ($reco = mysql_fetch_array($mydata)){
echo "<form  actiom=mydata.php method=post>";
echo "<tr>";
echo "<td width=50 >" . "<input type=text name=N value=" . $reco['Name'] . " </td>";
echo "<td width=50 >" . "<input type=text name=P value=" . $reco['Price'] . " </td>";
echo "<td width=50>" . "<input type=text name=Q value=" . $reco['Quantity'] . " </td>";
echo "<td width=50 >" . "<input type=text name=IT value=" . $reco['Item_type'] . " </td>";
echo "<td width=50 >" . "<input type=text name=M value=" . $reco['Manufacturer'] . " </td>";
echo "<td width=50 >" . "<input type=text name=WU value=" . $reco['WeightUnit'] . " </td>";
echo "<td  >" . "<input type=submit name=update value=Update>" . "</td>";
echo "<td  >" . "<input type=submit name=delete onclick=myFunction(); id=demo value=Delete>" . "</td>";
echo "<td width=50 >" . "<input type=hidden name=FU value=" . $reco['Name'] . " </td>";
echo "</tr>";
echo "</form>";

}
echo "<form  action=mydata.php method=post>";
echo "<tr>";
echo "<td width=50 ><input type=text name=N></td>";
echo "<td width=50 ><input type=text name=P></td>";
echo "<td width=50 ><input type=text name=Q></td>";
echo "<td width=50 ><input type=text name=IT></td>";
echo "<td width=50 ><input type=text name=M></td>";
echo "<td width=50 ><input type=text name=WU></td>";
echo "<td>" . "<input type=submit name=add value=Add>".  "</td>";


echo "</tr>";
echo "</form>";
echo "</div>";
echo "</table>";

mysql_close($con);
echo "</body>";
?>


<a href=http://localhost/Zeli/ambasel/home.php  style="text-decoration: none;"><font size="+2" color="#2A1F55">Back to sit</font></a>
            
</body>
</html>