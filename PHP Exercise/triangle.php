<?php

// Rewrite the exercise from #2 to accept user input.

if(isset($_POST['submit']))
{
$heig = $_POST['height'];
$wid = $_POST['width'];

function rect($heig,$wid ){
    
    echo  $heig * $wid ;
}

rect($heig,$wid ) ;


   

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rectangle Input</title>
</head>
<body>
    <form method="POST">

        <input type="number" name="height"/>
        <input type="number" name="width"/>
        <input type="submit" value="submit" name="submit"/>
    </form>
</body>
</html>


