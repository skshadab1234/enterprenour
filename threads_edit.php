<?php
	include 'includes/session.php';

	$conn = $pdo->open();

	if(isset($_POST['edit'])){
		$curr_password = $_POST['curr_password'];
		$threads = $_POST['threads'];
		$threads2 = $_POST['threads2'];
		$threads3 = $_POST['threads3'];
		$threads4 = $_POST['threads4'];
		$threads5 = $_POST['threads5'];
		$threads6 = $_POST['threads6'];
		if(password_verify($curr_password, $user['password'])){
			if($password == $user['password']){
				$password = $user['password'];
			}
			else{
				$password = password_hash($password, PASSWORD_DEFAULT);
			}

			try{
				$stmt = $conn->prepare("UPDATE users SET threads=:threads, threads2=:threads2, threads3=:threads3, threads4=:threads4, threads5=:threads5, threads6=:threads6 WHERE id=:id");
				$stmt->execute(['threads'=>$threads, 'threads2'=>$threads2, 'threads3'=>$threads3, 'threads4'=>$threads4, 'threads5'=>$threads5, 'threads6'=>$threads6, 'id'=>$user['id']]); 

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