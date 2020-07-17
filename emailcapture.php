<?php

// get value of email on submit
  $email = $_POST['email'];

  $conn = new mysqli('localhost','root','','emailcapture');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into foetuslist(email) values(?)");
		$stmt->bind_param("s", $email);
		$execval = $stmt->execute();
		echo "<script>
		alert ('successfully subscribed');
		window.location.pathname = 'index.html';
		</script>";
		$stmt->close();
		$conn->close();
	}

	if (empty($_POST["email"])) {
		$emailErr = "Email is required";
	  } else {
		$email = ($_POST["email"]);
		// check if e-mail address is well-formed
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  $emailErr = "Invalid email format";
		}
	  }

?>
