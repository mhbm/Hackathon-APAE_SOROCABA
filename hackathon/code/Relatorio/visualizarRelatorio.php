<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--CSS-File-->
    <link rel="stylesheet" href="../../css/css.css">      
    <title>Hackathon - APAE Sorocaba</title>

  </head>
  <body>

    <div class="jumbotron">
    	<h1 class="text-center">
    		Relatório de Gastos - Visualizar
    	</h1>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-12 selectRelatorio">

              <div class="form-group"> <!-- Name field -->
                <form action="" method="POST">
                  
                  <label class="control-label " for="tipoSetor">Tipo de setor</label>
                  <select class="form-control" name="tipoSetor" onchange="this.form.submit()">
                    <?php
                       if ($_POST['tipoSetor'] == 'saude') {
                          echo '<option value="saude" selected="selected">Saúde</option>';
                          echo '<option value="assistencia">Assistência</option>';
                          echo '<option value="educacao">Educação</option>';
                          echo '<option value="evento">Evento</option>';
                          echo '<option value="todos">Todos</option>';
                       } else if ($_POST['tipoSetor'] == 'assistencia') {
                          echo '<option value="saude">Saúde</option>';
                          echo '<option value="assistencia" selected="selected">Assistência</option>';
                          echo '<option value="educacao">Educação</option>';
                          echo '<option value="evento">Evento</option>';
                          echo '<option value="todos">Todos</option>';
                       } else if ($_POST['tipoSetor'] == 'educacao') {
                          echo '<option value="saude">Saúde</option>';
                          echo '<option value="assistencia">Assistência</option>';
                          echo '<option value="educacao" selected="selected">Educação</option>';
                          echo '<option value="evento">Evento</option>';
                          echo '<option value="todos">Todos</option>';
                       } else if ($_POST['tipoSetor'] == 'evento') {
                          echo '<option value="saude">Saúde</option>';
                          echo '<option value="assistencia">Assistência</option>';
                          echo '<option value="educacao">Educação</option>';
                          echo '<option value="evento" selected="selected">Evento</option>';
                          echo '<option value="todos">Todos</option>';
                       } else if ($_POST['tipoSetor'] == 'todos') {
                          echo '<option value="saude">Saúde</option>';
                          echo '<option value="assistencia">Assistência</option>';
                          echo '<option value="educacao">Educação</option>';
                          echo '<option value="evento">Evento</option>';
                          echo '<option value="todos" selected="selected">Todos</option>';
                       } else {
                        echo '<option value="saude">Saúde</option>';
                          echo '<option value="assistencia">Assistência</option>';
                          echo '<option value="educacao">Educação</option>';
                          echo '<option value="evento">Evento</option>';
                          echo '<option value="todos">Todos</option>';
                       }
                    ?>
                    
                  </select>     

                </form>
              </div>
            </div>
          </div>
          
          <?php
              if (isset($_POST["tipoSetor"])) {
                $con=mysqli_connect("localhost","root","","hackathon_apae");

                // Check connection
                if (mysqli_connect_errno())
                {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                } else {
                    $tipoSetor;

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

                    $arrayMesDados = [];

                    for ($i=1; $i < 13 ; $i++) { 
                      # code...
                        if ($_POST["tipoSetor"] == 'todos') {
                            $query = "SELECT truncate(sum(valor),2) as total FROM gasto where data BETWEEN '2018-0". $i."-01' and '2018-0".$i."-31' ";
                        } else {
                            $query = "SELECT truncate(sum(valor),2) as total FROM gasto where data BETWEEN '2018-0". $i."-01' and '2018-0".$i."-31' and idSetor  = $tipoSetor ";
                        }
                        $result = $con->query($query);
                        while($dados = $result ->fetch_assoc() ) {
                              //print_r(utf8_encode($dados["total"]));
                              $arrayMesDados[] = $dados["total"];
                        }
                    }


                  //    print_r($arrayMesDados);
              }
            }
    
            
        ?>



          <!--
          <div class="row">
            <div class="col-md-12 selectRelatorio">
              <div class="form-group"> 
                <label class="control-label " for="mes">Mês</label>
                <select class="form-control" name="mes">
                  <option value="1">Janeiro</option>
                  <option value="2">Fevereiro</option>
                  <option value="3">Março</option>
                  <option value="4">Abril</option>
                  <option value="5">Maio</option>
                  <option value="6">Junho</option>
                  <option value="7">Julho</option>
                  <option value="8">Agosto</option>
                  <option value="9">Setembro</option>
                  <option value="10">Outubro</option>
                  <option value="11">Novembro</option>
                  <option value="12">Dezembro</option>
                  <option value="todos">Todos</option>
                </select>     
              </div>
            </div>
          </div>
          -->
        </div>
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- ChartJS org import -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>



        <?php 
          include '../../js/js.php';
        ?>

        
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- ChartJS org import -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

    <!-- JS.js file import  -->
    
    
    
  </body>
</html>