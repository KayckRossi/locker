<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="/public/assets/css/contato.css">
    <link rel="stylesheet" href="/public/assets/css/footer.css">
    

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="/../../public/assets/css/style.css">

    <title>Fale conosco</title>
</head>
<body>
    
<?php include "public/header.php" ?>


<div class="container">
        <div class=" text-center mt-5 ">
            <h1>FALE CONOSCO</h1>               
        </div>

    
    <div class="row ">
      <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
       
            <div class = "container">
                             <form id="contact-form" role="form">

            

            <div class="controls">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_name">Primeiro nome *</label>
                            <input id="form_name" type="text" name="nome" class="form-control" placeholder="Digite o seu primeiro nome" required="required" data-error="Nome é Obrigatório.">
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_lastname">Sobrenome *</label>
                            <input id="form_lastname" type="text" name="sobrenome" class="form-control" placeholder="Digite seu sobrenome" required="required" data-error="Sobrenome é Obrigatório.">
                                                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email">Email *</label>
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Digite seu email" required="required" data-error="Email válido é Obrigatório.">
                            
                        </div>
                    </div>
                 
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_message">Messagem *</label>
                            <textarea id="form_message" name="messagem" class="form-control" placeholder="Escreva sua mensagem." rows="4" required="required" data-error="Please, leave us a message."></textarea
                                >
                            </div>

                        </div>


                    <div class="col-md-12">
                        
                        <button type="submit" class="btn btn-success btn-send  pt-2 btn-block">Enviar mensagem</button>
                    
                </div>
          
                </div>


        </div>
         </form>
        </div>
            </div>


    </div>
        <!-- /.8 -->

    </div>
    <!-- /.row-->

</div>
</div>

<?php include "public/footer-boostrap.php" ?>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>