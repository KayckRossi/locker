<?php
class Authentication {

    private $email;
    private $senha;
    private $ativo;

    public function __construct() {
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
    
    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function setAtivo($ativo){
        $this->ativo = $ativo;
    }

    public function getAtivo(){
        return $this->ativo;
    }

    private function checkCredentials($user) {
        if ($user) {
            if ($user['senha'] === $this->senha) {
                return $user;
            }
        }
        return false;
    }

    public function login($data) {
        $user = $this->checkCredentials($data);
        if ($user) {
            session_start();
            $_SESSION['authenticate'] = true;
            $_SESSION['id'] = $user['id'];
            $_SESSION['nome'] = $user['nome'];
            return true;
        }
        return false;
    }

    public function logout() {
        session_start();
	    session_unset();
	    session_destroy();

	    header('Location: /login');
        die();
    }

}

?>