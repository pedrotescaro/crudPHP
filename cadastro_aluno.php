<?php
    //inclusão do arquivo de conexao com o banco de dados
    include 'database.php';

    //Declarar variaveis para armazenar ad informacoes
    //enviadas via formulario
    $nome_aluno = $_POST['nome_aluno'];
    $email_aluno = $_POST['email_aluno'];
    $telefone_aluno = $_POST['telefone_aluno'];

    //CONSTRUIR UMA STRING PARA CADASTRAR AS INFO
    //  NO BANCO DE DADOS

    $sql = "INSERT INTO sge_alunos (nome_aluno, email_aluno, telefone_aluno) VALUES ('$nome_aluno', '$email_aluno', '$telefone_aluno')";

    //Função para cadastar no banco de dados
    //Função mysql_query necessita de dois parametros
    //1º conexão com o banco de dados
    //2º comando em sql
    if(mysqli_query($conexao, $sql)){
        //Função para redirecionar para página indicada
        header("Location: listar_aluno.php");
    }
    else{
        echo "Falha ao cadastrar no banco de dados";
    }