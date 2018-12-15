<?php
header('Content-Type: text/html; charset=utf-8');

$inputName = filter_input(INPUT_POST, 'inputName');
$inputEmail = filter_input(INPUT_POST, 'inputEmail');
$inputTel = filter_input(INPUT_POST, 'inputTel');
//$inputOrder = filter_var(FILTER_SANITIZE_STRING, 'order')





		$servername = "localhost";
		$username = "okkachasom_san";
		$password = "8Oit27SSQm";
		$dbname = "okkachasom_san";
		$conn = new mysqli($servername, $username, $password, $dbname);

		mysqli_set_charset($conn, "utf8");

		if (mysqli_connect_error()){
  			die('Connect Error ('. mysqli_connect_errno() .') ' . mysqli_connect_error());
}
		else{
			$sql = "INSERT INTO drink_data (inputName,inputEmail,inputTel) values('$inputName','$inputEmail','$inputTel')";
			//$sql = "INSERT INTO drink_data (inputName,inputEmail,inputTel,inputOrder) values('$inputName','$inputEmail','$inputTel','&inputOrder')";
			if ($conn->query($sql)){
				
    echo "Your order have been sent! Thank you!";
    echo "<br>";
    echo "\nYour Name: " . $inputName ;
    echo "<br>";
    echo "\nYour Email: " . $inputEmail;
    echo "<br>";
    echo "\nYour Tel.number: " . $inputTel;
    echo "<br>";
    //echo "\nYour Order: " . $inputOrder;
  }
  else{
    echo "Error: ". $sql ." ". $conn->error;
  }
	if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);
    echo "You order number is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

  $conn->close();
}



// mysql_close($connection);

?>