<?php 
include('connect.php');
			$name=$_POST['fullname'];
			$city=$_POST['city'];
			$address=$_POST['address'];
			$email=$_POST['email'];
			$contact=$_POST['contact'];
			$tourist_site=$_POST['touristsite'];
			$othersite=$_POST['othersite'];
			$hotelname=$_POST['hotelname'];
        	$roomno=$_POST['roomno'];
			$carLevel=$_POST['carLevel'];
		   $carSideNumber=$_POST['carSideNumber'];
		   $year=$_POST['year'];
			
			
									// conflick on name 
		$name_query=mysql_query("select * from schedule where
										day like '%Monday%' and day like '%Tuesday%' and day like '%Wednesday%' and  day like '%Thursday%' and day like '%Friday%' and
										fullname='$name'
									") or die(mysql_error());
									$name_row=mysql_fetch_array($name_query);
									$count1=mysql_num_rows($name_query);
									$name_1=$name_row['fullname'];
				
									// conflict on touristsite
			$touristsite_query=mysql_query("select * from schedule where
			day like '%Monday%' and day like '%Tuesday%' and day like '%Wednesday%' and  day like '%Thursday%' and day like '%Friday%' and 
			month='$month'
			") or die(mysql_error());
			$touristsite_row=mysql_fetch_array($touristsite_query);
			$count2=mysql_num_rows($touristsite_query);
			$touristsite_1=$touristsite_row['touristsite'];

							// conflick on hotelname
							$hotelname_query=mysql_query("select * from schedule where
							day like '%Monday%' and day like '%Tuesday%' and day like '%Wednesday%' and  day like '%Thursday%' and day like '%Friday%' and
							month='$month'
							") or die(mysql_error());
							$hotelname_row=mysql_fetch_array($hotelname_query);
							$count3=mysql_num_rows($hotelname_query);
							$hotelname_1=$hotelname_row['hotelname'];
	
									

if (($count1 == 0) && ($count2 == 0) && ($count3 == 0))
{

mysql_query("insert into schedule (fullname,city,address,email,contact,touristsite,othersite,day,year, month, hotelname, roomno, carLevel, carSideNumber)
VALUES('$name','$city','$address','$email','$contact','$tourist_site','$othersite','$day','$year','$month','$hotelname','$roomno','$carLevel','$carSideNumber')")or die(mysql_error());

?>
<script type="text/javascript">
alert(' Schedule sucssfully Created!');
window.location="oschedule.php";
</script>
<?php
}

else
{
	if($count1 > 1){ ?>
		<script type="text/javascript">
		alert('<?php echo $name."  ".'Already  have a Schedule on this Time'; history.back();?>');
		//history.back();
		</script>
						<?php
					}
						 


  else if($count2 > 1){ ?>
		<script type="text/javascript">
		alert('<?php echo $touristsite." ".'tourist site already  have a Schedule on this Time'; history.back();?>');
		//history.back();
		</script>
					
					<?php
		}


else if($count3 > 1){ ?>
		<script type="text/javascript">
		alert('<?php echo $othersite1." ".' tourist site already  have a Schedule on this Time';  history.back();?>');
		//history.back();
		</script>
		
		<?php
	}

}
?>