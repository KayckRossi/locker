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


    <?php
    if (!isset($erro)) { ?>
        <div class="container text-center" style="border-style:dashed; border-color:black;">

        <strong><p>Parabéns por alugar um armário em nosso sistema</p></strong><br>
        <strong><p>Se dirija a secretaria para realizar o pagamento</p></strong><br>
        <strong><p>Caso o pagamento não seja efetuado em até 48 horas</p></strong><br>
        <strong><p>O seu aluguel será negado e o armário ficará disponível novamente para escolha no menu</p></strong><br>

       </div>

    <?php }else {
        echo ($erro);
    } ?>
             


    <?php include "public/footer-boostrap.php" ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</body>

</html>