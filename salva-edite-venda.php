<?php 
 
 include_once('config.php');

    if(isset($_POST['update']))
    {    
      $id = $_POST['id'];
      $nome = $_POST['nome'];
      $codigo = $_POST['codigo'];
      $desc_produto = $_POST['desc_produto'];
      $quantidade = $_POST['quantidade'];
      $valor = $_POST['valor'];
      $data = $_POST['data'];
      

      $sqlUpdate = "UPDATE historico_vendas SET nome = '$nome',codigo ='$codigo', desc_produto ='$desc_produto',  quantidade ='$quantidade',valor ='$valor', data = '$data' WHERE id ='$id' ";

      $resultado = $conexao->query($sqlUpdate);
      
    }
    header('Location: historico-vendas.php');
?>

