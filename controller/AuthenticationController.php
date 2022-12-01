<?php

class AuthenticationController {

    public static function entrar() {

        if (isset($_POST['entrar'])) {

            include_once 'connection/Connection.php';
            include_once 'model/Authentication.php';
            include_once 'dao/AuthenticationDAO.php';
            include_once 'controller/Filter.php';
        
            $filter = new Filter();
        
            $filters = array(
                'email' => FILTER_VALIDATE_EMAIL,
                'senha' => array('filter' => FILTER_CALLBACK, 'options' => array($filter, 'validatePassword'))
            );
        
            $data = $filter->validate($_POST, $filters);
        
            //echo 'Validação:<br><pre>' , var_dump($data) , '</pre>';
            
            $login = new Authentication();

            $login->setEmail($_POST['email']);
            $login->setSenha($_POST['senha']);
        
            $authenticationdao = new AuthenticationDAO();

            $data = $authenticationdao->authenticate($login->getEmail());
            
            if ($login->login($data)) {         
                header('Location: /meu-cadastro');
                die();
            }
        
        }

        //include 'view/aluno/login.php';
        include 'view/aluno/logintest.php';

    }

    public static function sair() {

        if (isset($_POST['sair'])) {
        
            include_once 'model/Authentication.php';
            
            $logout = new Authentication();

            $logout->logout();
        
        }

    }
 
}

?>