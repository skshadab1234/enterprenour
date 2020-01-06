<?php
	include 'includes/session.php';

	$conn = $pdo->open();

	if(isset($_POST['edit'])){
		$curr_password = $_POST['curr_password'];
		$strength = $_POST['strength'];
		$strength2 = $_POST['strength2'];
		$strength3 = $_POST['strength3'];
		$strength4 = $_POST['strength4'];
		$strength5 = $_POST['strength5'];
		$strength6 = $_POST['strength6'];
		if(password_verify($curr_password, $user['password'])){
			if($password == $user['password']){
				$password = $user['password'];
			}
			else{
				$password = password_hash($password, PASSWORD_DEFAULT);
			}

			try{
				$stmt = $conn->prepare("UPDATE users SET strength=:strength, strength2=:strength2, strength3=:strength3, strength4=:strength4, strength5=:strength5, strength6=:strength6 WHERE id=:id");
				$stmt->execute(['strength'=>$strength, 'strength2'=>$strength2, 'strength3'=>$strength3, 'strength4'=>$strength4, 'strength5'=>$strength5, 'strength6'=>$strength6, 'id'=>$user['id']]); 

				$_SESSION['success'] = 'Account updated successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
			
		}	
		else{
			$_SESSION['error'] = 'Incorrect password';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	$pdo->close();

	header('location: index.php');

?>