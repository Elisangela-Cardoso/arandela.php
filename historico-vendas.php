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

 $sql = "SELECT * FROM historico_vendas ORDER BY id DESC";

 $resultado = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
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
   

    <h1 class="titulo_topo_h1">Historico De Vendas</h1>
    <label class="topo_input_buscar" id="topo_input_buscar" for="filtrar-busca">Buscar:
      <input type="text" name="filtro" id="filtrar_cliente" placeholder="Buscar por cliente"></label>

    <table class="tabela_hist" id="tabela_venda">
        <tr class="titulos_vendas"> 
            <td class="top_td">Nome</td>
            <td class="top_td">Código</td>
            <td class="top_td">Descrição do Produto</td>
            <td class="top_td">Quantidade</td>
            <td class="top_td">Valor</td>
            <td class="top_td">Data</td>
            <td></td>
          
           
           
          
            
        </tr>
         <?php 
          while($user = mysqli_fetch_assoc($resultado))
          {
         ?>
        
        <tr class="info_cliente_tabela">
            <td class="info_nome"><?php echo $user['nome']?></td>
            <td>12123233<?php echo $user['codigo']?></td>
            <td><?php echo $user['desc_produto']?></td>
            <td>2<?php echo $user['quantidade']?></td> 
            <td class="info_desconto">300.90<?php echo $user['valor']?></td>
            <td class="info_total"><?php echo $user['data']?></td>
            <td class="edita_venda">
            <a href="edite-venda.php?id=<?php echo $user['id'];?>">

            <svg xmlns='http://www.w3.org/2000/svg' width='20' height='15' fill='rgb(115, 107, 65)' class='bi bi-pencil-square' viewBox='0 0 16 16'>
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
            </svg>
            </a>
            </td>
            
            </tr>
      
           
        <?php
            }
          ?>
    </table>
        
    <script src="js/buscar_vendas.js"></script>
</body>
</html>