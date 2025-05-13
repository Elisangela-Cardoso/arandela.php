<?php 
   if(!empty($_GET['id']))
    {
      include_once('config.php');
      $id = $_GET['id'];

      $sqlSelect = "SELECT * FROM historico_vendas WHERE id='$id'";

      $resultado = $conexao->query($sqlSelect);

      if($resultado->num_rows > 0)
      {
        while($user = mysqli_fetch_assoc($resultado))
        {
        $id = $user['id'];
        $nome = $user['nome'];
        $codigo = $user['codigo'];
        $desc_produto = $user['desc_produto'];
        $quantidade = $user['quantidade'];
        $valor = $user['valor'];
        $data = $user['data'];
        
        }
      }
      else
      {
        header('Location: historico-vendas.php');
      }  
    }
      else
    {
       header('Location: historico-vendas.php');
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
     <div class="nome">
     <label for="nome">Nome:</label>
     <input type="text" name="nome" value="<?php echo $nome ?>" >
     </div>
    
        <form action="salva-edite-venda.php" method="POST">
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
           <td><input type="text" name="codigo" value="<?php echo $codigo ?>" ></td> 
           <td><input type="text" name="desc_produto" value="<?php echo $desc_produto ?>" ></td>
           <td class="quantidade"><input type="text" name="quantidade" value="<?php echo $quantidade ?>" ></td>
           <td><input type="text" name="valor" value="<?php echo $valor?>" ></td>
           <td><input type="date" name="data" value="<?php echo $data?>"></td>
           </tr>

         </tbody>     
         </table>
         </div>
      

     <section class="rodape">
        <label for="Quantidade_total">Quantidade de itens:</label>
        <input type="text" size="8" value="" >
        <label for="valor_total">Total da venda:</label>
        <input type="text" size="10" value="">
        <input type="hidden" name="id" value="">
        <input class="botao_venda" type="submit" name="update" value="Atualizar">
     </section>

     </form>
   
</body>
</html>