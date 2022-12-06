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

                        <div class="btn-funcionario">

                            <button type="button" class="button-funcionario" data-toggle="modal" data-target="#cadastrar" data-whatever="@mdo">Cadastrar funcionario</button>

                        </div>
                    </div>
                </div>


                <!-- Começo Modal-Cadastrar -->

                <div class="modal fade" id="cadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="Label-cadastrar">Cadastrar</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Salvar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form action='/dash-cad-funcionario' method='POST'>

                                    <div class="form-group">
                                        <label for="recebe-nome" class="col-form-label">Nome:</label>
                                        <input type="text" name="nome" class="form-control" id="recebe-name">
                                    </div>

                                    <div class="form-group">
                                        <label for="recebe-privielgio" class="col-form-label">Privilegio:</label>
                                        <input type="text" name="sobrenome" class="form-control" id="recebe-privilegio">
                                    </div>

                                    <div class="form-group">
                                        <label for="recebe-email" class="col-form-label">Email:</label>
                                        <input type="email" name="email" class="form-control" id="recebe-email">
                                    </div>

                                    <div class="form-group">
                                        <label for="recebe-rm" class="col-form-label">RM:</label>
                                        <input type="number" name="rm" class="form-control" id="recebe-rm">
                                    </div>

                                    <div class="form-group">
                                        <label for="cadastro-cpf" class="col-form-label">CPF:</label>
                                        <input type="number" name="cpf" class="form-control" id="cadastro-cpf">
                                    </div>

                                    <div class="form-group">
                                        <label for="recebe-contato" class="col-form-label">Contato:</label>
                                        <input type="" name="telefone" class="form-control" id="recebe-contato">
                                    </div>

                                    <div class="form-group">
                                        <label for="recebe-senha" class="col-form-label">Senha:</label>
                                        <input type="number" name="senha" class="form-control" id="recebe-senha">
                                    </div>

                                    <div class="form-group">
                                        <label for="recebe-contato" class="col-form-label">Função:</label>
                                        <input type="" name="telefone" class="form-control" id="recebe-contato">
                                    </div>



                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-dismiss="modal">Salvar</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Final Modal-Cadastrar -->

                <!-- Começo tabela-alunos -->
                <div class="col-md-9 .col-md-push-3"></div>
                <div class="card" style="width: 100%; margin-top: 2rem; border-radius: 1rem;">
                    <div class="card-header" style="display:flex; justify-content: center; color: black; ">
                        <h4>Lista de Funcionarios</h4>
                    </div>
                    <table class="table">

                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">RM</th>
                                <th scope="col">Email</th>
                                <th scope="col">Contato</th>
                                <th scope="col">Função</th>
                                <th scope="col">Privilegio</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Excluir</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <th scope="row">Fabio</th>
                                <td>25511</td>
                                <td>admin@gmail.com</td>
                                <td>11-40028922</td>
                                <td>Administrador</td>
                                <td>----3----</td>
                                <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#alterar" data-whatever="@mdo">Alterar</button></td>
                                <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#apagar" data-whatever="@mdo">Apagar</button></td>
                            </tr>


                        </tbody>





                </div>
                <!-- Final tabela-alunos -->


                <!-- Começo Modal-Alterar -->

                <div class="modal fade" id="alterar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="Label-cadastrar">Atualizar</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Salvar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form action='/dash-cad-funcionario' method='POST'>

                                    <div class="form-group">
                                        <label for="recebe-nome" class="col-form-label">
                                            <h5>Nome:</h5>
                                        </label>
                                        <input type="text" name="nome" class="form-control" id="recebe-name">
                                    </div>

                                    <div class="form-group">
                                        <label for="recebe-privielgio" class="col-form-label">
                                            <h5>Privilegio:</h5>
                                        </label>
                                        <input type="text" name="sobrenome" class="form-control" id="recebe-privilegio">
                                    </div>

                                    <div class="form-group">
                                        <label for="recebe-email" class="col-form-label">
                                            <h5>Email:</h5>
                                        </label>
                                        <input type="email" name="email" class="form-control" id="recebe-email">
                                    </div>

                                    <div class="form-group">
                                        <label for="recebe-rm" class="col-form-label">
                                            <h5>RM:</h5>
                                        </label>
                                        <input type="number" name="rm" class="form-control" id="recebe-rm">
                                    </div>

                                    <div class="form-group">
                                        <label for="cadastro-cpf" class="col-form-label">
                                            <h5>CPF:</h5>
                                        </label>
                                        <input type="number" name="cpf" class="form-control" id="cadastro-cpf">
                                    </div>

                                    <div class="form-group">
                                        <label for="recebe-contato" class="col-form-label">
                                            <h5>Contato:</h5>
                                        </label>
                                        <input type="" name="telefone" class="form-control" id="recebe-contato">
                                    </div>

                                    <div class="form-group">
                                        <label for="recebe-senha" class="col-form-label">
                                            <h5>Senha:</h5>
                                        </label>
                                        <input type="number" name="senha" class="form-control" id="recebe-senha">
                                    </div>

                                    <div class="form-group">
                                        <label for="recebe-contato" class="col-form-label">
                                            <h5>Função:</h5>
                                        </label>
                                        <input type="" name="telefone" class="form-control" id="recebe-contato">
                                    </div>



                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-dismiss="modal">Salvar</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Final Modal-alterar -->

                <!-- Começo modal-apagar/funcionario -->

                <div class="modal fade" id="apagar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="Label-Excluir">Excluir</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Salvar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>

                                    <div class="form-group">
                                        <h5>Confirmar exclusão do funcionario do sistema?</h5>
                                    </div>

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-dismiss="modal">Salvar</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Final modal-apagar/funcionario -->


            </div>

        </main>
    </div>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <script src="../../public/assets/plugins/fontawesome-free-6.2.0-web/js/all.min.js"></script>
</body>

</html>