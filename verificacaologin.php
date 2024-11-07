<?php

include 'conexaobd.php';


  $email = mysqli_real_escape_string($conn, trim($_POST['Email']));
  $password = mysqli_real_escape_string($conn, trim($_POST['Senha']));
  
  $sql = "SELECT * FROM cadastro WHERE Email = '$email' AND Senha = '$password'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  
  if (mysqli_num_rows($result) > 0) {
  
    if ($password == $row['Senha'] && ($email == $row['Email'] ) ) {
          if(!isset($_SESSION)) {
              session_start();
          }
          $_SESSION['Email'] = $row['Email'];
          echo "<head>
                  <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js'></script>
                  <link href='https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.min.css' rel='stylesheet'>
              </head>
              <body>
                  <script>
                      Swal.fire({
                          icon: 'success',
                          title: 'Pronto!',
                          text: 'Login realizado com sucesso',
                      }).then(function() {
                          window.location = '02-index.html';
                      });
                  </script> 
              </body>
        ";
        exit;
    }
  
  } else {
      echo "<head>
      <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js'></script>
      <link href='https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.min.css' rel='stylesheet'>
  </head>
  <body>
      <script>
          Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Email, senha e/ou tipo de usuário incorretos',
          }).then(function() {
              window.location = '01-index.php';
          });
      </script> 
  </body>
";

      exit;
  }
  
