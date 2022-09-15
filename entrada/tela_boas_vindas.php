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
      <img src="../assets/welcome.svg" class="logo-gn" alt="Logo Game Night">
      
      <span class="person-name"><?php
        include "../processamento/conexao.php";
        $ufc = $_GET['ufc'];
      
        if($ufc=='1'){
          $matricula = $_GET['mat'];
          $sql = "SELECT * FROM participantes WHERE matricula = '$matricula'";
          $resultado = mysqli_query($conn, $sql);
          while ($linha = mysqli_fetch_array($resultado)) {
            // echo "Seja Bem-Vindo";
            echo $linha['nome'];
      
          }	
        }else if($ufc=='0'){
          $matricula = $_GET['mat'];
          $selecao = $_GET['selecao'];
      
          $sql = "SELECT * FROM participantes WHERE responsavel = '$matricula' && matricula= '$selecao'";
          $resultado = mysqli_query($conn, $sql);		
          while ($linha = mysqli_fetch_array($resultado)) {
            // echo "Seja Bem-Vindo";
            echo $linha['nome'];          
          }
        }
      
      ?>
      
      
      </span>

      <footer>
        <img src="../assets/gn-img.svg" alt="Imagem Game Night">
        <img src="../assets/ufc-img.svg" alt="Logo UFC">
        <img src="../assets/pet-img.svg" alt="Logo PET">
      </footer>
    </main>
  </div>
</body>
</html>
<script>
	function redirencionar() {
	  setTimeout(() => { window.location.href = "tela_inicial.php"; }, 2000);
	}  
	redirencionar();
</script>