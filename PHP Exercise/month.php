<!-- Write an array of months and their corresponding number of days, with a function to create option elements for a select field.
 -->
<?php
	$monthList=array('January'=>'31','February' => '28 days','March' => '30','April' => '30', 'May' => '31','June' => '30','July' => '31','August' => '31','September' => '30','October' => '31','November' => '30','December' => '31');
 
	function opt(){		
		foreach($GLOBALS['monList'] as $month => $days){
			echo "<option value=\"$month\">".strtoupper($month)."</option>";}
	}
?>
<!DOCTYPE html">
<head>
</head>
<body>
	<?php		
		if (isset($_POST['monthSelect'])){
			foreach($GLOBALS['monList'] as $month => $days) {
				if($month == $_POST['monthSelect'])
					echo "The month of $month has $days days. <br/>";
			}
		}
		echo "Choose a month: <br/>";
	?>
	<form action="<?php echo"{$_SERVER['PHP_SELF']}";?>" method="POST">		
		<select name="monthSelect" multiple="yes" size="6">
			<?php opt(); ?>
		</select>
		<br/><input type="submit" value="Check it"/>
	</form>
</body>
</html>