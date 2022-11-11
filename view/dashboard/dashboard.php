<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/assets/css/all.css">
    <link rel="stylesheet" href="../../public/assets/plugins/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/assets/plugins/fontawesome-free-6.2.0-web/css/all.min.css">
    <title>LockEtec</title>
</head>
<body>
    <div class="flex-dashboard">
       <!--Começo do menu principa da esquerda -->
       <?php include "sidebarmenu.php"?>
        <!--Final do  menu  principa da esquerda -->


        <!-- Main = Conteudo principal da pagina --> 
        <main>

          <!-- inicio do Escopo da pagina -->
          <?php include "headerdash.php"?>
            <!-- final--> 

          <div class="main-content">
            <div class="container">
                <div class="row">
                  <div class="col-sm">
                    <div class="card" style="width: 18rem; padding: 1rem; margin-top: 2rem; border-radius: 10px; ">
                        <div class="card-body ">
                          <h5 class="card-title text-center ">Alugueis ativos</h5>
                          <p class="card-text text-center">teste</p>
                         
                        </div>
                      </div>
                  </div>

                  <div class="col-sm">
                    <div class="card" style="width: 18rem; padding: 1rem;  margin-top: 2rem; border-radius: 10px;">
                        <div class="card-body">
                          <h5 class="card-title text-center">Usuarios ativos</h5>
                          <p class="card-text text-center"><?php  print_r($alunoAtivo->countActive()); ?></p>
                          
                        </div>
                      </div>
                  </div>

                  <div class="col-sm">
                    <div class="card" style="width: 18rem; padding: 1rem;  margin-top: 2rem; border-radius: 10px;">
                        <div class="card-body">
                          <h5 class="card-title text-center">Alugueis Pendentes</h5>
                          <p class="card-text text-center">teste</p>
                          
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
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Guilherme Kishida | RM : 00001
                      <button type="submit" class="button-aprovado"><i class="fa-solid fa-check"></i></button>
                      <button type="submit" class="button-negado"><i class="fa-solid fa-xmark"></i></button>
                  </li>
                  <li class="list-group-item">Erick Guimarães | RM : 00002
                      <button type="submit" class="button-aprovado"><i class="fa-solid fa-check"></i></button>
                      <button type="submit" class="button-negado"><i class="fa-solid fa-xmark"></i></button>
                  </li>
                  <li class="list-group-item">Ana Luiza | RM :  00004
                      <button type="submit" class="button-aprovado"><i class="fa-solid fa-check"></i></button>
                      <button type="submit" class="button-negado"><i class="fa-solid fa-xmark"></i></button>
                  </li>
                  <li class="list-group-item">Kayk Oliveira | Rm : 00005
                      <button type="submit" class="button-aprovado"><i class="fa-solid fa-check"></i></button>
                      <button type="submit" class="button-negado"><i class="fa-solid fa-xmark"></i></button>
                  </li>
                  <li class="list-group-item">Erik Sech  | RM : 00006
                      <button type="submit" class="button-aprovado"><i class="fa-solid fa-check"></i></button>
                      <button type="submit" class="button-negado"><i class="fa-solid fa-xmark"></i></button>
                  </li>
                </ul>
              </div>

                 <div class="col-md-9 .col-md-push-3"></div>
              <div class="card" style="width: 100%; margin-top: 2rem; border-radius: 1rem; ">
                <div class="card-header" style="display:flex; justify-content: center; color: black; ">
                 <h4> Status totais de armarios </h4>
                </div>
                <ul class="list-group list-group-flush" style="color:black ;">
                  <li class="list-group-item">Total de armarios <?php  print_r($counter->count()); ?></li>
                  <li class="list-group-item">Armarios disponiveis <?php  print_r($counterDisp->countDisp()); ?></li>
                  <li class="list-group-item">Armarios Alugados <?php  print_r($counterAlug->countAlug()); ?></li>
                  <li class="list-group-item">Armarios Indisponiveis <?php  print_r($counterIndisp->countIndisp()); ?></li>
                </ul>
              </div>
            </div>

            
          </div>
        </main>
      </div>




  <script src="../../public/assets/plugins/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
  <script src="../../public/assets/plugins/fontawesome-free-6.2.0-web/js/all.min.js"></script>
</body>
</html>
