<?php
	function conn(){
		$servername = "localhost";
		$username = "okkachasom_san";
		$password = "8Oit27SSQm";
		$dbname = "okkachasom_san";
		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		else{
			return $conn;
		}
	}


//Block 2
$name= $_POST['name_entered'];
$mail= $_POST['mail_entered'];
$tel= $_POST['tel_entered'];

//Block 3
$connection= mysql_connect ($host, $user, $password);
if (!$connection)
{
die ('Could not connect:' . mysql_error());
}
mysql_select_db($database, $connection);


//Block 4
$username_table= mysql_query( "SELECT username FROM $table WHERE username= '$username'" ) 
or die("SELECT Error: ".mysql_error()); 


//Block 5
mysql_query("INSERT INTO $table (name, mail, tel)
VALUES (value1, value2, value 3)");

//Block 6
echo 'You have been added.';

//Block 7
mysql_close($connection);

?>