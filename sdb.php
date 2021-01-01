<?php
 $server="localhost";
 $username="root";
 $password="";
 $dbname="csv_db";
 $con=mysqli_connect($server,$username,$password,$dbname);
 if($con){
     //echo "Connection Established";
 }
 else{
     die("Connection Failed Due to".mysqli_connect_error());
 }
 $admno=$_POST['admno'];
 $q="Select * from tbl_name where admno='$admno'";
 $d=mysqli_query($con,$q);
 $result=mysqli_fetch_assoc($d);
 echo "Student Details are as Following:";
 echo "<br>";
 echo "Name:  ";
 echo $result['name'];
 echo "<br>";
 echo "Admission Number:  ";
 echo $result['admno'];
 echo "<br>";
 echo "Enrolnment Number:  ";
 echo $result['enrolno'];
 echo "<br>";
 echo "Email:  ";
 echo $result['email'];
 echo "<br>";
 echo "Contact Number:  ";
 echo $result['mob'];
 echo "<br>";

?>