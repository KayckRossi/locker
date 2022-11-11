<?php


    Class DashController {



        public static function Overview(){
        
        
            require_once 'session.php';
            
            include_once 'connection/Connection.php';
            include_once 'dao/AlunoDAO.php';
            include_once 'dao/ArmarioDAO.php';
    
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
    
            include 'view/dashboard/dashboard.php';
    
        } 

    
    

    }
?>