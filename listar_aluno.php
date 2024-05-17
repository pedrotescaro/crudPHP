<?php 
    //1° incluir o arquivo de conexao ao banco de dados
    include "database.php";
    //header é so pra carregar as config de html e CSS
    include "header.php"; 
    //2° declarar uma variavel para receber o comando em SQL
    $sql_listar = "SELECT * FROM sge_alunos";

    //3° utilizar uma função mysqli_query conectar ao banco e executar o comando em sql
    //É necessario armazenar o resultado em uma variavel
    $consulta_bd = mysqli_query($conexao, $sql_listar);
?>
<div class="container mt-3">
  <div class="table-responsive">
      <!-- Tabela para listar os dados -->
        <table class="table table-striped table-hover">
            <!-- cabeçalho da Tabela -->
            <thead>
                <!-- tr - table row - linha da tabela -->
              <tr>
                  <!-- th - nome que no indice da coluna -->
                    <th>Nome:</th>
                    <th>E-mail:</th>
                    <th>Telefone:</th>
                    <th>Atualizar:</th>
                    <th>Excluir:</th>
                </tr> 
            </thead>
              <!-- corpo da tabela -->
              <tbody>
                <?php while($dados_bd = mysqli_fetch_array($consulta_bd)):?>
                <tr>
                    <!-- td - table data - campo que vai receber o valor -->
                      <td><?php echo $dados_bd['nome_aluno'];?></td>
                      <td><?php echo $dados_bd['email_aluno'];?></td>
                      <td><?php echo $dados_bd['telefone_aluno'];?></td>
                      
               
                      <div class="container-fluid mt-3">
                        <td>
                          
                          
                          <a href="form_atualizar_cad_aluno.php?id_aluno=<?php echo $dados_bd['id_aluno'];?>" class="back-button"> <button class="btn btn-transparent" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo" width = 40px><img src="img\icons\update.png" alt="atualizar" width = 40px></a>
                         
                        </td>
                      </div>
                      
                      <div class="container mt-3">
                      <td>
                       
                          <a href="excluir_cadastro_aluno.php?id_aluno=<?php echo $dados_bd['id_aluno'];?>" class="back-button"><button class="btn btn-transparent" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo" width = 40px><img src="img\icons\excluir.png" alt="deletar"width = 40px></a>
                        
                      </td>
                  </tr>
                <?php endwhile; ?>
                
              </tbody>
        </table>
        <div class="d-grid"> 
            <a href="index.php" class="btn btn-secondary btn-block">Voltar</a><br>
        </div>
      </div>
    </div>
    <br><br>
 
    <?php 
    //footer
    include "footer.php"; 
?>