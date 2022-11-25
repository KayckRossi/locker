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
  <link rel="stylesheet" href="../../public/assets/css/modal-aluno.css">
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

            <button type="button" class="btn-cadastrar" data-toggle="modal" data-target="#cadastrar" data-whatever="@mdo">Cadastrar</button>

            <button type="button" class="btn-excluir" data-toggle="modal" data-target="#excluir" data-whatever="@mdo">Excluir</button>

            <button type="button" class="btn-atualizar" data-toggle="modal" data-target="#atualizar" data-whatever="@mdo">Atualizar</button>

            <button type="button" class="btn-pesquisar" data-toggle="modal" data-target="#pesquisar" data-whatever="@mdo">Pesquisar</button>

          </div>
        </div>

        <!-- Começo Modal-Cadastrar -->

        <div class="modal fade" id="cadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="Label-cadastrar">Cadastrar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <form>

                    <div class="form-group">
                      <label for="recebe-nome" class="col-form-label">Nome:</label>
                      <input type="text" class="form-control" id="recebe-name">
                    </div>

                    <div class="form-group">
                      <label for="recebe-sobrenome" class="col-form-label">Sobrenome:</label>
                      <input type="text" class="form-control" id="recebe-sobrenome">
                    </div>

                    <div class="form-group">
                      <label for="recebe-email" class="col-form-label">Email:</label>
                      <input type="text" class="form-control" id="recebe-email">
                    </div>

                    <div class="form-group">
                      <label for="recebe-rm" class="col-form-label">RM:</label>
                      <input type="text" class="form-control" id="recebe-rm">
                    </div>

                    <div class="form-group">
                      <label for="cadastro-cpf" class="col-form-label">CPF:</label>
                      <input type="number" class="form-control" id="cadastro-cpf">
                    </div>

                    <div class="form-group">
                      <label for="recebe-contato" class="col-form-label">Contato:</label>
                      <input type="number" class="form-control" id="recebe-contato">
                    </div>

                    <div class="form-group">
                      <label for="recebe-senha" class="col-form-label">Senha:</label>
                      <input type="number" class="form-control" id="recebe-senha">
                    </div>

                  </form>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Enviar</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Final Modal-Cadastrar -->

        <!-- Começo Modal-excluir -->

        <div class="modal fade" id="excluir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="Label-Excluir">Excluir</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>

                  <div class="form-group">
                    <label for="excluir-email" class="col-form-label">Email:</label>
                    <input type="text" class="form-control" id="excluir-email">
                  </div>

                  <div class="form-group">
                    <label for="excluir-cpf" class="col-form-label">CPF:</label>
                    <input type="number" class="form-control" id="excluir-cpf">
                  </div>

                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Enviar</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Final Modal-excluir -->


        <!-- Começo Modal Atualizar -->

        <div class="modal fade" id="atualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="Label-atualizar">Atualizar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <form>

                    <div class="form-group">
                      <label for="recebe-nome" class="col-form-label">Nome:</label>
                      <input type="text" class="form-control" id="recebe-name">
                    </div>

                    <div class="form-group">
                      <label for="recebe-sobrenome" class="col-form-label">Sobrenome:</label>
                      <input type="text" class="form-control" id="recebe-sobrenome">
                    </div>

                    <div class="form-group">
                      <label for="recebe-email" class="col-form-label">Email:</label>
                      <input type="text" class="form-control" id="recebe-email">
                    </div>

                    <div class="form-group">
                      <label for="recebe-rm" class="col-form-label">RM:</label>
                      <input type="text" class="form-control" id="recebe-rm">
                    </div>

                    <div class="form-group">
                      <label for="cadastro-cpf" class="col-form-label">CPF:</label>
                      <input type="number" class="form-control" id="cadastro-cpf">
                    </div>

                    <div class="form-group">
                      <label for="recebe-contato" class="col-form-label">Contato:</label>
                      <input type="number" class="form-control" id="recebe-contato">
                    </div>

                    <div class="form-group">
                      <label for="recebe-senha" class="col-form-label">Senha:</label>
                      <input type="number" class="form-control" id="recebe-senha">
                    </div>

                  </form>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Enviar</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Final Modal Atualizar -->

        <!-- Começo Modal-Pesquisar -->

        <div class="modal fade" id="pesquisar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="Label-pesquisar">Pesquisar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>

                  <div class="form-group">
                    <label for="recebe-email" class="col-form-label">Email:</label>
                    <input type="text" class="form-control" id="recebe-email">
                  </div>

                  <div class="form-group">
                    <label for="recebe-rm" class="col-form-label">RM:</label>
                    <input type="text" class="form-control" id="recebe-rm">
                  </div>

                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Enviar</button>
              </div>
            </div>
          </div>
        </div>

          <!-- Final Modal-Pesquisar -->

          
      </div>
    </main>
  </div>





  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

  <script src="../../public/assets/plugins/fontawesome-free-6.2.0-web/js/all.min.js"></script>
</body>

</html>