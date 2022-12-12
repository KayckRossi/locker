<header>

    <?php $url = str_replace("/dashboard/", "", $_SERVER["REQUEST_URI"]); ?>

    <?php
            if (isset($_SESSION['admAuthenticate'])) {
                        $adm = $_SESSION['nome'] ?>

                            <form action="/adm/sair" method="post">

                                <button type="submit" name="sair" class="btn btn-warning btn-sm">Sair</button>

                            </form>
                  
          <?php  } else {
                 header('Location: /login');
                 die();
                            
            }
            ?>
            
                <a href="#"><?php echo $url  ?></a>
                
                <a class="adm" href="#">Ola,  <?php echo ($adm) ?></a>

</header>