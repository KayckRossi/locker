<?php 

Class DashPlanoController{






public static function listar(){

    require_once 'adm-session.php';
        
    include_once 'connection/Connection.php';
    include_once 'model/Plano.php';
    include_once 'dao/PlanoDAO.php';
    include_once 'controller/Filter.php';

    $planodao = new PlanoDAO();
    
    $planos = $planodao->readAll();
    
    //echo '<pre>' , var_dump($planos) , '</pre>';




    include 'view/dashboard/planos.php';
}



public static function excluir() {
        
    require_once 'adm-session.php';

    if (isset($_POST['excluir'])) {

        include_once 'connection/Connection.php';
        include_once 'model/Plano.php';
        include_once 'dao/PlanoDAO.php';
        include_once 'controller/Filter.php';

        $data = $_POST;

        
        $plano = new Plano();

        $plano->setId($data['id']);

        $planodao = new PlanoDAO();
        
        $planodao->delete($plano);

         //echo 'Resultado:<br><pre>' , var_dump($planodao) , '</pre>';

    }

     header('Location: /dashboard/plano');
     die();

}



public static function cadastrar() {
        
    require_once 'adm-session.php';

    if (isset($_POST['cadastrar'])) {

        include_once 'connection/Connection.php';
        include_once 'model/Plano.php';
        include_once 'dao/PlanoDAO.php';
        include_once 'controller/Filter.php';

/*             $filter = new Filter();
    
        $filters = array(
            'secao' => array('filter' => FILTER_CALLBACK, 'options' => array($filter, 'validateSecao')), 
            'andar' => FILTER_VALIDATE_BOOLEAN,
            'quantidade' => FILTER_VALIDATE_INT
        );
    
        $data = $filter->validate($_POST, $filters);
    
        echo 'Validação:<br><pre>' , var_dump($data) , '</pre>';
    
        $filters = array(
            'secao' => FILTER_SANITIZE_SPECIAL_CHARS,
            'local' => FILTER_SANITIZE_SPECIAL_CHARS,  
            'andar' => FILTER_SANITIZE_NUMBER_INT,
            'situacao' => FILTER_SANITIZE_SPECIAL_CHARS,
            'quantidade' => FILTER_SANITIZE_NUMBER_INT
        ); */
    
        //$data = $filter->sanitize($_POST, $filters);
    
        //echo 'Sanitização:<br><pre>' , var_dump($_POST) , '</pre>'; 
    
        $data = $_POST;

        $plano = new Plano();
    
        $plano->setPlano($data['nome_plano']);
        $plano->setValor($data['valor']);
        $plano->setStatus("1");
        $plano->setDuracao($data['duracao']);
        
        $planodao = new PlanoDAO();

        $planodao->create($plano);
    
    }
    
    header('Location: /dashboard/plano');
    die();
    
}


public static function alterar() {

    require_once 'adm-session.php';

    if (isset($_POST['alterar'])) {

        include_once 'connection/Connection.php';
        include_once 'model/Plano.php';
        include_once 'dao/PlanoDAO.php';
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
           
        $plano = new Plano();
    
        $plano->setId($data['id']);
        $plano->setPlano($data['nome_plano']);
        $plano->setValor($data['valor']);
        $plano->setStatus($data['status']);
        $plano->setDuracao($data['duracao']);
        
        $planodao = new PlanoDAO();

        $planodao->update($plano);
        
    }
    
    header('Location: /dashboard/plano');
    die();

}





}




?>