<?php

$user_name=$_POST['user_name'];
$user_email=$_POST['Email'];
$user_mobile = $_POST['mobile'];
$user_text=$_POST['text'];

		include ("conn.php");

		$query = "INSERT INTO user_enquiry(uname,uemail,umobile,udeatils) VALUES('{$user_name}','{$user_email}','{$user_mobile}','{$user_text}')";
		$result = mysqli_query($conn,$query) or die("data not submitted");
		?>
		<script>
			alert("we well contact you soon.")
			// window.location.replace()
		</script>
		<?php

		mysqli_close($conn);
		header("Location: http://localhost/werepair/");
// for subscribers
?>