<?php
//db info
$host = 'mysql.idhostinger.com';
$username = 'u803128751_mydb';
$password = 'lovemydb';
$dbname = 'u803128751_mydb';

// connect db
$link = mysqli_connect($host,$username,$password,$dbname) or die('Cannot connect to server');