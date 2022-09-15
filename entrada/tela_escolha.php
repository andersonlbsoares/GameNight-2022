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

      <div class="table-section">
        <table>
          <tbody>
          <?php
            include "../processamento/conexao.php";

            $matricula = $_GET['mat'];
            $sql1 = "SELECT * FROM participantes WHERE matricula = '$matricula'";
            $sql2 = "SELECT * FROM participantes WHERE responsavel = '$matricula' && presente = '0'  ORDER BY matricula";

            $resultado1 = mysqli_query($conn, $sql1);	
            $resultado2 = mysqli_query($conn, $sql2);	

            while($linha1 = mysqli_fetch_array($resultado1)){
              echo "<tr style='margin-bottom: 10px;'>
              <td class='first-col'>
              <div class='number-div'>
              <span>0</span>
              </div>
              </td>";
              
              echo "<td class='second-col'>
              <div class='person-name-div'>
                <span>".$linha1['nome']."</span>
                </div>
                </td>
                </tr>";
              }
            while($linha2 = mysqli_fetch_array($resultado2)){
              echo "<tr style='margin-bottom: 10px;'>
              <td class='first-col'>
              <div class='number-div'>
              <span>".$linha2['matricula']."</span>
              </div>
              </td>";
              
              echo "<td class='second-col'>
              <div class='person-name-div'>
                <span>".$linha2['nome']."</span>
                </div>
                </td>
                </tr>";
            }
          ?>
          </tbody>
        </table>
        <form action="../processamento/entrada/execucao.php" method="POST" class="responsible-form">
          <label for="person-number">DIGITE AQUI O NÚMERO REFERENTE A PESSOA</label>
          <img src="../assets/arrow-right.svg" alt="Seta para direita">
          <input type="text" name="selec" autofocus id="number">
          <input type="hidden" name="mat" value="<?php echo $matricula;?> ">
          <?php 
            if(isset($_GET['erro'])){
              //alert
              echo "<script>alert('Participante indisponível!');</script>";
            }
          ?>
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