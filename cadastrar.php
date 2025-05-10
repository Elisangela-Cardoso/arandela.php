<?php 
   if(isset($_POST['submit']))
    {
      include_once('config.php');

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
      
      $resultado = mysqli_query($conexao, "INSERT INTO historico_cadastros(nome,cpf,email,data_nasc,telefone,cep,bairro,rua,cidade,estado) VALUES ('$nome','$cpf','$email','$data_nasc','$telefone','$cep','$bairro','$rua','$cidade','$estado')");
 
    }
    

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body class="container_box">
<header class="top_links">
      <a href="cadastrar.php">Cadastrar Cliente</a>
      <a href="historico-cadastro.php">Buscar Cadastros </a> 
      <a href="historico-vendas.php">Buscar Históricos De Vendas </a> 
      <a href="descrição-venda.php">Venda</a>
      <div class="sair">
      <a href="sair.php">Sair <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
      <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1"/>
      </svg></a>
      </div>
    </header>

   <section id="container_cadastro">   
   <h1 id="titulo_h1">Cadastro de Clientes</h1>
    <section id="seccao_cadastro">

          <form  action="cadastrar.php" method="POST" id="cadastro">

            <div class="esquerda">
            
            <label for="nome" class="espaco">Nome:</label> 
            <input type="text" name="nome"  id="nome" size="35"> 
            
            <label for="cpf" class="espaco">CPF:</label> 
            <input type="text" name="cpf" id="nome" > 
            
            <label for="data_nasc" class="espaco">Data de nascimento:</label> 
            <input class="data" type="date" name="data_nasc" id="nome"> 

            </div>

             <div class="centro">

             <label for="email" class="espaco">E-mail:</label> 
            <input type="text" name="email"  id="email" size="35">
            

            <label for="telefone" class="espaco">Telefone:</label> 
            <input type="text" name="telefone" id="telefone">
      
            <label class="espaco">CEP:</label> 
            <input type="text" name="cep"  id="cep" size="26" maxlength="9" onblur="pesquisacep(this.value);">
            
             </div>
           
            <div class="esquerda">
            <label class="espaco">Bairro:</label>
            <input type="text" name="bairro"  id="bairro" >
          
            <label class="espaco">Rua(complemento):</label>
            <input  type="text" name="rua"  id="rua" >
      
           
            <label class="espaco">Cidade:</label>
            <input type="text"  name="cidade"  id="cidade" >
            
            <label class="espaco">Estado:</label>
            <input type="text" name="estado" id="uf" size="7">
         

            </div>
            
            <div class="botao_cadastro">
            <input type="submit" name="submit"  value="Cadastrar" class="botao_estilo">
            </div> 
        
          </form> 
      
        </section>

        </section> 



        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
       
</body>
</html>