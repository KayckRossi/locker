<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="public/assets/css/footer.css">
	<link rel="stylesheet" href="public/assets/css/logintest.css">
	<link rel="stylesheet" href="public/assets/css/style.css">

	<title>Login</title>
</head>

<body>
<?php include "public/header.php" ?>
	<div class="main-login">

		<div class="pt-esquerda-login">


			<img src="public\assets\img\cadeadoLocketec.png" class="left-login-img" alt="cadeado">

		</div>

                    <form action="/login" method="post">
                            <div class="pt-direita-login">

                                <div class="card-login">

                                    <h1>Login</h1>

                                    

                                    <div class="form">
                                        
                                        <label for="email">Email:</label>
                                        <input type="email" name="email" class="input required" oninput="emailValidate();" >
                                        <span class="span-required">Email invalido</span>
                                    </div>

                                    <div class="form">
                                        <label for="senha">Senha:</label>
                                        <input type="password" name="senha" class="input required" oninput="senhaValidate();" >
                                        <span class="span-required">Senha invalida</span>
                                    </div>
                                    
                                    <button type="submit" name="entrar" class="bnt-login">Entrar</a></button>
                                    <button class="bnt-login"><a href="/cadastro">Cadastre-se</a></button>
                                    <!-- <a href="#">esqueci minha senha</a> -->
                                </div>
                            </div>
                    </form>

		


	</div><!--main-login-->
	<?php include "public/footer-boostrap.php" ?>
</body>

<script>
        const form = document.getElementById('Forms');
        const campos = document.querySelectorAll('.required');
        const spans = document.querySelectorAll('.span-required');
		const  emailRegex =  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
     form.addEventListener('submit', (event) => {
        event.preventDefault();
       senhaValidate();
	 	emailValidate();
     }
     );
    function setError(index){
        campos[index].style.border='1px solid #e63636';
        spans[index].style.display = 'Block';
    }
    function RemoveError(index){
        campos[index].style.border='';
        spans[index].style.display = 'none';
    }
	function emailValidate(){
        if (emailRegex.test(campos[0].value))
        {
            RemoveError(0);
        }
        else
        {
           setError(0);
        }
    }
     function senhaValidate(){
         if (campos[1].value.length<8)
         {
             setError(1);
         }
         else
         {
             RemoveError(1);
         }
     }
     </script>
</html>