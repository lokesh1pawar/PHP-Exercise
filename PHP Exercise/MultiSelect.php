<!-- Expand the user registration form with multiple select fields to collect more data.
 -->

<?php
$browsers=array(
     "None",
     "Firefox",
     "Chrome",
     "Internet Explorer",
     "Safari",
     "Opera",
     "Other"
  );
 
$speeds=array(
     "Unknown",
     "DSL",
     "T1",
     "Cable",
     "Dialup",
     "Other"
); 
 
$os=array(
     "Windows",
     "Linux",
     "Macintosh",
     "Other"
); 
 
class Select{
  
  private $name;   
  private $value;  
 
  public function setName($name){
     $this->name = $name;
  }
 
  public function getName(){
     return $this->name;
  }
 
  public function setValue($value){
     if (!is_array($value)){
        die ("Error: value is not an array.");
     }
     $this->value = $value;
   }
 
  public function getValue(){
     return $this->value;
  }
 
  private function makeOptions($value){
     foreach($value as $v){
        echo "<option value=\"$v\">" .ucfirst($v). "</option>\n";
      }
  }
 
  public function makeSelect(){
     echo "<select name=\"" .$this->getName(). "\">\n";
     $this->makeOptions($this->getValue());
     echo "</select>" ;
  }
}
 
?>
 
 
<!DOCTYPE html>
 
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<title>Multiple Select Objects</title>
</head>
 
<body>
<h2>User Registration<br /></h2>
 
<?php
  if(!isset($_POST['submit'])){
?>
 
<form method="post" action="">
<p>Name:<br />
<input type="text" name="name" size="60" />  </p>
<p>Username:<br />
<input type="text" name="username" size="60" /></p>
<p>Email:<br />
<input type="text" name="email" size="60" /></p>
 
<p><strong>Work Access</strong></p>
<p>Primary Browser: 
 
 
<?php
$browserWork = new Select();
$browserWork->setName('browserWork');
$browserWork->setValue($browsers);
$browserWork->makeSelect();
unset($browserWork);
 
echo "</p>\n<p>Connection Speed: ";
$speedWork = new Select();
$speedWork->setName('speedWork');
$speedWork->setValue($speeds);
$speedWork->makeSelect();
unset($speedWork);
 
echo "</p>\n<p>Operating System: ";
$osWork = new Select();
$osWork->setName('osWork');
$osWork->setValue($os);
$osWork->makeSelect();
unset($osWork);
 
?>
</p>
<p><strong>Home Access</strong></p>

<?php
$browserHome = new Select();
$browserHome->setName('browserHome');
$browserHome->setValue($browsers);
$browserHome->makeSelect();
unset($browserHome);
 
echo "</p>\n<p>Connection Speed: ";
$speedHome = new Select();
$speedHome->setName('speedHome');
$speedHome->setValue($speeds);
$speedHome->makeSelect();
unset($speedHome);
 
echo "</p>\n<p>Operating System: ";
$osHome = new Select();
$osHome->setName('osHome');
$osHome->setValue($os);
$osHome->makeSelect();
unset($osHome);
?>

<input type="submit" name="submit" value="Go" />
 
</form>
 
<?php
  }else{
    $name=$_POST['name'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $browserWork=$_POST['browserWork'];
    $speedWork=$_POST['speedWork'];
    $osWork=$_POST['osWork'];
    $browserHome=$_POST['browserHome'];
    $speedHome=$_POST['speedHome'];
    $osHome=$_POST['osHome'];
    echo "<p>The following data has been saved for $name: </p>\n";
    echo "<p>Username: $username<br />\n";
    echo "Email: $email</p>\n";
    echo "<p>Work Access:</p>\n";
    echo "<ul>\n<li>$browserWork</li>\n";
    echo "<li>$speedWork</li>\n";
    echo "<li>$osWork</li>\n</ul>\n";
    echo "<p>Home Access:</p>\n";
    echo "<ul>\n<li>$browserHome</li>\n";
    echo "<li>$speedHome</li>\n";
    echo "<li>$osHome</li>\n</ul>\n";
}
?>
 
</body>
</html>