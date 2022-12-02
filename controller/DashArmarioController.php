<?php


    Class DashArmarioController {

        
        public static function listarArmAdm() {
        
            require_once 'adm-session.php';
            
            include_once 'connection/Connection.php';
            include_once 'model/Armario.php';
            include_once 'dao/ArmarioDAO.php';
            include_once 'controller/Filter.php';
    
            $armariodao = new ArmarioDAO();
    
            $locais = $armariodao->readLocal();
    
            $andares = $armariodao->readFloor();
            
            $situacoes = $armariodao->readSituation();
            
            $armarios = $armariodao->readAll();


            //Armarios disponiveis
            $counterDisp = new ArmarioDAO();
            $counterDisp->countDisp();
    
            //armarios alugados
            $counterAlug = new ArmarioDAO();
            $counterAlug->countAlug();
    
            //armarios indisponiveis
            $counterIndisp = new ArmarioDAO();
            $counterIndisp->countIndisp();
            
            //echo '<pre>' , var_dump($armarios) , '</pre>';
           
            //include 'view/dashboard/listar-armario.php';
            include 'view\dashboard\armarios.php';
            
        }

        public static function alterar() {

            require_once 'adm-session.php';
    
            if (isset($_POST['alterar'])) {
    
                include_once 'connection/Connection.php';
                include_once 'model/Armario.php';
                include_once 'dao/ArmarioDAO.php';
                include_once 'controller/Filter.php';
                
     /*         $filter = new Filter();
            
                $filters = array(
                    'senha' => array('filter' => FILTER_CALLBACK, 'options' => array($filter, 'validatePassword')),  
                    'nome' => array('filter' => FILTER_CALLBACK, 'options' => array($filter, 'validateName')),
                    'sobrenome' => array('filter' => FILTER_CALLBACK, 'options' => array($filter, 'validateName')),
                    'telefone' => array('filter' => FILTER_CALLBACK, 'options' => array($filter, 'validatePhone'))
                );
            
                $data = $filter->validate($_POST, $filters);
            
                echo 'Validação:<br><pre>' , var_dump($data) , '</pre>';
            
                $filters = array(
                    'senha' => FILTER_UNSAFE_RAW,  
                    'nome' => FILTER_SANITIZE_SPECIAL_CHARS,
                    'sobrenome' => FILTER_SANITIZE_SPECIAL_CHARS,
                    'telefone' => FILTER_UNSAFE_RAW
                );
            
                $data = $filter->sanitize($_POST, $filters); */
    
                $data = $_POST;
            
                //echo 'Sanitização:<br><pre>' , var_dump($data) , '</pre>';
                   
                $armario = new Armario();
            
                $armario->setId($data['id']);
                $armario->setSecao($data['secao']);
                $armario->setNumero($data['numero']);
                $armario->setLocal($data['local']);
                $armario->setAndar($data['andar']);
                $armario->setSituacao($data['situacao']);
    
                $armariodao = new ArmarioDAO();
    
                $armariodao->update($armario);
                
                
            }
            
            header('Location: /dashboard/armario');
            die();
    
        }




    }


















?>