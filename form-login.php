
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de entrada</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <section id="container_login">
    <div class="login_box">
       <form action="testelogin.php" method="POST" id="form">
        <h2 class="titulo_h2">Login</h2>
        <div class="input_box">
        <span class="icon">
        <ion-icon name="mail">
        </ion-icon>
        </span>
        
        <input type="email" name="email" id="email" class="mensagem" required>
        <label>Email</label>
        </div>
        <div class="input_box">
        <span class="icon">
            <ion-icon name="lock-closed">    
            </ion-icon> 
        </span>
        <input type="password"  id="senha" name="senha" class="mensagem" required>
        <label>Senha</label>
        </div>
       
        <button id="botao" class="botao_login" type="submit" name="submit">Login</button>
       
        
       </form>
    </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
   
   
</body>
</html>