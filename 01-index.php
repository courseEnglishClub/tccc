<?php
session_start();

if (isset($_POST['Email']) || isset($_POST['Senha'])) {

  if (strlen($_POST['Email']) == 0) {
      echo "Preencha seu e-mail";
  } else if (strlen($_POST['Senha']) == 0) {
      echo "Preencha sua senha";
  } else {
      include('verificacaologin.php');
  }
}
?>

<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login</title>
      <link rel="stylesheet" href="style (1).css">
      <script src="Cad.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  </head>
  <body style="display:flex; align-items:center; justify-content:center;">
  


  <div class="landing-page">
  <header>
    <div class="landing-page">
      <div class="container">
        <a href="#" class="logo">English <b>Club</b></a>
      </div>
    </header>
</div>

<div class="login-page">


    <div class="form">
      <form class="register-form" method="POST" action="cadastro.php">
        <h2>Registrar</h2>
        <input type="text" placeholder="Nome Completo*" name="NomeCompleto" id="NomeCompleto"required/>
        <input type="email" placeholder="Email *" name="Email" id="email"required/>
        <input type="password" placeholder="Senha *" name="Senha" id="senha"required/>
        <button class="btn" href="#">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          Criar
        </button>
      </form>
      <form class="login-form" method="POST">
        <h2>Login</h2>
        <input type="email" placeholder="Email" name="Email" id="Email"required />
        <input type="password" placeholder="Senha" name="Senha" id="Senha"required/>
        <button type="submit" class="btn" method="POST" href="02-index.html">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          Entrar
        </button>
        <p class="message">Ainda não registrado? <a href="#">Criar sua conta</a></p>
      </form>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 
  <script>
     $('.message a').click(function(){
     $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
        });
</script>



  </body>
  </html>