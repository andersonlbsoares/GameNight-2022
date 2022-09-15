<?php
  require '../validacao.php';
  include "../processamento/conexao.php";

  $sql = "SELECT * FROM participantes WHERE ufc ='1'";
  $resultado = mysqli_query($conn, $sql);
  
  $participantes2 = array();
  while($linha = mysqli_fetch_array($resultado)){
    $string = $linha['matricula'] . " - " . $linha['nome'];
    array_push($participantes2, $string);
  }
  $js_array2 = json_encode($participantes2);
  // echo $js_array2;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="./styles.css">

  <title>Credenciamento Game Night</title>
  <script>
  $( function() {
        var availableTags = <?php echo $js_array2; ?>;
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  } );
  </script>
</head>
<body>
  <div class="w-screen h-screen background-section flex justify-start">
    <main>
      <img src="../assets/logo-gn.svg" class="logo-gn" alt="Logo Game Night">
      <div class="form-secton">
        <form action="../processamento/cadastro/nao_ufc.php" method="POST" class="register-form">
          <label for="std-name">Nome:</label>
          <input type="text" name="nome" id="std-name" required>
          <label for="std-mat">RG:</label>
          <input type="text" name="cpf" id="std-mat" required>
          <label for="std-course">Responsável:</label>
          <!-- <select id="respon std-course" name="responsavel"> -->
						<?php
							// $sql = "SELECT * FROM participantes WHERE ufc ='1'";
							// $resultado = mysqli_query($conn, $sql);
							// while($linha = mysqli_fetch_array($resultado)){
				    			// echo "<option value='".$linha['matricula']."'>".$linha['matricula']." - ".$linha['nome']."</option>";
								
							// }
						?>
				 	<!-- </select> -->
           <input name="responsavel" id="tags">
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