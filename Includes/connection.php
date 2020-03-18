<?php
$servername ='localhost';
$username ='root';
$password ='Iyenosimhe88';
$db_Name = 'tymframedb';

//Connect to the database
$con = mysqli_connect($servername , $username, $password, $db_Name);

if(!$con){
    echo 'Error'.mysqli_connect_error();
}else{
    echo 'connection successful!';
}

?>