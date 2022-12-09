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

                        <div class="btn-curso">

                            <button type="button" class="button-curso" data-toggle="modal" data-target="#cadastrar" data-whatever="@mdo">Cadastrar curso</button>

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

                                <form action="/dashboard/curso-cadastrar" method="POST">

                                    <div class="form-group">
                                        <label for="recebe-codcurso" class="col-form-label">Codigo do Curso:</label>
                                        <input type="text" name="codigo_curso" class="form-control" id="recebe-codcurso" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="recebe-nomecurso" class="col-form-label">Nome do Curso:</label>
                                        <input type="text" name="nome" class="form-control" id="recebe-nomecurso" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="recebe-duração" class="col-form-label">Duração em Semestres:</label>
                                        <input type="number" name="duracao" class="form-control" id="recebe-duração" required>
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="Submit" class="btn btn-success" name="cadastrar">Cadastrar</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Final Modal-Cadastrar -->

                <!-- Começo tabela-cursos -->
                <div class="col-md-9 .col-md-push-3"></div>
                <div class="card" style="width: 100%; margin-top: 2rem; border-radius: 1rem;">
                    <div class="card-header" style="display:flex; justify-content: center; color: black; ">
                        <h4>Lista de cursos</h4>
                    </div>
                    <table class="table" id="myTable">

                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Codigo do Curso</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Duração em semestres</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Excluir</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php foreach ($cursos as $curso) { ?>

                                <?php echo "<tr>" ?>

                                <td><?php echo $curso->getId();?></td>
                                <td><?php echo $curso->getCodigoCurso();?></td>
                                <td><?php echo $curso->getNome();?></td>
                                <td><?php echo $curso->getDuracao();?></td>

                                <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#alterar<?php echo $curso->getId();?>">Alterar</button></td>
                                <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#apagar<?php echo $curso->getId();?>">Excluir</button></td>




                                    <!-- Começo Modal-Alterar -->

                

                <div class="modal fade" id="alterar<?php echo $curso->getId();?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="Label-cadastrar">Atualizar</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Salvar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <div class="modal-body">

                                <form action='/dashboard/curso-alterar' method='POST'>
                                    <input type="hidden" name="id" value="<?php echo $curso->getId();?>">
                                    <div class="form-group">
                                        <label for="recebe-codcurso" class="col-form-label">
                                            <h5>Codigo do Curso:</h5>
                                        </label>
                                        <input type="text" name="codigo_curso" class="form-control" id="recebe-codcurso" value="<?php echo $curso->getCodigoCurso();?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="recebe-nomecurso" class="col-form-label">
                                            <h5>Nome do Curso:</h5>
                                        </label>
                                        <input type="text" name="nome" class="form-control" id="recebe-nomecurso" value="<?php echo $curso->getNome();?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="recebe-duração" class="col-form-label">
                                            <h5>Duração em Semestres:</h5>
                                        </label>
                                        <input type="number" name="duracao" class="form-control" id="recebe-duração" value="<?php echo $curso->getDuracao();?>">
                                    </div>

                        </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success" name="alterar">Alterar</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>

                <!-- Final Modal-Cadastrar -->

                <!-- Começo modal-apagar/curso -->

                <div class="modal fade" id="apagar<?php echo $curso->getId();?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <h5>Confirmar exclusão do curso do sistema?  ID: <?php echo $curso->getId();?></h5>
                                    </div>

                                </form>
                            </div>
                            <div class="modal-footer">

                                <form action="/dashboard/curso-excluir" method="post">
                                        <input type="hidden" name="id" value="<?php echo $curso->getId();?>">
                                   <button type="submit" class="btn btn-success" name="excluir">Excluir</button>
                                </form>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Final modal-apagar/curso -->



                            <?php "</tr>";
                            }  ?>







                        </tbody>





                </div>
                <!-- Final tabela-cursos -->


                


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