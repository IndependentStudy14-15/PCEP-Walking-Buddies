<?php
if($_POST['formSubmit'] == "Submit")
{
	$errorMessage = "";
	
	if(empty($_POST['formName']))
	{
		$errorMessage .= "<li>You forgot to enter your name!</li>";
	}
	
	$varName = $_POST['formName'];
	$var12 = $_POST['form12'];
	$var22 = $_POST['form23'];
	$var34 = $_POST['form34'];
	$var45 = $_POST['form45'];
	$var56 = $_POST['form56'];

	if(empty($errorMessage)) 
	{
		if(strcmp($var12, "CS") == 0)
		{
		$fs = fopen("12CS.txt","a");
		fwrite($fs,$varName . "\n");
		fclose($fs);
		}
		if(strcmp($var12, "SC") == 0)
		{
		$fs = fopen("12SC.txt","a");
		fwrite($fs,$varName . "\n");
		fclose($fs);
		}
		if(strcmp($var12, "SP") == 0)
		{
		$fs = fopen("12SP.txt","a");
		fwrite($fs,$varName . "\n");
		fclose($fs);
		}
		if(strcmp($var12, "PS") == 0)
		{
		$fs = fopen("12PS.txt","a");
		fwrite($fs,$varName . "\n");
		fclose($fs);
		}
		if(strcmp($var12, "CP") == 0)
		{
		$fs = fopen("12CP.txt","a");
		fwrite($fs,$varName . "\n");
		fclose($fs);
		}
		if(strcmp($var12, "PC") == 0)
		{
		$fs = fopen("12PC.txt","a");
		fwrite($fs,$varName . "\n");
		fclose($fs);
		}
		
		
		
		
		if(strcmp($var23, "CS") == 0)
		{
		$fs = fopen("23CS.txt","a");
		fwrite($fs,$varName . "\n");
		fclose($fs);
		}
		if(strcmp($var23, "SC") == 0)
		{
		$fs = fopen("23SC.txt","a");
		fwrite($fs,$varName . "\n");
		fclose($fs);
		}
		if(strcmp($var23, "SP") == 0)
		{
		$fs = fopen("23SP.txt","a");
		fwrite($fs,$varName . "\n");
		fclose($fs);
		}
		if(strcmp($var23, "PS") == 0)
		{
		$fs = fopen("23PS.txt","a");
		fwrite($fs,$varName . "\n");
		fclose($fs);
		}
		if(strcmp($var23, "CP") == 0)
		{
		$fs = fopen("23CP.txt","a");
		fwrite($fs,$varName . "\n");
		fclose($fs);
		}
		if(strcmp($var23, "PC") == 0)
		{
		$fs = fopen("23PC.txt","a");
		fwrite($fs,$varName . "\n");
		fclose($fs);
		}
	
	
	
	
	
		if(strcmp($var34, "CS") == 0)
		{
		$fs = fopen("34CS.txt","a");
		fwrite($fs,$varName . "\n");
		fclose($fs);
		}
		if(strcmp($var34, "SC") == 0)
		{
		$fs = fopen("34SC.txt","a");
		fwrite($fs,$varName . "\n");
		fclose($fs);
		}
		if(strcmp($var34, "SP") == 0)
		{
		$fs = fopen("34SP.txt","a");
		fwrite($fs,$varName . "\n");
		fclose($fs);
		}
		if(strcmp($var34, "PS") == 0)
		{
		$fs = fopen("34PS.txt","a");
		fwrite($fs,$varName . "\n");
		fclose($fs);
		}
		if(strcmp($var34, "CP") == 0)
		{
		$fs = fopen("34CP.txt","a");
		fwrite($fs,$varName . "\n");
		fclose($fs);
		}
		if(strcmp($var34, "PC") == 0)
		{
		$fs = fopen("34PC.txt","a");
		fwrite($fs,$varName . "\n");
		fclose($fs);
		}
		
		
		
		
		if(strcmp($var45, "CS") == 0)
		{
		$fs = fopen("45CS.txt","a");
		fwrite($fs,$varName . "\n");
		fclose($fs);
		}
		if(strcmp($var45, "SC") == 0)
		{
		$fs = fopen("45SC.txt","a");
		fwrite($fs,$varName . "\n");
		fclose($fs);
		}
		if(strcmp($var45, "SP") == 0)
		{
		$fs = fopen("45SP.txt","a");
		fwrite($fs,$varName . "\n");
		fclose($fs);
		}
		if(strcmp($var45, "PS") == 0)
		{
		$fs = fopen("45PS.txt","a");
		fwrite($fs,$varName . "\n");
		fclose($fs);
		}
		if(strcmp($var45, "CP") == 0)
		{
		$fs = fopen("45CP.txt","a");
		fwrite($fs,$varName . "\n");
		fclose($fs);
		}
		if(strcmp($var45, "PC") == 0)
		{
		$fs = fopen("45PC.txt","a");
		fwrite($fs,$varName . "\n");
		fclose($fs);
		}
		
		
		
		if(strcmp($var56, "CS") == 0)
		{
		$fs = fopen("56CS.txt","a");
		fwrite($fs,$varName . "\n");
		fclose($fs);
		}
		if(strcmp($var56, "SC") == 0)
		{
		$fs = fopen("56SC.txt","a");
		fwrite($fs,$varName . "\n");
		fclose($fs);
		}
		if(strcmp($var56, "SP") == 0)
		{
		$fs = fopen("56SP.txt","a");
		fwrite($fs,$varName . "\n");
		fclose($fs);
		}
		if(strcmp($var56, "PS") == 0)
		{
		$fs = fopen("56PS.txt","a");
		fwrite($fs,$varName . "\n");
		fclose($fs);
		}
		if(strcmp($var56, "CP") == 0)
		{
		$fs = fopen("56CP.txt","a");
		fwrite($fs,$varName . "\n");
		fclose($fs);
		}
		if(strcmp($var56, "PC") == 0)
		{
		$fs = fopen("56PC.txt","a");
		fwrite($fs,$varName . "\n");
		fclose($fs);
		}
		
		header("Location: Index.html");
		exit;
	}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>PCEP Walking Buddies</title>
</head>

<body>
	<?php
		if(!empty($errorMessage)) 
		{
			echo("<p>There was an error with your form:</p>\n");
			echo("<ul>" . $errorMessage . "</ul>\n");
		} 
	?>
	
	<h1>Thanks for logging in!</h1>
	<p>Please enter your walking schedule. For example, submitting "CSPPCC" would mean that your first hour is in Canton, second hour is in Salem, and so on.</p>

	<form action="ScheduleInputFinal.php" method="post">
		<p>
			What is your name?<br>
			<input type="text" name="formName" maxlength="50" value="<?=$varName;?>" />
		</p>
		<p>
			What is your first to second hour walk? Ex. Canton to Salem = CS<br>
			<input type="text" name="form12" maxlength="50" value="<?=$var12;?>" />
		</p>
		<p>
			What is your second to third hour walk?<br>
			<input type="text" name="form23" maxlength="50" value="<?=$var23;?>" />
		</p>
		<p>
			What is your third to fourth hour walk?<br>
			<input type="text" name="form34" maxlength="50" value="<?=$var34;?>" />
		</p>	
		<p>
			What is your fourth to fifth hour walk?<br>
			<input type="text" name="form45" maxlength="50" value="<?=$var45;?>" />
		</p>	
		<p>
			What is your fifth to sixth hour walk?<br>
			<input type="text" name="form56" maxlength="50" value="<?=$var56;?>" />
		</p>			
		<input type="submit" name="formSubmit" value="Submit" />
	</form>
</body>
</html>