<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hackathon - APAE Sorocaba</title>
  </head>
  <body>

    <div class="jumbotron">
      <h1 class="text-center">
        Relatório de Gastos - Inserir
      </h1>
    </div>

    <div class="container">
          <?php
 $con=mysqli_connect("localhost","root","","hackathon_apae");

 // Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } else {
    /*
      print_r($con);
      $query = "select * from tiposetor";
      $result = $con->query($query);
      while($dados = $result ->fetch_assoc() ) {
        print_r(utf8_encode($dados["nome"]));
    echo "<br>";
    */
      //criando variaveis para colocar no bd

      //print_r($_POST);
      $tipoSetor;
      $data = $_POST["data"];
      $descricao = $_POST["descricao"];
      $valor = $_POST["valor"];

      //Checagem do tipo setor
      switch ($_POST["tipoSetor"]) {
        case 'educacao':
          # code...
          $tipoSetor = 4;
          break;

        case 'saude':
          # code...
          $tipoSetor = 2;
          break;

        case 'assistencia':
          # code...
          $tipoSetor = 3;
          break;
        
        default:
          # code...
          $tipoSetor = 5;
          break;
      }

      //Fazendo o sql para o insert
      $sqlInsert = 'insert into gasto(data, descricao, valor, idSetor) values ("' . $data . '", "' . $descricao . '", "' . $valor . '", "' . $tipoSetor . '")';

      if ($con->query($sqlInsert) === TRUE) {
        //Colocar imagem da APAE e colocar os botoes
        echo '<h2 class="text-center">Relatório de Gasto inserido com sucesso</h2>';
      } else {
        echo "Error: " . $sqlInsert . "<br>" . $con->error;
      }

      
  }


?>
      
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    

    
  </body>
</html>