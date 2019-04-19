<?php

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="css/estilos.css">
     <title>FREESTYLE | LOG IN</title>
   </head>
   <body class="login">
     <div class="container">
       <h1 class="titulo">FREESTYLE</h1>
       <div class="login">
          <form class="form-inline" action="/action_page.php">
               <label for="usuario" class="mb-4 mr-sm-4">Usuario:</label>
                 <input type="text" class="form-control mb-4 mr-sm-4" id="usuario" placeholder="Introduce tu Usuario" name="usuario">
               <label for="pass" class="mb-4 mr-sm-4">Contraseña:</label>
                 <input type="text" class="form-control mb-4 mr-sm-4" id="pass" placeholder="Introduce tu Contraseña" name="pass">
            <div class="form-check mb-4 mr-sm-4">
               <label class="form-check-label">
                 <input type="checkbox" class="form-check-input" name="remember"> Recordar mi usuario
               </label>
           </div>
           <button type="submit" class="btn btn-success mb-4">Submit</button>
        </form>
      </div>
      <p class="foot">Aun no estas registrado? <a href="#registro">Registrate Aqui</a></p>
     </div>
   </body>
 </html>
