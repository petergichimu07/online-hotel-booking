
<?php


$con= mysqli_connect('localhost','root','');
if (!$con){
    echo 'error';

}
if(!mysqli_select_db ($con,'hotel')){
    echo 'not selected';
}

$username = trim($_POST['username']);
$password = trim($_POST['Password']);
$query = "SELECT username, password FROM admin_login WHERE username='$username' 
AND password='$password'";
    
    if(!$query){
        echo "error";
    }


$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);




if($row['username']==$username&&$row['password']=$password){
	echo '<script language="javascript">';
	echo "alert('Welcome Admin')";
	echo '</script>';
	 header("refresh:0; url=admin_view.php");
}
else{
	echo '<script language="javascript">';
	echo "alert('incorrect login details')";
	echo '</script>';
	 header("refresh:0; url=admin.html");
}
  
?>
