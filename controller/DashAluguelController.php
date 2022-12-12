<?php 


Class DashAluguelController{

    public static function listar() {
        
        require_once 'adm-session.php';
        
        include_once 'connection/Connection.php';
        include_once 'model/aluguel.php';
        include_once 'dao/AluguelDAO.php';
        include_once 'controller/Filter.php';
        include_once 'model/Pessoa.php';


        include_once 'dao/AluguelDAO.php';
        include_once 'model/Aluguel.php';

        include_once 'dao/AlunoDAO.php';
        include_once 'model/Aluno.php';

        include_once 'dao/ArmarioDAO.php';
        include_once 'model/Armario.php';

        include_once 'dao/PlanoDAO.php';
        include_once 'model/Plano.php';

        $alugueldao = new AluguelDAO();
        
        $alugueis = $alugueldao->readAll();
        
        //echo '<pre>' , var_dump($alugueis) , '</pre>';

        //Contador de alugueis
        $AluguelTotal = new AluguelDAO();
        $AluguelTotal->count();

        //contador de alugueis ativos
        $aluguelAtivo =  new AluguelDao();
        $aluguelAtivo->countActive();

        //contador de alugueis pendentes
        $aluguelReservado = new AluguelDAO();
        $aluguelReservado->aluguelPendente();

        
        //contador de alugueis em espera para gerar lista 
        $alugueldao =  new AluguelDAO();
        $counterRent = $alugueldao->countAll();


        include 'view/dashboard/alugueis.php';
        
    }

}





?>