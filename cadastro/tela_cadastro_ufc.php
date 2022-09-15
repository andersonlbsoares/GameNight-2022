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
        <form action="../processamento/cadastro/ufc.php" method="POST" class="register-form">
          <label for="std-name">Nome:</label>
          <input type="text" name="nome" id="std-name" required>
          <label for="std-mat">Matrícula:</label>
          <input type="text" name="matricula" id="std-mat" required>
          <label for="std-course">Curso:</label>
          <select id="std-course" name="curso">
						<option value="CC">Ciência da Computação</option>
						<option value="EC">Engenharia de Computação</option>
						<option value="ES">Engenharia de Software</option>
						<option value="RC">Redes de Computadores</option>
						<option value="SI">Sistema de Informação</option>
						<option value="DD">Design Digital</option>
					</select>
          <input type="submit" value="pronto">
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