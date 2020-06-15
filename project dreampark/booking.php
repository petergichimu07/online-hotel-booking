 <?php


$con= mysqli_connect('localhost','root','');
if (!$con){
    echo 'error';

}
if(!mysqli_select_db ($con,'hotel')){
    echo 'not selected'; 
}
$name= $_POST['name'];
$mymail=$_POST['Email'];
$phonenumber=$_POST['phonenumber'];


$sql = "INSERT INTO cust_login (Name,email, Phone_no) VALUES('$name','$mymail','$phonenumber')";
if(!mysqli_query($con,$sql)){
    echo 'not inserted';

}

if($mymail==''){
    echo 'error, please enter your email address details';

    header("refresh:0; url=login.php");
 
}
else if ($name==''){
    echo 'error, please enter your name';

    header("refresh:0; url=login.php");
}

else{
    
  
    echo '<script language="javascript">';
	echo "alert('Welcome to Dreampark Booking Site')";
	echo '</script>';
  
  header("refresh:0; url=booking.html");
 

   
}

?>