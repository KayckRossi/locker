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
                  <p class="card-text text-center"><?php print_r($aluguelAtivo->countActive()); ?></p>

                </div>
              </div>
            </div>

            <div class="col-sm">
              <div class="card" style="width: 18rem; padding: 1rem;  margin-top: 2rem; border-radius: 10px;">
                <div class="card-body">
                  <h5 class="card-title text-center">Usuarios ativos</h5>
                  <p class="card-text text-center"><?php print_r($alunoAtivo->countActive()); ?></p>

                </div>
              </div>
            </div>

            <div class="col-sm">
              <div class="card" style="width: 18rem; padding: 1rem;  margin-top: 2rem; border-radius: 10px;">
                <div class="card-body">
                  <h5 class="card-title text-center">Alugueis Pendentes</h5>
                  <p class="card-text text-center"><?php print_r($aluguelReservado->aluguelPendente()); ?></p>

                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-md-9 .col-md-push-3"></div>
        <div class="card" style="width: 100%; margin-top: 2rem; border-radius: 1rem;">
          <div class="card-header" style="display:flex; justify-content: center; color: black; ">
            <h4>Pendencia de solicitações de alugueis</h4>
          </div>


          <table class="table">

            <thead class="thead-dark">
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">RM</th>
                <th scope="col">Armario</th>
                <th scope="col">Situação</th>
                <th scope="col">Plano</th>
                <th scope="col">Valor</th>
                <th scope="col">Confirmar</th>
                <th scope="col">Excluir</th>

              </tr>
            </thead>

            <tbody>


              <?php foreach ($counterRent as $countR) { ?>

                <?php echo "<tr>" ?>
                <td> <?php echo $countR[0]->getNome(); ?> </td>
                <td> <?php echo $countR[0]->getRm() ?> </td>
                <td> <?php echo $countR[1]->getSecao() ?><?php echo $countR[1]->getNumero() ?> </td>
                <td> <?php echo $countR[2]->getSituacao() ?> </td>
                <td> <?php echo $countR[3]->getPlano() ?> </td>
                <td> <?php echo $countR[3]->getValor() ?> </td>

                <td>
                  <form action="/aceitar-aluguel" method='POST'>
                    <input type='hidden' name='id' value='<?php echo $countR[2]->getId() ?>'>
                    <input type='hidden' name='idArmario' value='<?php echo $countR[1]->getId() ?>'>

                    <button type="submit" class="btn btn-success btn-sm" name="confirmar">Confirmar</button>
                  </form>
                </td>

                <td>
                  <form action="/negar-aluguel" method='POST'>
                    <input type='hidden' name='id' value='<?php echo $countR[2]->getId() ?>'>
                    <input type='hidden' name='idArmario' value='<?php echo $countR[1]->getId() ?>'>

                    <button type="submit" class="btn btn-danger btn-sm" name="negar">Negar</button>
                  </form>
                </td>




              <?php "</tr>";
              }  ?>

            </tbody>

          </table>

        </div>



        <!-- <div class="col-md-9 .col-md-push-3"></div>
        <div class="card" style="width: 100%; margin-top: 2rem; border-radius: 1rem; ">
          <div class="card-header" style="display:flex; justify-content: center; color: black; ">
            <h4> Status totais de ARMARIOS </h4>
          </div>
          <ul class="list-group list-group-flush" style="color:black ;">
            <li class="list-group-item">Total de armarios

              <div class="card-tabela">
                
                  This is some text within a card body.
          
              </div>


            </li>
            <li class="list-group-item">Armarios disponiveis <?php print_r($counterDisp->countDisp()); ?></li>
            <li class="list-group-item">Armarios Alugados <?php print_r($counterAlug->countAlug()); ?></li>
            <li class="list-group-item">Armarios Indisponiveis <?php print_r($counterIndisp->countIndisp()); ?></li>
          </ul>
        </div>
      </div> -->


        <div class="col-md-9 .col-md-push-3"></div>
        <div class="card" style="width: 100%; margin-top: 2rem; border-radius: 1rem;">
          <div class="card-header" style="display:flex; justify-content: center; color: black; ">
            <h4>Status totais de ARMARIOS</h4>
          </div>
          <table class="table">
            

            <tbody>
              <tr>
            
                <td>Total armários <button type="button" class="btn btn-info" id="btn-tabela"><?php print_r($counterDisp->count()); ?></button></td>

              </tr>
              <tr>
             
                <td>Armarios disponiveis <button type="button" class="btn btn-success" id="btn-tabela"><?php print_r($counterDisp->countDisp()); ?></button></td>
             
              </tr>
              <tr>
              
                <td>Armarios Indisponiveis <button type="button" class="btn btn-warning" id="btn-tabela"><?php print_r($counterIndisp->countIndisp()); ?></button></td>
               
              </tr>

              <tr>
              
                <td>Armarios Alugados <button type="button" class="btn btn-danger" id="btn-tabela"><?php print_r($counterIndisp->countIndisp()); ?></button></td>
               
              </tr>
            </tbody>


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