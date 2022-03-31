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
      <h2>Buscar Carros</h2>
      <br/>

      <!-- 
        post
        get
      -->

      <form action="carros.php" method="post">


      <div class="container">
      <div class="row">
        <div class="col-sm">
         
                    <label>
                      Cor: <input type="text" name="cor" id="cor" maxlength="200"/> 
                    </label>
                    
                    <label>
                    Marca: <input type="text" name="marca" id="marca" maxlength="200"/> 
                    </label>

                    <br/><br/>
                    <label>
                      Ano: <input type="text" name="ano" id="ano" maxlength="100"/> 
                    </label>

                    <br/><br/>
                    <label>
                      Chassi: <input type="text" name="chassi" id="chassi" maxlength="2" /> 
                    </label>

                    <br/><br/>
                    <label>
                      Status: <input type="text" name="status" id="status" maxlength="11" /> 
                    </label>

        </div>

                    <br/><br/>
                    <input type="submit" value="Carros" />

        </div>
      </div>
    </div>

      </form>
    
    </center>

  </body>

</html>