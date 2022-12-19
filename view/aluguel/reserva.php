<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/assets/plugins/bootstrap-4.5.3-dist/css/bootstrap.min.css">


    <link rel="stylesheet" href="public/assets/css/style.css">

    <style>
        .container {
            margin-top: 150px;
        }
        .container p {
            font-size: 2rem;
        }
    </style>
    <title>Reserva</title>

</head>

<body>
    <?php include "public/header.php" ?>

    <section class="login">
        <div class="login-header">
            <h1>Pedido</h1>
        </div>
        <div class="login-wrapper">
            <?php

            foreach ($msgs as $msg) {
                echo "<h2>{$msg}</h2>";
            }

            ?>


<!--             <button type="submit" name="confirmar">Voltar</button>
 -->        </div>
    </section>
             


    <?php include "public/footer-boostrap.php" ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</body>

</html>