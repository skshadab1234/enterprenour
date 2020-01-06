<?php
	include 'includes/session.php';

	$conn = $pdo->open();

	if(isset($_POST['edit'])){
		$curr_password = $_POST['curr_password'];
		$opportunity = $_POST['opportunity'];
		$opportunity2 = $_POST['opportunity2'];
		$opportunity3 = $_POST['opportunity3'];
		$opportunity4 = $_POST['opportunity4'];
		$opportunity5 = $_POST['opportunity5'];
		$opportunity6 = $_POST['opportunity6'];
		if(password_verify($curr_password, $user['password'])){
			if($password == $user['password']){
				$password = $user['password'];
			}
			else{
				$password = password_hash($password, PASSWORD_DEFAULT);
			}

			try{
				$stmt = $conn->prepare("UPDATE users SET opportunity=:opportunity, opportunity2=:opportunity2, opportunity3=:opportunity3, opportunity4=:opportunity4, opportunity5=:opportunity5, opportunity6=:opportunity6 WHERE id=:id");
				$stmt->execute(['opportunity'=>$opportunity, 'opportunity2'=>$opportunity2, 'opportunity3'=>$opportunity3, 'opportunity4'=>$opportunity4, 'opportunity5'=>$opportunity5, 'opportunity6'=>$opportunity6, 'id'=>$user['id']]); 

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