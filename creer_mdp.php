<?php

if(isset($_POST['mdp'])){
	if(!empty($_POST['mdp'])){
		$mdp_chiffre = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
	}
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Création mot de passe</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<header>
		</header>

		<main>
			<form action="creer_mdp.php" method="post">
				<label for="mdp">Mot de passe: </label><input type="text" name="mdp" id="mdp" /><br><br>
				<input type="submit" value="Chiffrer" /><br><br>
				<?php
				if(!empty($mdp_chiffre)){
					echo 'Le mot de passe chiffré est: '.$mdp_chiffre;
				}
				?>
			</form>
		</main>

		<footer>
		</footer>
	</body>
</html>