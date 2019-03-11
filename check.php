<?php
$name=$_POST['name'];
$pass=$_POST['pass'];

if ($name==('admin') & $pass==("123")){

include_once('ConnectToDatabase.php');

$query = "INSERT INTO table1(username, password) 
          VALUES('$name', '$passw')"; // user_validation can be any table name and the u_mail, username, password should be column names in the table
 $result = mysqli_query($conn, $query)


 if(result){
     echo
     "success"
 }
else{FAILED}
}
/**
 * Created by PhpStorm.
 * User: User
 * Date: 08/03/2019
 * Time: 12:38
 */