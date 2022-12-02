<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/assets/css/style.css">
    <link rel="stylesheet" href="../../public/assets/css/all.css">

    <!-- CDN DataTables -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

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
            <?php include 'headerdash.php'; ?>
            <!-- final-->
            <div class="main-content">
                <div class="container">

                    <div class="row">

                        <div class="col-sm">
                            <div class="card" style="width: 18rem; padding: 1rem; margin-top: 2rem; border-radius: 10px; ">
                                <div class="card-body ">
                                    <h5 class="card-title text-center">Armarios Disponiveis</h5>
                                    <p class="card-text text-center"><?php print_r($counterDisp->countDisp()); ?></p>

                                </div>
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="card" style="width: 18rem; padding: 1rem; margin-top: 2rem; border-radius: 10px; ">
                                <div class="card-body ">
                                    <h5 class="card-title text-center ">Armarios alugados</h5>
                                    <h5 class="card-text text-center"><?php print_r($counterAlug->countAlug()); ?></h5>

                                </div>
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="card" style="width: 18rem; padding: 1rem; margin-top: 2rem; border-radius: 10px; ">
                                <div class="card-body ">
                                    <h5 class="card-title text-center">Armarios Indisponiveis</h5>
                                    <h5 class="card-text text-center"><?php print_r($counterIndisp->countIndisp()); ?></h5>

                                </div>
                            </div>
                        </div>

                        <div class="btn-modais">
                            <button type="button" class="cadastro-armario" data-toggle="modal" data-target="#cadastrar">Adicionar</button>

                            <button type="button" class="armario-excluir" data-toggle="modal" data-target="#excluir">Excluir</button>
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
                                                min="1" max="20" value="20"
                                                <div class="form-group">
                                                    <label for="quantidade-armarios" class="col-form-label">Quantidade:</label>
                                                    <input type="text" class="form-control" id="quantidade-armarios" >
                                                </div>

                                                <div class="form-group">
                                                    <label for="recebe-proximidade" class="col-form-label">Local:</label>
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
                                                    <select class="form-control" id="recebe-andar">
                                                        <option>Inferior</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="situacao-armario" class="col-form-label">Situação:</label>
                                                    <select class="form-control" id="situacao-armario">
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


                    </div>
                </div>



                <!-- Começo tabela-armarios -->
                <div class="col-md-9 .col-md-push-3"></div>
                <div class="card" style="width: 100%; margin-top: 2rem; border-radius: 1rem;">
                    <div class="card-header" style="display:flex; justify-content: center; color: black; ">
                        <h4>Lista de armários</h4>
                    </div>
                    <table class="table" id="myTable">

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

                            <?php if (isset($armarios)) {  ?>

                                <?php foreach ($armarios as $armario) { ?>

                                    <?php echo "<tr>" ?>

                                    <td> <?php echo $armario->getSecao(); ?><?php echo $armario->getNumero(); ?> </td>
                                    <td> <?php echo $armario->getLocal(); ?> </td>
                                    <td> <?php echo $armario->getAndar(); ?> </td>
                                    <td> <?php echo $armario->getSituacao(); ?></td>

                                    <td>
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#AlterarTabela<?php echo $armario->getId(); ?>">Alterar</button>
                                    </td>
                                    <td>

                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#ApagarTabela<?php echo $armario->getId(); ?>">Excluir</button>
                                    </td>

                                    <!-- Começo modal-apagar/tabela -->

                                    <div class="modal fade" id="ApagarTabela<?php echo $armario->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                            <h2>Confirmar exclusão do armário do sistema? ID : <?php echo $armario->getId(); ?></h2>

                                                        </div>

                                                    </form>
                                                </div>
                                                <div class="modal-footer">

                                                    <form action='/adm/dashboard/excluir-armario' method='POST'>
                                                        <input type='hidden' name='id' value='<?php echo $armario->getId(); ?>'>
                                                        <button type="submit" class="btn btn-success" name="excluir">Confirmar</button>
                                                    </form>


                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Final modal-apagar/tabela -->


                                    <!-- Começo modal-alterar -->

                                    <div class="modal fade" id="AlterarTabela<?php echo $armario->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="Label-cadastrar">Alterar ID : <?php echo $armario->getId();?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Salvar">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

                                                    <form action="/dashboard/alterar-armario" method="post">

                                                        <input type='hidden' name='id' value='<?php echo $armario->getId(); ?>'>

                                                        <div class="form-group">
                                                            <label for="recebe-seção<?php echo $armario->getId();?>" class="col-form-label">Seção:</label>
                                                            <input type="text" name="secao" value='<?php echo $armario->getSecao(); ?>' class="form-control" id="recebe-seção<?php echo $armario->getId();?>">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="quantidade-armarios<?php echo $armario->getId();?>" class="col-form-label">Numero:</label>
                                                            <input type="text" name="numero" value='<?php echo $armario->getNumero(); ?>' class="form-control" id="recebe-seção<?php echo $armario->getId();?>">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="recebe-proximidade<?php echo $armario->getId();?>" class="col-form-label">Localização:</label>
                                                            <input type="text" name="local" value='<?php echo $armario->getLocal(); ?>' class="form-control" id="recebe-proximidade<?php echo $armario->getId();?>">
                                                        </div>


                                                        <div class="form-group">
                                                            <label for="situacao-armario<?php echo $armario->getId();?>" class="col-form-label">Situação:</label>
                                                            <input type="text" name="situacao" value='<?php echo $armario->getSituacao(); ?>' class="form-control" id="situacao-armario<?php echo $armario->getId();?>">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="andar-armario<?php echo $armario->getId();?>" class="col-form-label">Andar:</label>
                                                            <input type="text" name="andar" value='<?php echo $armario->getAndar(); ?>' class="form-control" id="andar-armario<?php echo $armario->getId();?>">
                                                        </div>



                                                    </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-success" name="alterar">Salvar</button>
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                                            </div>
                                                    </form>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- final modal-alterar -->

                                <?php "</tr>";
                                }  ?>

                            <?php   } ?>

                        </tbody>
                    </table>

                </div>
                <!-- Final tabela-alunos -->
        </main>
    </div>





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <script src="../../public/assets/plugins/fontawesome-free-6.2.0-web/js/all.min.js"></script>


    <!-- cdn dataTables -->
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <!-- JS do DataTables -->
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>