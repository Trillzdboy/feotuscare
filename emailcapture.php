<? php
$conn = mysqli_connect('localhost', 'root', '', 'emailcapture');


if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$email = mysqli_real_escape_string($conn, $email)
	;
	
	$query = "INSERT INTO foetuslist (email)
	VALUES ('$email')";
	$result = mysqli_query($conn,$query);
	if($result){
		echo "<script>
		alert ('successfully subscribed');
		window.location.pathname = 'phph/index.html';
		</script>";
	} else{
		echo "<script>
		alert ('unsuccessful');
		window.location.pathname = 'phph/index.html';
		</script>";
	}
}
