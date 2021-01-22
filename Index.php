

<?php

$dsn="mysql:dbname=db_student;host=localhost;";
$user="root";
$pass="";

try{
	$pdo= new PDO($dsn,$user,$pass);
}catch(PDOexception $e){
	echo ("Connection failed").$e->getMessage();
	
}
$sql="select * from tbl_student";
$result=$pdo->query($sql);
foreach($result as $value){
	echo $value['name']."<br>";
} 

?>