<?php 
 
 include_once('config.php');

    if(isset($_POST['update']))
    {    
      $id = $_POST['id'];
      $nome = $_POST['nome'];
      $quantidade = $_POST['quantidade'];
      $preco = $_POST['preco'];
      $descricao = $_POST['descricao'];
      $desconto = $_POST['desconto'];
      $total = $_POST['total'];
      $data_da_venda = $_POST['data_da_venda'];
      

      $sqlUpdate = "UPDATE historico_vendas SET nome = '$nome', quantidade ='$quantidade', preco ='$preco', descricao ='$descricao', desconto ='$desconto', total ='$total', data_da_venda = '$data_da_venda' WHERE id ='$id' ";

      $resultado = $conexao->query($sqlUpdate);
      
    }
    header('Location: historico-vendas.php');
?>

