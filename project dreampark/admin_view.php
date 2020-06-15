<!DOCTYPE html>
<html>
<head>
	<title>admin_view</title>
    <link rel="stylesheet" type="text/css" href="admin_viewstyles.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="css/bootstrap-table.css" rel="stylesheet">
<link type="text/css" href="css/font-awesome.css" rel="stylesheet">
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-table.js"></script>
<script src="js/jquery-1.11.1.min.js"></script>
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->
  
</head>

<body>
<div id="header">
<h1>Welcome Admin</h1>
</div>
<h2 style="color:blue;">the table below shows all the booked rooms and their specifications:</h2>
<?php 
$hostname="localhost";
$username="root";
$password="";
$databbase="hotel";
$con= mysqli_connect($hostname,$username,'');
if (!$con){
    echo 'error';

}
if(!mysqli_select_db ($con,'hotel')){
    echo 'not selected';
}

$sqlget="SELECT * FROM `cust_login` INNER JOIN rooms ON(cust_login.Serial_No=rooms.Serial_No)";




$sqldata=mysqli_query($con,$sqlget)or die("error happened");

// echo "<table>";
// echo  "<tr><th>S/N</th> <th>Name</th> <th>email</th> <th>Phone_number</th> <th>Room Type</th><th>Date in</th><th>Days Stayed</th><th>Meal plan</th></tr>";


// while($row= mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
//  echo "<tr><td>";
//  echo $row['Serial_No'];
//  echo "</td><td>";

 
//  echo $row['Name'];
//  echo "</td><td>";

 
//  echo $row['email'];
//  echo "</td><td>";

 
//  echo $row['Phone_no'];
//  echo "</td><td>";

 

//  echo $row['type'];
//  echo "</td><td>";

//  echo $row['date_in'];
//  echo "</td><td>";

//  echo $row['days'];
//  echo "</td><td>";

//  echo $row['meals'];
//  echo "</td></tr>";


// }
// echo "</table>";






?>
<div class="table-responsive">
                       <table id="employee_data" class="table table-hover table-dark">
                            <thead>
                                 <tr>
                                      <th>S/N</th>
                                      <th>Name</th>
                                      <th>Email</th>
                                      <th>Phone Number</th>
                                      <th>Room Type</th>
                                      <th>Date in</th>
                                      <th>Days Stayed</th>
                                      <th>Meal Plan</th>
                                      
                                     
                                 </tr>
                            </thead>
  <?php
  $hostname="localhost";
  $username="root";
  $password="";
  $databbase="hotel";
  $con= mysqli_connect($hostname,$username,'');
  if (!$con){
      echo 'error';
  
  }
  if(!mysqli_select_db ($con,'hotel')){
      echo 'not selected';
  }
  
  $sqlget="SELECT * FROM `cust_login` INNER JOIN rooms ON(cust_login.email=rooms.email)";
  
  
  
  
  $sqldata=mysqli_query($con,$sqlget)or die("error happened");
  while($row= mysqli_fetch_array($sqldata, MYSQLI_ASSOC))
                            // while($row = mysqli_fetch_array($result))
                            {
                                 echo '
                                 <tr>
                                      <td>'.$row["Serial_No"].'</td>
                                      <td>'.$row["Name"].'</td>
                                      <td>'.$row["email"].'</td>
                                      <td>'.$row["Phone_no"].'</td>
                                      <td>'.$row["type"].'</td>
                                      <td>'.$row["date_in"].'</td>
                                      <td>'.$row["days"].'</td>
                                      <td>'.$row["meals"].'</td>
                                     
                                 </tr>
                                 ';
                            }
  ?>
                       </table>
                  </div>
             </div>
        </body>
   </html>
   <script>
   $(document).ready(function(){
        $('#employee_data').DataTable();
   });
   </script>



  </tbody>
</table>

<h2 style="color:blue;">The table below shows customers' feedback.</h2>
<?php
  $server="localhost";
  $user="root";
  $password="";
  $database="hotel";
  $connect=mysqli_connect($server,$user,$password,$database);
   $query ="SELECT * FROM feedback";
   $sqldata = mysqli_query($connect,$query) or die('error getting information');
   $result = mysqli_query($connect, $query);
   ?>
           <div class="table-responsive">
                       <table id="employee_data" class="table table-hover table-dark">
                            <thead>
                                 <tr>
                                      <th>S/N</th>
                                      <th>Name</th>
                                      <th>Email Address</th>
                                      <th>Message</th>
                                     
                                 </tr>
                            </thead>
  <?php
                            while($row = mysqli_fetch_array($result))
                            {
                                 echo '
                                 <tr>
                                      <td>'.$row["S/N"].'</td>
                                      <td>'.$row["Name"].'</td>
                                      <td>'.$row["email"].'</td>
                                      <td>'.$row["Message"].'</td>
                                     
                                 </tr>
                                 ';
                            }
  ?>
                       </table>
                  </div>
             </div>
        </body>
   </html>
   <script>
   $(document).ready(function(){
        $('#employee_data').DataTable();
   });
   </script>

<!-- *************************************************************************************************************** -->
<h2 style="color:blue;">We have the following customer diatary issues</h2>
<?php
  $server="localhost";
  $user="root";
  $password="";
  $database="hotel";
  $connect=mysqli_connect($server,$user,$password,$database);
   $query ="SELECT * FROM issues WHERE restriction like '%yes%'";
   $sqldata = mysqli_query($connect,$query) or die('error getting information');
   $result = mysqli_query($connect, $query);
   ?>
           <div class="table-responsive">
                       <table id="employee_data" class="table table-hover table-dark">
                            <thead>
                                 <tr>
                                      <th>S/N</th>
                                     
                                      <th>Issue</th>
                                      <th>Description</th>
                                      <th>Name</th>

                                     
                                 </tr>
                            </thead>
  <?php
                            while($row = mysqli_fetch_array($result))
                            {
                                 echo '
                                 <tr>
                                      <td>'.$row["S/N"].'</td>
                                      
                                      <td>'.$row["issue"].'</td>
                                      <td>'.$row["description"].'</td>
                                      <td>'.$row["name"].'</td>
                                     
                                 </tr>
                                 ';
                            }
  ?>
                       </table>
<!-- ***************************************************************************************************************** -->

<a href="dreampark homepage.html" class="home">Home</a>
<p id="copy">©Peter Macharia 2019</p>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>