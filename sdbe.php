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
 $enrolno=$_POST['enrolno'];
 $q="Select * from tbl_name where enrolno='$enrolno'";
 $d=mysqli_query($con,$q);
 $result1=mysqli_fetch_assoc($d);
 echo "Student Details are as Following:";
 echo "<br>";
 echo "Name:  ";
 echo $result1['name'];
 echo "<br>";
 echo "Admission Number:  ";
 echo $result1['admno'];
 echo "<br>";
 echo "Enrolnment Number:  ";
 echo $result1['enrolno'];
 echo "<br>";
 echo "Email:  ";
 echo $result1['email'];
 echo "<br>";
 echo "Contact Number:  ";
 echo $result1['mob'];
 echo "<br>";

?>