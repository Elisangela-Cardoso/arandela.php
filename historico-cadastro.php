<?php 
 session_start();
 include_once('config.php');
 //print_r($_SESSION);
 if((!isset($_SESSION['email']) == true) &&(!isset($_SESSION['senha']) == true))
 {
   unset($_SESSION['email']);
   unset($_SESSION['senha']);
   header('Location: form-login.php');
 }
 $logado = $_SESSION['email'];

 $sql = "SELECT * FROM historico_cadastros ORDER BY id DESC";

 $resultado = $conexao->query($sql);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historico De Cadastro</title>
    <link rel="stylesheet" href="estilo.css">
    
</head>
<body id="container">

<header class="top_links">
      <a href="cadastrar.php">Cadastrar Cliente</a>
      <a href="historico-cadastro.php">Buscar Cadastros </a> 
      <a href="historico-vendas.php">Buscar Históricos De Vendas </a> 
      <a href="descricao-venda.php">Venda</a>
      <div class="sair">
      <a href="sair.php">Sair <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
      <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1"/>
      </svg></a>
      </div>
    </header>

    
  
    <h1 class="titulo_h1">Historico De Cadastro</h1>
    <label class="topo_input_buscar" for="filtrar_busca">Buscar:
      <input type="text" name="filtro" id="filtrar_cadastro" placeholder="Buscar por cliente"></label>

    <section id="box_cadastro">
       <table id="tabela_cadastro">
            <tr class="info_titulos">
                <td>Nome</td>
                <td>CPF</td>
                <td>E-mail</td>
                <td>data_nascimento</td>
                <td>Telefone</td>
                <td>CEP</td>
                <td>Bairro</td>
                <td>Rua</td>
                <td>Cidade</td>
                <td>Estado</td>
                <td colspan="2"></td>
               
              </tr>
               <?php
               while($user = mysqli_fetch_assoc($resultado))
               {
               
                ?>
                
                <tr class="info_cliente">
                <td class="info_nome"><?php echo $user['nome']?></td>
                <td><?php echo $user['cpf']?></td>
                <td><?php echo $user['email']?></td>
                <td><?php echo $user['data_nasc']?></td>
                <td><?php echo $user['telefone']?></td>
                
                <td><?php echo $user['cep']?></td>
                <td><?php echo $user['bairro']?></td>
                <td><?php echo $user['rua']?></td>
                <td><?php echo $user['cidade']?></td>
                <td><?php echo $user['estado']?></td>
            
                <td class="edita_excluir">
                
                <a href="edite.php?id=<?php echo $user['id'];?>">

                <svg xmlns='http://www.w3.org/2000/svg' width='20' height='15' fill='rgb(115, 107, 65)' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                </svg></a>
                </td>
                <td>
                <a href="delete.php?id=<?php echo $user['id'];?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="rgb(115, 107, 65" class="bi bi-trash-fill" viewBox="0 0 16 16">
                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                </svg></a>

                </td>
                
            </tr>
            <?php
             }
            ?>
       </table>
      
    </section> 
    <script src="js/buscar_cadastro.js"></script>
</body>
</html>