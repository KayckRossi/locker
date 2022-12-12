<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>

    <link rel="stylesheet" href="public/assets/css/style.css">
</head>
<body>
    <?php include "public/header.php" ?>

    <section class="login">
        <div class="login-header">
            <h1>Meu cadastro</h1>
        </div>
        <div class="login-wrapper">
            <form action="/alterar" method="POST">
                <fieldset>
                    <legend>Meu cadastro</legend>

                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" value="<?php echo $aluno->getNome() ?>" required>

                    <label for="sobrenome">Sobrenome</label>
                    <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $aluno->getSobrenome() ?>" required>

                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" id="telefone" value="<?php echo $aluno->getTelefone() ?>" required>

                    <label for="rm">RM</label>
                    <input type="number" name="rm" id="rm" value="<?php echo $aluno->getRm() ?>" disabled="disabled" required>

                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" value="<?php echo $aluno->getEmail() ?>" disabled="disabled" required>

                    <label for="cpf">CPF</label>
                    <input type="text" name="cpf" id="cpf" value="<?php echo $aluno->getCpf() ?>" disabled="disabled" required>

                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" value="<?php echo $aluno->getSenha() ?>" required>
                
                    <button type="submit" name="alterar">Salvar alterações</button>

                </fieldset>
            </form>
        </div>
    </section>

    <?php include "public/footer-boostrap.php" ?>
</body>
</html>