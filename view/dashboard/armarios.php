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
    <link rel="stylesheet" href="../../public/assets/css/modal-armarios.css">
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
                                    <h5 class="card-title text-center ">Armarios Indiponiveis</h5>
                                    <p class="card-text text-center"></p>

                                </div>
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="card" style="width: 18rem; padding: 1rem; margin-top: 2rem; border-radius: 10px; ">
                                <div class="card-body ">
                                    <h5 class="card-title text-center ">Armarios alugados</h5>
                                    <p class="card-text text-center"></p>

                                </div>
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="card" style="width: 18rem; padding: 1rem; margin-top: 2rem; border-radius: 10px; ">
                                <div class="card-body ">
                                    <h5 class="card-title text-center ">Armarios Disponiveis</h5>
                                    <p class="card-text text-center"></p>

                                </div>
                            </div>
                        </div>

                        <div class="btn-modais">
                            <button type="button" class="cadastro-armario" data-toggle="modal" data-target="#cadastrar" data-whatever="@mdo">Adicionar</button>

                            <button type="button" class="armario-excluir" data-toggle="modal" data-target="#excluir" data-whatever="@mdo">Excluir</button>
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
                                        <form>
                                            <form>

                                                <div class="form-group">
                                                    <label for="recebe-seção" class="col-form-label">Seção:</label>
                                                    <input type="text" class="form-control" id="recebe-seção">
                                                </div>

                                                <div class="form-group">
                                                    <label for="quantidade-armarios" class="col-form-label">Quantidade:</label>
                                                    <select class="form-control" id="quantidade-armarios">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="recebe-proximidade" class="col-form-label">Proximidade:</label>
                                                    <select class="form-control" id="recebe-proximidade">
                                                        <option>Corredor Química</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="recebe-andar" class="col-form-label">Andar:</label>
                                                    <select class="form-control" id="recebe-proximidade">
                                                        <option>Inferior</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="cadastro-cpf" class="col-form-label">Situação:</label>
                                                    <select class="form-control" id="recebe-proximidade">
                                                        <option>Disponivel</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>

                                            </form>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-dismiss="modal">Salvar</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
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
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Salvar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>

                                        <div class="form-group">
                                                    <label for="recebe-seção" class="col-form-label">Seção:</label>
                                                    <input type="text" class="form-control" id="recebe-seção">
                                                </div>

                                                <div class="form-group">
                                                    <label for="quantidade-armarios" class="col-form-label">Quantidade:</label>
                                                    <select class="form-control" id="quantidade-armarios">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="recebe-proximidade" class="col-form-label">Proximidade:</label>
                                                    <select class="form-control" id="recebe-proximidade">
                                                        <option>Corredor Química</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="recebe-andar" class="col-form-label">Andar:</label>
                                                    <select class="form-control" id="recebe-proximidade">
                                                        <option>Inferior</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="cadastro-cpf" class="col-form-label">Situação:</label>
                                                    <select class="form-control" id="recebe-proximidade">
                                                        <option>Disponivel</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>

                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success">Salvar</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Final Modal-excluir -->

                        <!-- Começo modal-alterar -->

                        <div class="modal fade" id="alterar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="Label-cadastrar">Alterar</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Salvar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <form>

                                                <div class="form-group">
                                                    <label for="recebe-seção" class="col-form-label">Seção:</label>
                                                    <input type="text" class="form-control" id="recebe-seção">
                                                </div>

                                                <div class="form-group">
                                                    <label for="quantidade-armarios" class="col-form-label">Numero:</label>
                                                    <select class="form-control" id="quantidade-armarios">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="recebe-proximidade" class="col-form-label">Localização:</label>
                                                    <select class="form-control" id="recebe-proximidade">
                                                        <option>Corredor Química</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>


                                                <div class="form-group">
                                                    <label for="cadastro-cpf" class="col-form-label">Situação:</label>
                                                    <select class="form-control" id="recebe-proximidade">
                                                        <option>Disponivel</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="cadastro-cpf" class="col-form-label">Andar:</label>
                                                    <select class="form-control" id="recebe-proximidade">
                                                        <option>Inferior</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>

                                            </form>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-dismiss="modal">Salvar</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- final modal-alterar -->

                        <!-- Começo modal-apagar/tabela -->

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
                                                <h2>Confirmar exclusão do armário do sistema?</h2>
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
                        <!-- Final modal-apagar/tabela -->
                    </div>
                </div>



                <!-- Começo tabela-alunos -->
                <div class="col-md-9 .col-md-push-3"></div>
                <div class="card" style="width: 100%; margin-top: 2rem; border-radius: 1rem;">
                    <div class="card-header" style="display:flex; justify-content: center; color: black; ">
                        <h4>Lista de armários</h4>
                    </div>
                    <table class="table">

                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Seção+Número</th>
                                <th scope="col">Proximidade</th>
                                <th scope="col">Andar</th>
                                <th scope="col">Situação</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Excluir</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#alterar" data-whatever="@mdo">Alterar</button></td>
                                <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#apagar" data-whatever="@mdo">Apagar</button></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#alterar" data-whatever="@mdo">Alterar</button></td>
                                <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#apagar" data-whatever="@mdo">Apagar</button></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#alterar" data-whatever="@mdo">Alterar</button></td>
                                <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#apagar" data-whatever="@mdo">Apagar</button></td>
                            </tr>
                        </tbody>


                </div>
                <!-- Final tabela-alunos -->
        </main>
    </div>





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <script src="../../public/assets/plugins/fontawesome-free-6.2.0-web/js/all.min.js"></script>
</body>

</html>