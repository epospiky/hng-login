<?php
	require 'db_config.php';

	if (isset($_POST['login'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];
		if (!empty($email) && !empty($password)) {
			$stmt = $conn->prepare("SELECT * FROM user WHERE email = ? AND password = ?");
			$stmt->bindParam(1, $email, PDO::PARAM_STR);
			$stmt->bindParam(2, $password, PDO::PARAM_STR);
			$stmt->execute();
			$row =  $stmt->fetch();
			if ($row > 0) {;?>
				<link rel="stylesheet" type="text/css" href="style.css">
				<div class="success-login">
					<h2>Congratulations! You have been successfully authenticated</h2>
					<p>You username is <?php echo " ".$row['Username'];?></p>
					<p>Your Email address is <?php echo " ".$row['Email'];?></p>
				</div>

			<?php } else {
				echo "<script>alert('Invalid Email and password!')</script>";
				
			}
			
		} else {
			echo "<script>alert('Please fill in all fields!')</script>";
		}
		
	}
?>