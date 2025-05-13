<?php 
   if(isset($_POST['submit']))
    {
      include_once('config.php');

      $nome = $_POST['nome'];
      $codigo = $_POST['codigo'];
      $desc_produto = $_POST['desc_produto'];
      $quantidade = $_POST['quantidade'];
      $valor = $_POST['valor'];
      $data = $_POST['data'];
     
      
      $resultado = mysqli_query($conexao, "INSERT INTO historico_vendas(nome,codigo,desc_produto,quantidade , valor, data) VALUES ('$nome','$codigo','$desc_produto','$quantidade', '$valor','$data')");
 
    }
    

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relação de compras</title>
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
     
      <form action="descricao-venda.php" method="POST">
      <div class="nome">
     <label for="nome">Nome:</label>
     <input type="text" name="nome">
     </div>
     
         <div class="box_tabela">
         <table class="tabela_venda" id="minhaTabela">
         <thead>
         <tr class="cabecalho">
            <th>Código</th>
            <th>Descricão produto</th>
            <th class="quantidade">Quantidade</th>
            <th>Valor</th>
            <th>Data da venda</th>
          </tr>
          </thead>

          <tbody id="tabela_corpo">
           <tr>
           <td><input type="text" name="codigo"></td> 
           <td><input type="text" name="desc_produto"></td>
           <td class="quantidade"><input type="text" name="quantidade"></td>
           <td><input type="text" name="valor"></td>
           <td><input type="date" name="data">
           </td>
           </tr>

         </tbody>     
         </table>
         </div>
       
        <div class="botao">
        <button id="add-linha-btn" type="button" onclick="adicionarLinha()">Adicionar Linha</button>
        </div>

     <div class="rodape">
        <label for="quantidade_total">Quantidade de itens:</label>
        <input type="text" size="8" name="quantidade_total">
        <label for="valor_total">Total da venda:</label>
        <input type="text" size="10" name="valor_total">
        <input class="botao_venda" type="submit" name="submit" value="Concluir">
   </div>
     </form>
    <script src="js/adiciona_linha.js"></script> 
</body>
</html>