<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../public/assets/css/all.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="../../public/assets/plugins/bootstrap-4.5.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../public/assets/plugins/fontawesome-free-6.2.0-web/css/all.min.css">
  <title>LockEtec</title>
</head>

<body>
  <div class="flex-dashboard">
    <!--Começo do menu principa da esquerda -->
    <?php include "sidebarmenu.php" ?>
    <!--Final do  menu  principa da esquerda -->


    <!-- Main = Conteudo principal da pagina -->
    <main>

      <!-- inicio do Escopo da pagina -->
      <?php include "headerdash.php" ?>
      <!-- final-->



      <div class="main-content">
        <div class="container">
          <div class="row">
            <div class="col-sm">
              <div class="card" style="width: 18rem; padding: 1rem; margin-top: 2rem; border-radius: 10px; ">
                <div class="card-body ">
                  <h5 class="card-title text-center ">Alugueis ativos</h5>
                  <p class="card-text text-center"></p>

                </div>
              </div>
            </div>

            <div class="col-sm">
              <div class="card" style="width: 18rem; padding: 1rem;  margin-top: 2rem; border-radius: 10px;">
                <div class="card-body">
                  <h5 class="card-title text-center">Total de alugueis</h5>
                  <p class="card-text text-center"></p>

                </div>
              </div>
            </div>

            <div class="col-sm">
              <div class="card" style="width: 18rem; padding: 1rem;  margin-top: 2rem; border-radius: 10px;">
                <div class="card-body">
                  <h5 class="card-title text-center">Alugueis Pendentes</h5>
                  <p class="card-text text-center"></p>

                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-md-9 .col-md-push-3"></div>
        <div class="card" style="width: 100%; margin-top: 2rem; border-radius: 1rem;">
          <div class="card-header" style="display:flex; justify-content: center; color: black; ">
            <h4>Lista de Alugueis</h4>
          </div>


          <table class="table">

            <thead class="thead-dark">
              <tr>
                <th scope="col">ID Aluguel</th>
                <th scope="col">Data</th>
                <th scope="col">Situação</th>
                <th scope="col">ID Aluno</th>
                <th scope="col">ID Armario</th>
                <th scope="col">ID Plano</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>2022-11-09 14:40:50</td>
                <td>Ativado</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
                
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>2022-11-05 16:10:50</td>
                <td>Ativado</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
              </tr>


            </tbody>

          </table>

        </div>






      </div>
    </main>
  </div>




  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

  <script src="../../public/assets/plugins/fontawesome-free-6.2.0-web/js/all.min.js"></script>
</body>

</html>