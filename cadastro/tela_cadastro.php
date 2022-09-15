<?php
	require '../validacao.php';

	if(isset($_GET['info'])){
		if($_GET['info'] == '1'){
      echo "<script>alert('Cadastro realizado com sucesso!');</script>";
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
        <div class="login-form">
          <label id="cadastrar_participante">Cadastrar participante:</label>
          <div class="input-group">
            <a id="out-of-ufc" href='tela_cadastro_ufc'>Aluno UFC</a>
            <a id="of-ufc" href='tela_cadastro_nao_ufc'>Fora da UFC</a>
          </div>
        </div >
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