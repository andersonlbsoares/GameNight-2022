
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
        <form action="../processamento/entrada/escolha.php" method="POST" class="login-form">
          <label for="login">Matrícula:</label>
          <input type="text" autofocus name="matricula" id="login" required>
<?php
if(isset($_GET['erro'])){
  $error = $_GET['erro'];
  if ($error = '1') {
    echo  "<script>alert('Matrícula Incorreta!');</script>";
  }
}
?>
        </form>
        <span>CLIQUE EM <span>ENTER</span> PARA CONTINUA!</span>
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