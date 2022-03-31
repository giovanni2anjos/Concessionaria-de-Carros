<?php

include "conexao.php";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  //echo "Connected successfully";
  
?>

<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>

  <body>

    <center>

      <br/>
      <h2>Cadastro de Usuários</h2>
      <br/>

      <!-- 
        post
        get
      -->

      <form action="cadastrarUser.php" method="post">


      <div class="container">
      <div class="row">
        <div class="col-sm">
         
                    <label>
                      Nome: <input type="text" name="nome" id="nome" maxlength="200"/> 
                    </label>
                    
                    <label>
                    Sobrenome: <input type="text" name="sobrenome" id="sobrenome" maxlength="200"/> 
                    </label>

                    <br/><br/>
                    <label>
                      Email: <input type="text" name="email" id="email" maxlength="100"/> 
                    </label>

                    <br/><br/>
                    <label>
                      Idade: <input type="text" name="idade" id="idade" maxlength="2" /> 
                    </label>

                    <br/><br/>
                    <label>
                      CPF: <input type="text" name="cpf" id="cpf" maxlength="11" /> 
                    </label>

        </div>
        <div class="col-sm">
          
                    <label>
                      Rua: <input type="text" name="rua" id="rua" maxlength="100"/> 
                    </label>

                    <br/><br/>
                    <label>
                      Bairro: <input type="text" name="bairro" id="bairro" maxlength="100"/> 
                    </label>

                    <br/><br/>
                    <label>
                      Cidade: <input type="text" name="cidade" id="cidade" maxlength="100" /> 
                    </label>

                    <br/><br/>
                    <label>
                      UF: <input type="text" name="uf" id="uf" maxlength="2" /> 
                    </label>

                    <br/><br/>
                    <label>
                      Numero: <input type="text" name="numero" id="numero" maxlength="10" /> 
                    </label>

        </div>
        <div class="col-sm">
          
                    <label>
                      Telefone: <input type="text" name="tel" id="tel" maxlength="100"/> 
                    </label>

                    <br/><br/>
                    <label>
                      Celular: <input type="text" name="cel" id="cel" maxlength="100"/> 
                    </label>

                    <br/><br/>
                    <input type="submit" value="Cadastrar" />

        </div>
      </div>
    </div>

      </form>
    
    </center>

  </body>

</html>