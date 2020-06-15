
 <?php


$con= mysqli_connect('localhost','root','');
if (!$con){
    echo 'error';

}
if(!mysqli_select_db ($con,'hotel')){
    echo 'not selected';
}
$days= $_POST['days'];
$meals=$_POST['meals'];
$roomtype=$_POST['roomtype'];
$email=$_POST['email'];



$sql = "INSERT INTO  rooms(type,days,meals,email) VALUES('$roomtype','$days','$meals','$email')";
if(!mysqli_query($con,$sql)){
    echo 'not inserted';
 header("refresh:3; url=booking.html");
}

if($roomtype==''){
    echo '<script language="javascript">';
	echo "alert('please select a roomtype')";
	echo '</script>';


    header("refresh:3; url=booking.html");
 
}
else if ($meals==''){
    echo '<script language="javascript">';
	echo "alert('please select a meal plan')";
	echo '</script>';


    header("refresh:0; url=booking.html");
}
else if ($days==''){
    echo '<script language="javascript">';
	echo "alert('please select the number of days)";
	echo '</script>';

    header("refresh:0; url=booking.html");
}

else{
    
  
    echo '<script language="javascript">';
	echo "alert('you have sucessfully booked')";
	echo '</script>';
  
  header("refresh:0; url=dreampark homepage.html");
 

   
}
$restriction=$_POST['restrictions'];
$specify=$_POST['specify'];
// $issue=$_POST['describe'];
$describe=$_POST['describe'];
$name=$_POST['name'];

$sql1="INSERT INTO issues(restriction,issue,description,name) values ('$restriction','$specify','$describe','$name')";
if(!mysqli_query($con,$sql1)){
    echo 'not inserted';
 header("refresh:30; url=booking.html");
}
?>
