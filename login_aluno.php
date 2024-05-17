<!-- <link rel="stylesheet" href="./css/style.css"> -->
    <?php include "header.php"; ?>
    <br>
    <div class="container mt-3">
        <h2>Login</h2>
        <form action="cadastro_aluno.php" method="post">
            <div class="mb-3 mt-3"> 
                <label for="nome_aluno">Nome Completo: </label>
                <input type="text" name="nome_aluno" id="nome_aluno" class="form-control" placeholder="Informe seu nome completo">
            </div>

            <div class="mb-3"> 
                <label for="email_aluno">E-mail: </label>
                <input type="text" name="email_aluno" id="email_aluno" class="form-control" placeholder="Informe seu email">
            </div>
            <div class="d-grid"> 
                <input type="submit" value="Cadastrar usuário" class="btn btn-primary ">
            </div>
        </form>
        <br>
        <div class="d-grid"> 
            <a href="index.php" class="btn btn-secondary btn-block">Voltar</a><br>
        </div>
    </div>
   
    <?php include "footer.php"; ?>


