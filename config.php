<?php

$host = 'localhost';
$db = 'siswadb';
$user = 'danisarenita';
$pass = 'oryzasativa123';

$conn = new PDO('mysql:host='.$host.';dbname='.$db.'', $user, $pass);
if($conn){
    echo 'connect';
}else{
    echo 'not connect';
}

?>