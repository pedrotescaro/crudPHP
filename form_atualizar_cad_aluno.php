<!-- <link rel="stylesheet" href="./css/style.css"> -->
<?php include "header.php"; 

//incluir o arquivo de conexao com o banco de dados
include "database.php";

//Resgatar o id aluno
$id_aluno_update = $_GET['id_aluno'];

//declarar uma variavel e inserir
$sql_id = "SELECT * FROM sge_alunos WHERE sge_alunos.id_aluno = '$id_aluno_update'";

//utiliza a fumcao mysqli_query e armazene numa variavel
$consulta_id = mysqli_query($conexao, $sql_id);

//converter o resultado da consulta em SQL para um array associativo
$dados_aluno_id = mysqli_fetch_array($consulta_id);

?>
    <br>

    <div class="container mt-3">
    <h2>Atualização de cadastro.</h2>
    <p>Todos os campos devem estar preenchidos</p>
        <form action="atualizar_cadastro_aluno.php" method="post">
        <input type="hidden" name="id_aluno" value ="<?php echo $dados_aluno_id['id_aluno'];?>">
            <div class="mb-3 mt-3"> 
                <label for="nome_aluno">Nome Completo: </label>
                <input type="text" name="nome_aluno" id="nome_aluno" class="form-control" value ="<?php echo $dados_aluno_id['nome_aluno'];?>">
            </div>

            <div class="mb-3"> 
                <label for="email_aluno">E-mail: </label>
                <input type="text" name="email_aluno" id="email_aluno" class="form-control" value ="<?php echo $dados_aluno_id['email_aluno'];?>">
            </div>
            <div class="mb-3"> 
                <label for="telefone_aluno">Telefone: </label>
                <input type="text" name="telefone_aluno" id="telefone_aluno" class="form-control" value ="<?php echo $dados_aluno_id['telefone_aluno'];?>">  <br>  
            </div>
            <div class="d-grid"> 
                <input type="submit" value="Cadastrar aluno" class="btn btn-primary ">
            </div>
        </form>
        <br>
        <div class="d-grid"> 
            <a href="listar_aluno.php" class="btn btn-secondary btn-block">Voltar</a><br>
        </div>
    </div>
   
    <?php include "footer.php"; ?>
