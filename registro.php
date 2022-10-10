
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulta db</title>
    <style type="text/css">
     
      table {
        border: solid 2px #7e7c7c;
        border-collapse: collapse;
                     
      }
     
      th, h1 {
        background-color: #edf797;
      }

      td,
      th {
        border: solid 1px #7e7c7c;
        padding: 2px;
        text-align: center;
      }


    </style>
</head>
<body>
    
</body>
</html>


<?php
//validamos datos del servidor
$user = "2394049_art";
$pass = "Reboredo1.";
$host = "fdb16.awardspace.net";

//conetamos al base datos
$connection = mysqli_connect("fdb16.awardspace.net", "2394049_art", "Reboredo1.");

//hacemos llamado al imput de formuario
$nombre = $_POST["nombre"] ;
$apellido = $_POST["apellido"] ;
$email = $_POST["email"] ;
$telefono = $_POST["telefono"] ;
$mensaje = $_POST["mensaje"] ;
$nacimiento = $_POST["nacimiento"] ;



//verificamos la conexion a base datos
if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            echo "<b><h3>Hemos conectado al servidor</h3></b>" ;
        }
        //indicamos el nombre de la base datos
        $datab = "2394049_art";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($connection,"2394049_art");

        if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        else
        {
        echo "<h3>Tabla seleccionada:</h3>" ;
        }
        //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
        $instruccion_SQL = "INSERT INTO  contactos (nombre , apellido,  email , telefono , mensaje , nacimiento)
                             VALUES ('$nombre' , '$apellido' , '$email' , '$telefono' , '$mensaje' , '$nacimiento' )";
                           
                           $insert = "INSERT INTO contactos (setDate) VALUES (now())";

                          

        $resultado = mysqli_query($connection,$instruccion_SQL);

        //$consulta = "SELECT * FROM tabla where id ='2'"; si queremos que nos muestre solo un registro en especifivo de ID
        $consulta = "SELECT * FROM  contactos";

        

        

mysqli_close( $connection );

   //echo "Fuera " ;
   echo'<a href="index.html"> Volver Atrás</a>';


?>