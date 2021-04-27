<?php 
    session_start();
   	$host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "abaxsoft";  
	$con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
    $fname = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $mob_num = $_POST['mob_num'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $sql = "insert into soft(name,email,mob_num,city,state,address) values ('$fname','$email','$mob_num','$city','$state','$address')";
    mysqli_query($con, $sql);
    if($sql){
       echo "welcome ".$fname;
    } 
?>