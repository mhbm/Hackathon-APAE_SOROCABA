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
                <label class="control-label " for="tipoSetor">Tipo de setor</label>
                <select class="form-control" name="tipoSetor">
                  <option value="saude">Saúde</option>
                  <option value="assistencia">Assistência</option>
                  <option value="educacao">Educação</option>
                  <option value="evento">Evento</option>
                  <option value="todos">Todos</option>
                </select>     
              </div>
            </div>
          </div>
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
        <div class="col-md-8">
          <canvas id="myChart"></canvas>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- ChartJS org import -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

    <!-- JS.js file import -->
    <script type="text/javascript" src="../../js/js.js"></script>
  </body>
</html>