<!DOCTYPE html>
<html>
    <head>
    <title>AGUA=WATER</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <script type="text/javascript" src="js/loadWelcome.js"></script>
        <script type="text/javascript">window.onload = getWelcome;</script>

        <!-- Le styles -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/2.0.4/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/2.0.4/css/bootstrap-responsive.css" type="text/css"/>
        <link rel="stylesheet" href="style.css" type="text/css"/>

        

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        
-->
        
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#"><i>AGUA WATER</i></a>
                    <div class="btn-group pull-right">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user"></i> Idioma
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Español</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Inglés</a></li>
                        </ul>
                    </div>
                    <div class="nav-collapse">
                        <ul class="nav">
                            <li class="active"><a href="index.html">Inicio</a></li>
                            <li><a href="agua.html">Docs</a></li>
                            <li><a href="contact.html">Únete+</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span9">
                    <div class="hero-unit">
                        <div id="rest">
                            <h1><b> AGUA<i>!!!</i></b></h1><br/><h3><i>Tiene que ver con todos.</i></h3>
                               
                            
                          
                        </div>
                          
                        
                    
                    </div>
                </div>
            </div>
          
            
              <div class="row-fluid">
                        <div class="span4">                        
                            <h3>CONTACTOS</h3><br/><h3><i>aguawewater@gmail.com</i></h3><br/>dejanos saber de ti..<br/> El Agua es esencial,<br/> y debemos involucranos en la calidad de nuestras vidas<br/> la calidad del agua y su presencia son fundamentales<br/><h4><i> Únete!!!</i></h4><br/>
                            <?php 
                            date_default_timezone_set('UTC'); ?>
                         </div><!--/span-->
                                       <div class="span4">
                           <img class="thumb" src="img/unete.jpg" alt="agua es vida" width="304" height="184"/><p><h3>ÚNETE+</h3>
<form action="registro.php" method="post" name="contactos">

<p>
<label for="nombre">nombre:</label><input type="text" name="nombre" maxlength="30">
</p>
<p>
<label for="apellido">apellido:</label><input type="text" name="apellido" maxlength="30">
</p>
<p>
<label for="email">e-mail:</label><input type="text" name="email" maxlength="30">
</p>
<p>
<label for="telefono">teléfono:</label><input type="text" name="telefono" maxlength="20">
</p>
<p><label for="mensaje">mensaje:</label>
<textarea name="mensaje" id="mensaje"  maxlength="250"></textarea>
</p>
<p>  <label for="nacimiento">fecha de nacimiento</label>
    <input type="date" id="nacimiento" name="nacimiento"></p>
<!--
<p>
<input type="checkbox" name="info" checked="checked"> Deseo recibir información sobre novedades y acciones
</p> -->
<p>
<input type="submit" value="Enviar" class="btn-success" name="btn1">
</p>
</form> 




   </body>
</html>
                       