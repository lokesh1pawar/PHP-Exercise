<!-- Use the if-else construct to print one of two statements to the browser, depending on whether the current month is August.
 -->
<!DOCTYPE html">
 
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />

<title>If-Else Statement</title>
</head>
 
<body>
<h2>If-Else Statement</h2>
 
<?php
 
        $currentMonth=date('F', time());
        if ($currentMonth == 'August'){
        echo "<p>It's August</p>";
        }else{
        echo "<p>It's Not August</p>";
        }
 
?>

</body>
</html>