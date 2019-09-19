<?php
	require 'db_config.php';

	if (isset($_POST['login'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];
		if (!empty($email) && !empty($password)) {
			$password = md5($password);
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
				echo "<script>window.location.href='login.html'</script>";

			}
			
		} else {
			echo "<script>alert('Please fill in all fields!')</script>";
		}
		
	};




	if (isset($_POST['signup'])) {
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];

		if (!empty($firstname) &&!empty($lastname) &&!empty($email) &&!empty($password) &&!empty($cpassword)) {
					if ($password == $cpassword) {
						$stmt = $conn->prepare("SELECT * FROM user WHERE Email = ?");
						$stmt->bindParam(1, $email, PDO::PARAM_STR);
						$stmt->execute();
						$row = $stmt->fetch();
						if ( $row > 0) {
							echo "<script>alert('Username already exists. Please login!')</script>";
						} else {
						$password = md5($password);
						$stmt = $conn->prepare("INSERT INTO user (Firstname, Lastname, Email, Password) VALUES (?,?,?,?)");
						$stmt->bindParam(1, $firstname, PDO::PARAM_STR);
						$stmt->bindParam(2, $lastname, PDO::PARAM_STR);
						$stmt->bindParam(3, $email, PDO::PARAM_STR);
						$stmt->bindParam(4, $password, PDO::PARAM_STR);
						$stmt->execute();
						if ($stmt == true) {;?>
								<link rel="stylesheet" type="text/css" href="style.css">
								<div class="success-login">
								<h2>Congratulations! You have been successfully registered</h2>
								<p>You can go ahead and login now</p>
								
								</div>
						<?php } else {
							echo "<script>alert('OOPPS! A problem has occcurred! Please try again!')</script>";
						}
						}
						
						
					} else {
						echo "Missmatched passwords";
						
					}
					
				} else {
					echo "Please fill out all fields!";
				}
						
	}


	if (isset($_POST['recover'])) {
		$email = $_POST['email'];
		if (!empty($email)) {
			$stmt = $conn->prepare("SELECT * FROM user WHERE Email = ?");
						$stmt->bindParam(1, $email, PDO::PARAM_STR);
						$stmt->execute();
						$row = $stmt->fetch();
						if ($row > 0) {
							echo "<script>alert('Email gotten!')</script>";
						} else {
							echo ";<script>alert('OOPPS! Email not gotten!')</script>";
						}
						
		} else {
			echo "<script>alert('OOPPS! A problem has occcurred! Please try again!')</script>";
			exit();
		}
		
		
						
	}
?>