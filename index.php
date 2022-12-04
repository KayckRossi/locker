<?php
include 'controller/DashController.php';
include 'controller/AlunoController.php';
include 'controller/FuncionarioController.php';
include 'controller/ArmarioController.php';
include 'controller/CursoController.php';
include 'controller/AluguelController.php';
include 'controller/AuthenticationController.php';
include 'controller/AdmAuthenticationController.php';
include 'controller/DashAlunoController.php';
include 'controller/DashArmarioController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url) {

    case '/':
        echo "Tela inicial";
    break;

    case '/login':
        AuthenticationController::entrar();
    break;

    case '/sair':
        AuthenticationController::sair();
    break;

    case '/confirmaremail':
        include 'view/confirmaremail.php';
    break; 
       
    case '/cadastro':
        AlunoController::alunoCadastrar();
    break;

    case '/meu-cadastro':
        AlunoController::alunoSelecionar();
    break;

    case '/alterar':
        AlunoController::alunoAlterar();
    break;

    case '/armarios':
        ArmarioController::listarSelecao();
    break;

    case '/checkout':
        AluguelController::checkout();
    break;

    case '/reserva':
        AluguelController::reserva();
    break;

    case '/adm/dashboard/cadastro-aluno':
        AlunoController::cadastrar();
    break;
    
    case '/adm/dashboard/listar-aluno':
        AlunoController::listar();
    break;

    case '/adm/dashboard/alterar-aluno':
        AlunoController::alterar();
    break;

    case '/adm/dashboard/excluir-aluno':
        AlunoController::excluir();
    break;

    case '/adm/login':
        AdmAuthenticationController::entrar();
    break;

    case '/adm/sair':
        AdmAuthenticationController::sair();
    break;

    case '/adm/dashboard/overview':
        FuncionarioController::dashboard();
    break;

    case '/adm/dashboard/cadastro-funcionario':
        FuncionarioController::cadastrar();
    break;

    case '/adm/dashboard/listar-funcionario':
        FuncionarioController::listar();
    break;

    case '/adm/dashboard/alterar-funcionario':
        FuncionarioController::alterar();
    break;

    case '/adm/dashboard/excluir-funcionario':
        FuncionarioController::excluir();
    break;

    case '/adm/dashboard/cadastro-curso':
        CursoController::cadastrar();
    break;

    case '/adm/dashboard/listar-curso':
        CursoController::listar();
    break;

    case '/adm/dashboard/alterar-curso':
        CursoController::alterar();
    break;

    case '/adm/dashboard/excluir-curso':
        CursoController::excluir();
    break;

    case '/adm/dashboard/cadastro-armario':
        ArmarioController::cadastrar();
    break;

     case '/adm/dashboard/listar-armario':
         ArmarioController::listar();
     break;
    
    case '/adm/dashboard/alterar-armario':
        ArmarioController::alterar();
    break;

    case '/adm/dashboard/excluir-armario':
        ArmarioController::excluir();
    break;

    case '/dashboard':
        DashController::overview();
    break;
    
    case '/aceitar-aluguel':
        DashController::aceitarAluguel();
    break;

    case '/negar-aluguel':
        DashController::negarAluguel();
    break;

    case '/dashboard/aluno':
        DashAlunoController::dashAluno();
    break;

    case '/dash-cad-aluno':
        DashAlunoController::dashAlunoCadastrar();
    break;
    
    case '/dashboard/armario':
        DashArmarioController::listar();
    break;

    case '/dashboard/alterar-armario':
        DashArmarioController::alterar();
    break;

    case '/dashboard/cadastrar-armario':
        DashArmarioController::cadastrar();
    break;

    case '/dashboard/aluguel':
        include 'view/dashboard/alugueis.php';
    break;
    
    case '/footer/contato':
        include 'view/footer/contato.php';
    break;
    
    case '/footer/privacidade':
        include 'view/footer/pprivacidade.php';
    break;  

    case '/footer/quemsomos':
        include 'view/footer/quem.php';
    break;  

    default:
        echo "Erro 404";
    break;
    
}





?>