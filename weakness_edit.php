<?php
	include 'includes/session.php';

	$conn = $pdo->open();

	if(isset($_POST['edit'])){
		$curr_password = $_POST['curr_password'];
		$weakness = $_POST['weakness'];
		$weakness2 = $_POST['weakness2'];
		$weakness3 = $_POST['weakness3'];
		$weakness4 = $_POST['weakness4'];
		$weakness5 = $_POST['weakness5'];
		$weakness6 = $_POST['weakness6'];
		if(password_verify($curr_password, $user['password'])){
			if($password == $user['password']){
				$password = $user['password'];
			}
			else{
				$password = password_hash($password, PASSWORD_DEFAULT);
			}

			try{
				$stmt = $conn->prepare("UPDATE users SET weakness=:weakness, weakness2=:weakness2, weakness3=:weakness3, weakness4=:weakness4, weakness5=:weakness5, weakness6=:weakness6 WHERE id=:id");
				$stmt->execute(['weakness'=>$weakness, 'weakness2'=>$weakness2, 'weakness3'=>$weakness3, 'weakness4'=>$weakness4, 'weakness5'=>$weakness5, 'weakness6'=>$weakness6, 'id'=>$user['id']]); 

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