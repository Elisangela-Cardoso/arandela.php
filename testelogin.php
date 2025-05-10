<?php 
session_start();

 if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
 {
     include_once('config.php');
     $email = $_POST['email'];
     $senha = $_POST['senha'];

     $sql = "SELECT * FROM logar WHERE email = '$email' and senha = '$senha'";

     $resultado = $conexao->query($sql);
     

     if(mysqli_num_rows($resultado) < 1)
     {  
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: form-login.php');
     }else
     {  
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: descricao-venda.php');
     }

 }
 else
 {
    header('Location: form-login.php');
 }

?>