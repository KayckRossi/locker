<?php


    Class DashController {



        public static function Overview(){
        
        
            require_once 'session.php';
            
            include_once 'connection/Connection.php';
            include_once 'model/Pessoa.php';

            include_once 'model/Armario.php';
            include_once 'dao/ArmarioDAO.php';
            
            include_once 'model/Aluno.php';
            include_once 'dao/AlunoDAO.php';

            include_once 'dao/AluguelDAO.php';
            include_once 'model/Aluguel.php';

            
    
           //armarios totais
            $counter = new ArmarioDAO();
            $counter->count();
    
            //Armarios disponiveis
            $counterDisp = new ArmarioDAO();
            $counterDisp->countDisp();
    
            //armarios alugados
            $counterAlug = new ArmarioDAO();
            $counterAlug->countAlug();
    
            //armarios indisponiveis
            $counterIndisp = new ArmarioDAO();
            $counterIndisp->countIndisp();

            //alunos ativos
            $alunoAtivo = new AlunoDAO();
            $alunoAtivo->countActive();

            //contador de alugueis em espera para gerar lista 
            $alugueldao =  new AluguelDAO();
            $counterRent = $alugueldao->countRent();

            //contador de alugueis ativos
            $aluguelAtivo =  new AluguelDao();
            $aluguelAtivo->countActive();

            //contador de alugueis pendentes
            $aluguelReservado = new AluguelDAO();
            $aluguelReservado->aluguelPendente();
            
            

            include 'view/dashboard/dashboard.php';
    
        } 


        public static function AttAluguel(){

            require_once 'session.php';
            
            

            if (isset($_POST['confirmar'])) {
            
            include_once 'connection/Connection.php';
            include_once 'model/Pessoa.php';

            include_once 'model/Armario.php';
            include_once 'dao/ArmarioDAO.php';

            include_once 'dao/AluguelDAO.php';
            include_once 'model/Aluguel.php';

            $data = $_POST;
            
             

            echo '<pre>' , print_r($data) , '</pre>';
            
            


            //atualizar status aluguel de reservado para ativo
            $aluguel = new Aluguel();
            $aluguel->setId($data['id']);
            $aluguel->setIdArmario($data['idArmario']);
            $aluguel->setSituacao('ativo');
            


            echo '<pre>' , print_r($aluguel) , '</pre>';
        
            $attAluguel = new AluguelDAO();

            $attAluguel->Attupdate($aluguel);

            echo '<pre>' , print_r($attAluguel) , '</pre>';

        }

              header('Location: /dashboard');
              die();
            

        }

        public static function NegarAluguel(){

            require_once 'session.php';
            
            

            if (isset($_POST['negar'])) {
            
            include_once 'connection/Connection.php';
            include_once 'model/Pessoa.php';

            include_once 'model/Armario.php';
            include_once 'dao/ArmarioDAO.php';

            include_once 'dao/AluguelDAO.php';
            include_once 'model/Aluguel.php';

            $data = $_POST;
            
             

            echo '<pre>' , print_r($data) , '</pre>';
            
            


            //atualizar status aluguel de reservado para ativo
            $aluguel = new Aluguel();
            $aluguel->setId($data['id']);
            $aluguel->setIdArmario($data['idArmario']);
            $aluguel->setSituacao('inativo');
            


            echo '<pre>' , print_r($aluguel) , '</pre>';
        
            $attAluguel = new AluguelDAO();

            $attAluguel->negarAluguel($aluguel);

            echo '<pre>' , print_r($attAluguel) , '</pre>';

        }

              //header('Location: /dashboard');
              //die();
            

        }



    }
?>