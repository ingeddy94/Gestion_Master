	
	<?php
	//connectons nous d'abord à la base de donnée
	try {
		$bdd=new PDO('mysql:host=localhost;dbname=licencegl','root','');
	}
	catch (Exception $e) {
		die('erreur : ' . $e->getMessage());
	}
	
		$login = "";
		if(isset($_POST['username'])){
			$login=$_POST['username'];
		}
			$pass=$_POST['password'];		
			$rep=$bdd->query("SELECT * FROM users WHERE username='$login' AND password='$pass' ");
			$t=$rep->fetch();	
			$repo=$bdd->query("SELECT * FROM user WHERE username='$login' AND password='$pass' ");
			$to=$repo->fetch();
	
		if(($login==$t['username']) AND ((isset($pass))==$t['password'])) {
			header("location: index.php");						
		} 
		if(($login==$to['username']) AND ((isset($pass))==$to['password'])) {	
			header("location: index_ens.php");			
		} else {
			include("alerte.php");
			 //'ECHEC AUTHENTIFICATION'; 
		    include("login.php");
		}
	?>