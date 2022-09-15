<?php
	if(isset($_GET['error'])){
		$error = $_GET['error'];
		if ($error = '1') {
			echo "Usuário incorreto, tente novamente.";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="./styles.css">

  <title>Credenciamento Game Night</title>
</head>
<body>
  <div class="w-screen h-screen background-section flex justify-start">
    <main>
      <img src="../assets/logo-gn.svg" class="logo-gn" alt="Logo Game Night">
      <div class="form-secton">
      <form action="processamento/processamentologin.php" method="POST" class="login-form">
        <label for="user">Usuário:</label>
        <input type="tex" name="user" id="user" required> 
        <label for="password">Senha:</label>
        <input type="password" name="password" id="password" required>
        <input type="submit" value="Entrar">
      </form>
      </div>
      <footer>
        <img src="../assets/gn-img.svg" alt="Imagem Game Night">
        <img src="../assets/ufc-img.svg" alt="Logo UFC">
        <img src="../assets/pet-img.svg" alt="Logo PET">
      </footer>
    </main>
  </div>
</body>
</html>