<?php   

Class DashFuncionarioController{


    public static function dashFuncionario() {
        
        require_once 'adm-session.php';
        
        include_once 'connection/Connection.php';
        include_once 'model/Pessoa.php';
        include_once 'model/Funcionario.php';
        include_once 'dao/FuncionarioDAO.php';
        include_once 'controller/Filter.php';

        $funcionariodao = new FuncionarioDAO();

        $funcionarios = $funcionariodao->readAll();
        
        //echo '<pre>' , var_dump($funcionarios) , '</pre>';

        include 'view/dashboard/funcionarios.php';
        
    }


    public static function cadastrar() {

        require_once 'adm-session.php';

        if (isset($_POST['cadastrar'])) {

            include_once 'connection/Connection.php';
            include_once 'model/Pessoa.php';
            include_once 'model/Funcionario.php';
            include_once 'dao/FuncionarioDAO.php';
            include_once 'controller/Filter.php';

/*            $filter = new Filter();
        
             $filters = array(
                'cpf' => array('filter' => FILTER_CALLBACK, 'options' => array($filter, 'validateCPF')),
                'email' => FILTER_VALIDATE_EMAIL,
                'senha' => array('filter' => FILTER_CALLBACK, 'options' => array($filter, 'validatePassword')),  
                'nome' => array('filter' => FILTER_CALLBACK, 'options' => array($filter, 'validateName')),
                'sobrenome' => array('filter' => FILTER_CALLBACK, 'options' => array($filter, 'validateName')),
                'telefone' => array('filter' => FILTER_CALLBACK, 'options' => array($filter, 'validatePhone')),
                'funcao' => FILTER_UNSAFE_RAW,
                'privilegio' => FILTER_UNSAFE_RAW
            );
        
            $data = $filter->validate($_POST, $filters);
        
            echo 'Validação:<br><pre>' , var_dump($data) , '</pre>';
        
            $filters = array(
                'cpf' => FILTER_UNSAFE_RAW,
                'email' => FILTER_SANITIZE_EMAIL,
                'senha' => FILTER_UNSAFE_RAW,  
                'nome' => FILTER_SANITIZE_SPECIAL_CHARS,
                'sobrenome' => FILTER_SANITIZE_SPECIAL_CHARS,
                'telefone' => FILTER_UNSAFE_RAW,
                'funcao' => FILTER_UNSAFE_RAW,
                'privilegio' => FILTER_UNSAFE_RAW
            );
        
            $data = $filter->sanitize($_POST, $filters); */

            $data = $_POST;
        
            echo 'Sanitização:<br><pre>' , var_dump($data) , '</pre>';
            
            $funcionario = new Funcionario();
        
            $funcionario->setCpf($data['cpf']);
            $funcionario->setEmail($data['email']);
            $funcionario->setSenha($data['senha']);
            $funcionario->setNome($data['nome']);
            $funcionario->setSobrenome($data['sobrenome']);
            $funcionario->setTelefone($data['telefone']);
            $funcionario->setFuncao($data['funcao']);
            $funcionario->setPrivilegio($data['privilegio']);
            
            $funcionariodao = new FuncionarioDAO();
            
            $funcionariodao->create($funcionario);
        
        }
        
        header('Location: /dashboard/funcionario');
        die();

    }





}



?>