<?php
// Write a class to create a select field for a user registration form.


$browsers=array(
    "Firefox",
    "Chrome",
    "Internet Explorer",
    "Safari",
    "Opera",
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
 
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<title>Class Select </title>
</head>
 
<body>
<h2>User Registration <br /></h2>
 
<?php
  if(!isset($_POST['submit'])){
?>
 
<form method="post" action="yourfile.php">
<p>Name:<br />
<input type="text" name="name" size="60" />  </p>
<p>Username:<br />
<input type="text" name="username" size="60" /></p>
<p>Email:<br />
<input type="text" name="email" size="60" /></p>
<p>Browser:
 
 
<?php
$browser = new Select();
$browser->setName('browser');
$browser->setValue($browsers);
$browser->makeSelect();
?>
</p>
<input type="submit" name="submit" value="Go" />
 
</form>
 
<?php
  }else{
    $name=$_POST['name'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $selBrowser=$_POST['browser'];
    echo "The following data has been saved for $name: <br />";
    echo "Username: $username<br />";
    echo "Email: $email<br />";
    echo "Browser: $selBrowser<br />";
 
}
?>
 
</body>
</html>