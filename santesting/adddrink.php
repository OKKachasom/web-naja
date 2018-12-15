<?php


$inputName = filter_input(INPUT_POST, 'inputName');
$inputEmail = filter_input(INPUT_POST, 'inputEmail');
$inputTel = filter_input(INPUT_POST, 'inputTel');





		$servername = "localhost";
		$username = "okkachasom_san";
		$password = "8Oit27SSQm";
		$dbname = "okkachasom_san";
		$conn = new mysqli($servername, $username, $password, $dbname);

		if (mysqli_connect_error()){
  			die('Connect Error ('. mysqli_connect_errno() .') ' . mysqli_connect_error());
}
		else{
			$sql = "INSERT INTO drink_data (inputName,inputEmail,inputTel) values('$inputName','$inputEmail','$inputTel')";
			if ($conn->query($sql)){

    echo "Your order have been sent! Thank you!";
    echo "<br>";
    echo "\nYour Name: " . $inputName ;
    echo "<br>";
    echo "\nYour Email: " . $inputEmail;
    echo "<br>";
    echo "\nYour Tel.number: " . $inputTel;
    echo "<br>";
  }
  else{
    echo "Error: ". $sql ." ". $conn->error;
  }
	if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);
    echo "You order number is: " . $last_id;
    echo "<br>";
    echo "*In this form Thai language maybe not correct but you can assure that we'll get you order and also your name.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

  $conn->close();
}



// mysql_close($connection);

?>