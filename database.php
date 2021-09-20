<?php
$servername='localhost';
$username='root';
$password='';
$dbport = 3306;
$dbname = "lab";
$conn=mysqli_connect($servername,$username,$password,"$dbname", $dbport);
if(!$conn){
    die('Could not Connect My Sql:' .mysql_error());
}
?>