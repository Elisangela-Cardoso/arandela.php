<?php 
   if(!empty($_GET['id']))
    {
      include_once('config.php');
      $id = $_GET['id'];

      $sqlSelect = "SELECT * FROM historico_cadastros WHERE id='$id'";

      $resultado = $conexao->query($sqlSelect);

      if($resultado->num_rows > 0)
      {
        while($user = mysqli_fetch_assoc($resultado))
        {
        $id  = $user['id'];
        $nome = $user['nome'];
        $cpf = $user['cpf'];
        $email = $user['email'];
        $data_nasc = $user['data_nasc'];
        $telefone = $user['telefone'];
        $cep = $user['cep'];
        $bairro = $user['bairro'];
        $rua = $user['rua'];
        $cidade = $user['cidade'];
        $estado = $user['estado'];
      
        }
      }
      else
      {
        header('Location: historico-cadastro.php');
      }  
    }
      else
    {
       header('Location: historico-cadastro.php');
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

<body>
<section id="container_cadastro">   
   <h1 id="titulo_h1">Cadastro de Clientes</h1>
    <section id="seccao_cadastro">

          <form  action="salva-edicao.php" method="POST" id="cadastro">

            <div class="esquerda">
            
            <label for="nome" class="espaco">Nome:</label> 
            <input type="text" name="nome" value="<?php echo $nome ?>"   id="nome" size="35"> 
            
            <label for="cpf" class="espaco">CPF:</label> 
            <input type="text" name="cpf" value="<?php echo $cpf ?>" id="nome" > 
            
            <label for="data_nasc" class="espaco">Data de nascimento:</label> 
            <input class="data" type="date" name="data_nasc" value="<?php echo $data_nasc ?>" id="nome"> 

            </div>

             <div class="centro">

             <label for="email" class="espaco">E-mail:</label> 
            <input type="text" name="email" value="<?php echo $email ?>"  id="email" size="35">
            

            <label for="telefone" class="espaco">Telefone:</label> 
            <input type="text" name="telefone" value="<?php echo $telefone ?>" id="telefone">
      
            <label class="espaco">CEP:</label> 
            <input type="text" name="cep"  id="cep" size="26"  value="<?php echo $cep ?>"  maxlength="9" onblur="pesquisacep(this.value);">
            
             </div>
           
            <div class="esquerda">
            <label class="espaco">Bairro:</label>
            <input type="text" name="bairro"  value="<?php echo $bairro ?>" id="bairro" >
          
            <label class="espaco">Rua(complemento):</label>
            <input  type="text" name="rua" value="<?php echo $rua ?>"  id="rua" >
      
           
            <label class="espaco">Cidade:</label>
            <input type="text"  name="cidade" value="<?php echo $cidade ?>"   id="cidade" >
            
            <label class="espaco">Estado:</label>
            <input type="text" name="estado" value="<?php echo $estado ?>" id="uf" size="7">
         

            </div>

            <input type="hidden" name="id" value="<?php echo $id?>">
            
            <div class="botao_cadastro">
            <input type="submit" name="update"  value="Atualizar" class="botao_estilo">
            </div> 
        
          </form> 
      
        </section>

        </section> 

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    
        
</body>
</html>