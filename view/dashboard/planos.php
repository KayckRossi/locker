<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/assets/css/all.css">

        <!-- CDN DataTables -->
        <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

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

                        <div class="btn-plano">

                            <button type="button" class="button-plano" data-toggle="modal" data-target="#cadastrar" data-whatever="@mdo">Cadastrar plano</button>

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

                                <form action="/dashboard/plano-cadastrar" method="POST">

                                    <div class="form-group">
                                        <label for="recebe-tituplano" class="col-form-label">Titulo do Plano</label>
                                        <input type="text" name="nome_plano" class="form-control" id="recebe-tituplano">
                                    </div>

                                    <div class="form-group">
                                        <label for="recebe-valorplano" class="col-form-label">Valor do plano:</label>
                                        <input type="number" name="valor" class="form-control" id="recebe-valorplano">
                                    </div>

                                    <div class="form-group">
                                        <label for="recebe-duracao" class="col-form-label">Duracao em meses:</label>
                                        <input type="number" name="duracao" class="form-control" id="recebe-duracao">
                                    </div>


                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="cadastrar" class="btn btn-success">Cadastrar</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Final Modal-Cadastrar -->

                <!-- Começo tabela-planos -->
                <div class="col-md-9 .col-md-push-3"></div>
                <div class="card" style="width: 100%; margin-top: 2rem; border-radius: 1rem;">
                    <div class="card-header" style="display:flex; justify-content: center; color: black; ">
                        <h4>Planos de alugueis</h4>
                    </div>
                    <table class="table" id="myTable">

                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Plano</th>
                                <th scope="col">Valor</th>
                                <th scope="col">Status</th>
                                <th scope="col">Meses</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Excluir</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($planos as $plano) { ?>
                                <?php echo "<tr>" ?>

                                <td><?php echo $plano->getId(); ?></td>
                                <td><?php echo $plano->getPlano(); ?></td>
                                <td><?php echo $plano->getValor(); ?></td>
                                <td><?php echo $plano->getStatus(); ?></td>
                                <td><?php echo $plano->getDuracao(); ?></td>

                                <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#alterar<?php echo $plano->getId(); ?>">Alterar</button></td>
                                <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#apagar<?php echo $plano->getId(); ?>">Excluir</button></td>






                                <!-- Começo Modal-Alterar -->

                                <div class="modal fade" id="alterar<?php echo $plano->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="Label-cadastrar">Atualizar</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Salvar">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <form action="/dashboard/plano-alterar" method="POST">
                                                    <input type="hidden" name="id" value="<?php echo $plano->getId(); ?>">
                                                    <div class="form-group">
                                                        <label for="recebe-tituplano" class="col-form-label">
                                                            <h5>Titulo do Plano</h5>
                                                        </label>
                                                        <input type="text" name="nome_plano" class="form-control" id="recebe-tituplano" value="<?php echo $plano->getPlano(); ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="recebe-valorplano" class="col-form-label">
                                                            <h5>Valor do plano:</h5>
                                                        </label>
                                                        <input type="number" name="valor" class="form-control" id="recebe-valorplano" value="<?php echo $plano->getValor(); ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="recebe-duracao" class="col-form-label">
                                                            <h5>Duracao em meses</h5>
                                                        </label>
                                                        <input type="number" name="duracao" class="form-control" id="recebe-duracao" value="<?php echo $plano->getDuracao(); ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="recebe-status" class="col-form-label">
                                                            <h5>Status 1 ou 0</h5>
                                                        </label>
                                                        <input type="number" min="0" max="1" name="status" class="form-control" id="recebe-status" value="<?php echo $plano->getStatus(); ?>">
                                                    </div>


                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" name="alterar" class="btn btn-success">Salvar</button>
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                                    </div>
                                                 </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- Final Modal-alterar -->

                                <!-- Começo modal-apagar/plano -->

                                <div class="modal fade" id="apagar<?php echo $plano->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header" style="text-align:center ;">
                                                <h5 class="modal-title" id="Label-Excluir">Excluir Plano ID: <?php echo $plano->getId(); ?></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Salvar">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">


                                                <div class="form-group">
                                                    <h5>Confirmar exclusão do plano do sistema?</h5>
                                                </div>


                                            </div>
                                            <div class="modal-footer">

                                                <form action="/dashboard/plano-excluir" method="post">
                                                    <input type="hidden" name="id" value="<?php echo $plano->getId(); ?>">
                                                    <button type="submit" class="btn btn-success" name="excluir">Excluir</button>
                                                </form>

                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Final modal-apagar/plano -->


                            <?php "</tr>";
                            }  ?>





                        </tbody>





                </div>
                <!-- Final tabela-planos -->





            </div>

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