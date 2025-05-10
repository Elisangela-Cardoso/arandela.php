<?php 
 
   include_once('config.php');

   if(isset($_POST['update']))
    {    
      $id = $_POST['id'];
      $nome = $_POST['nome'];
      $cpf = $_POST['cpf'];
      $email = $_POST['email'];
      $data_nasc = $_POST['data_nasc'];
      $telefone = $_POST['telefone'];
      $cep = $_POST['cep'];
      $bairro = $_POST['bairro'];
      $rua = $_POST['rua'];
      $cidade = $_POST['cidade'];
      $estado = $_POST['estado'];

      $sqlUpdate = "UPDATE historico_cadastros SET nome = '$nome', cpf ='$cpf' ,email ='$email', data_nasc ='$data_nasc', telefone ='$telefone', cep ='$cep', bairro ='$bairro', rua ='$rua', cidade ='$cidade', estado ='$estado' WHERE id ='$id'";

      $resultado = $conexao->query($sqlUpdate);
      
 }
  header('Location: historico-cadastro.php');
?>