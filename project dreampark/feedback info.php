<?php
$con= mysqli_connect('localhost','root','');
if (!$con){
    echo 'error';

}
if(!mysqli_select_db ($con,'hotel')){
    echo 'not selected';
}
$name= $_POST['name'];
$mymail=$_POST['email'];
$message=$_POST['message'];



$sql = "INSERT INTO feedback (Name,email,Message) VALUES('$name','$mymail','$message')";
if(!mysqli_query($con,$sql)){
    echo 'not inserted';

}
else{
    
  
    echo '<script language="javascript">';
	echo "alert('Thank you for your feedback')";
	echo '</script>';
  
  header("refresh:5; url=dreampark homepage.html");
}
  ?>