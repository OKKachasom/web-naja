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
  }
  else{
    echo "Error: ". $sql ."
". $conn->error;
  }
  $conn->close();
}



// mysql_close($connection);

?>