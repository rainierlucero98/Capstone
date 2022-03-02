<?php
$conn=new mysqli('localhost','root','','cho');
if ($conn->connect_error){
	die("Connection Error:".$conn->connect_error);
	
}
$result =$conn -> query	("SELECT Name,Serving FROM Queue");
if ($result-> num_rows >0 ){
	while($row = $result -> fetch_assoc()){
		echo $row['Name'];
		echo $row['Serving'];
		
	}
}
?>