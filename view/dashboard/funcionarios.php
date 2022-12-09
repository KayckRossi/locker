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

                                <form action='/dashboard/cadastrar-funcionario' method='POST'>

                                    <div class="form-group">
                                        <label for="recebe-name" class="col-form-label">Nome:</label>
                                        <input type="text" name="nome" class="form-control" id="recebe-name" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="recebe-sobrenome" class="col-form-label">Sobrenome:</label>
                                        <input type="text" name="sobrenome" class="form-control" id="recebe-sobrenome" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="recebe-contato" class="col-form-label">Contato:</label>
                                        <input type="text" name="telefone" class="form-control" id="recebe-contato" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="recebe-email" class="col-form-label">Email:</label>
                                        <input type="email" name="email" class="form-control" id="recebe-email" required>
                                    </div>
                                    

                                    <div class="form-group">
                                        <label for="cadastro-cpf" class="col-form-label">CPF:</label>
                                        <input type="text" name="cpf" class="form-control" id="cadastro-cpf" required>
                                    </div>
                                    

                                    <div class="form-group">
                                        <label for="recebe-senha" class="col-form-label">Senha:</label>
                                        <input type="password" name="senha" class="form-control" id="recebe-senha" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="recebe-função" class="col-form-label">Função:</label>
                                        <input type="text" name="funcao" class="form-control" id="recebe-função" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="recebe-privilegio" class="col-form-label">Privilégio:</label>
                                        <input type="text" name="privilegio" class="form-control" id="recebe-privilegio">
                                    </div>                                  



                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success" name="cadastrar">Cadastrar</button>
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
                    <table class="table" id="TableFunc">

                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Sobrenome</th>
                                <th scope="col">CPF</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Função</th>
                                <th scope="col">Previlégio</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Excluir</th>
                            </tr>
                        </thead>

                        <tbody>

                            
                            

                                <?php foreach ($funcionarios as $funcionario) { ?>

                                    <?php echo "<tr>" ?>

                                    <td> <?php echo $funcionario->getNome(); ?> </td>
                                    <td> <?php echo $funcionario->getSobrenome(); ?> </td>
                                    <td> <?php echo $funcionario->getCpf(); ?> </td>
                                    <td> <?php echo $funcionario->getEmail(); ?> </td>
                                    <td> <?php echo $funcionario->getTelefone(); ?> </td>
                                    <td> <?php echo $funcionario->getFuncao(); ?> </td>
                                    <td> <?php echo $funcionario->getPrivilegio(); ?> </td>
                                  
                                    <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#alterarTabela<?php echo $funcionario->getId(); ?>">Alterar</button></td>
                                    <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#ExcluirTabela<?php echo $funcionario->getId(); ?>">Apagar</button></td>



                                                <!-- Começo Modal-Alterar -->

                                                                <div class="modal fade" id="alterarTabela<?php echo $funcionario->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="Label-Atualizar">Atualizar</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Salvar">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">

                                                                                <form action="/dashboard/alterar-funcionario" method='POST'>
                                                                                         
                                                                                    <input type="hidden" name="id" value="<?php echo $funcionario->getId(); ?>">
                                                                                    
                                                                                    <div class="form-group">
                                                                                        <label for="altera-nome" class="col-form-label">Nome:</label>                                                                                    
                                                                                        <input type="text" name="nome" class="form-control" id="altera-nome" value="<?php echo $funcionario->getNome(); ?>">
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label for="altera-sobrenome" class="col-form-label">Sobrenome:</label>                                                                                        
                                                                                        <input type="text" name="sobrenome" class="form-control" id="altera-sobrenome" value="<?php echo $funcionario->getSobrenome(); ?>">
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label for="altera-contato" class="col-form-label">Contato:</label>
                                                                                        <input type="text" name="telefone" class="form-control" id="altera-contato" value="<?php echo $funcionario->getTelefone(); ?>">
                                                                                    </div>


                                                                                    <div class="form-group">
                                                                                        <label for="altera-email" class="col-form-label">Email:</label>
                                                                                        <input type="email" name="email" class="form-control" id="altera-email" value="<?php echo $funcionario->getEmail(); ?>">
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label for="altera-cpf" class="col-form-label">CPF:</label>
                                                                                        <input type="text" name="cpf" class="form-control" id="altera-cpf" value="<?php echo $funcionario->getCpf(); ?>">
                                                                                    </div>
                                                    
                                                                                
                                                                                    <div class="form-group">
                                                                                        <label for="altera-funcao" class="col-form-label">Função:</label>
                                                                                        <input type="text" name="funcao" class="form-control" id="altera-funcao" value="<?php echo $funcionario->getFuncao(); ?>">
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label for="altera-privilegio" class="col-form-label">Privilegio</label>
                                                                                        <input type="text" name="privilegio" class="form-control" id="altera-privilegio" value="<?php echo $funcionario->getPrivilegio(); ?>">
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

                                                                <!-- Final Modal-alterar -->

                                                                <!-- Começo modal-apagar/funcionario -->

                                                                <div class="modal fade" id="ExcluirTabela<?php echo $funcionario->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="Label-Excluir">Excluir</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Salvar">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">

                                                                                
                                                                                
                                                                                
                                                                                    <div class="form-group">

                                                                                        <h5>Confirmar exclusão do funcionario do sistema?</h5>
                                                                                    </div>

                                                                               
                                                                            </div>
                                                                            <div class="modal-footer">

                                                                            <form action="/dashboard/excluir-funcionario" method="post">
                                                                                <input type="hidden" name="id" value="<?php echo $funcionario->getId(); ?>">
                                                                                <button type="submit" class="btn btn-success" name="excluir">Excluir</button>
                                                                            </form>    
                                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Final modal-apagar/funcionario -->




                                    <?php "</tr>";
                                    }  ?>
                                            
                            


                        </tbody>





                </div>
                <!-- Final tabela-alunos -->


               


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
            $('#TableFunc').DataTable();
        });
    </script>
</body>

</html>