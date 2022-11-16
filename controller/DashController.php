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

            //contador de alugueis em espera 
            $alugueldao =  new AluguelDAO();
            $counterRent = $alugueldao->countRent();
            
            
            
            
            
           
    
            include 'view/dashboard/dashboard.php';
    
        } 

    
    

    }
?>