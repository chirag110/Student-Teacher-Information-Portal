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
 $name=$_POST['name'];
 $q="Select * from table_4 where name='$name'";
 $d=mysqli_query($con,$q);
 $result=mysqli_fetch_assoc($d);
 echo "You can Contact $name on:";
 echo "<br>";
 //echo "Contact:  ";
 echo $result['mob'];
?>