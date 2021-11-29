<?php
//   Rewrite Functions Ex. #4 to expand the option function and call it in a new function that creates a select field.

  $months=array(
    'January'=>31,
    'February'=>28,
    'March'=>31,
    'April'=>30,
    'May'=>31,
    'June'=>30,
    'July'=>31,
    'August'=>31,
    'September'=>30,
    'October'=>31,
    'November'=>30,
    'December'=>31
  );
 
  function makeOptions($value){
     foreach($value as $k => $v){
        echo "<option value=\"$k\">" .ucfirst($k). "</option>\n";
      }
  }
 
  function makeSelect($name, $value){
     if (!is_array($value)){
        exit ("Error: value is not an array.");
     }
     echo "<select name=\"$name\">\n";
     
     makeOptions($value);
     echo "</select>" ;
  }
?>
 
 
<!DOCTYPE html">
 
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<title>Function That Calls Another</title>
</head>
 
<body>
<h2>Days in a Month Again<br /></h2>
 
<?php
  if(!isset($_POST['submit'])){
?>
 
<form method="post" action="">
<p>Please choose a month:</p>
 
<p />
<?php
 
makeSelect('month', $months);
 
?>
<p />
<input type="submit" name="submit" value="Go" />
 
</form>
 
<?php
  }else{
  $month = $_POST['month'];
 
  if ($month == 'February'){
    echo "The month of February has " . $months['February'] . ".";
  }else{
    echo "The month of $month has $months[$month] days.";
  }
 
  }
?>
 
</body>
</html>