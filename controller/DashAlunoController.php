<?php 



    Class DashAlunoController {

        public static function dashAluno(){

            require_once 'session.php';

            include_once 'connection/Connection.php';
            include_once 'model/Pessoa.php'; 

            include_once 'model/Aluno.php';
            include_once 'dao/AlunoDAO.php';


            $alunodao = new AlunoDAO();
            $counterStudent = $alunodao->readAll();

            echo '<pre>' , print_r($counterStudent) , '</pre>';





            include 'view/dashboard/aluno.php';
        }


        public static function dashAlunoCadastrar(){

            if (isset($_POST['cadastrar'])) {
                //echo 'Validação:<br><pre>';
    
                include_once 'connection/Connection.php';
                include_once 'model/Pessoa.php';
                include_once 'model/Aluno.php';
                include_once 'dao/AlunoDAO.php';
                include_once 'controller/Filter.php';
               
        
                
               
             

                $filter = new Filter();
            
                $filters = array(
                    'cpf' => array('filter' => FILTER_CALLBACK, 'options' => array($filter, 'validateCPF')),
                    'email' => FILTER_VALIDATE_EMAIL,
                    'senha' => array('filter' => FILTER_CALLBACK, 'options' => array($filter, 'validatePassword')),  
                    'nome' => array('filter' => FILTER_CALLBACK, 'options' => array($filter, 'validateName')),
                    'sobrenome' => array('filter' => FILTER_CALLBACK, 'options' => array($filter, 'validateName')),
                    'telefone' => array('filter' => FILTER_CALLBACK, 'options' => array($filter, 'validatePhone')),
                    'rm' => FILTER_VALIDATE_INT
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
                    'rm' => FILTER_SANITIZE_NUMBER_INT
                );

                $ativo = 1;
            
                $data = $filter->sanitize($_POST, $filters);
            
                echo 'ala quase';
                
                $aluno = new Aluno();
            
                $aluno->setCpf($data['cpf']);
                $aluno->setEmail($data['email']);
                $aluno->setSenha($data['senha']);
                $aluno->setNome($data['nome']);
                $aluno->setSobrenome($data['sobrenome']);
                $aluno->setTelefone($data['telefone']);
                $aluno->setRm($data['rm']);
                $aluno->setPurl(NULL);
                $aluno->setAtivo($ativo);

                echo 'Validação:<br><pre>' , var_dump($aluno) , '</pre>';
                
                $alunodao = new AlunoDAO();
                $alunodao->createADM($aluno);
            
            }
            
            header('Location: /dashboard/aluno');
            die();
        
        }


    }

        



?>