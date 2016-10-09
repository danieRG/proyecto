<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/bootstrap.js"></script>
	
</head>
<body>
	<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Inicio</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="subir.php">Subir</a>
                    </li>
                </ul>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="materias.php">Materias</a>
                    </li>
                </ul>
            </div>            
            <!-- /.navbar-collapse -->
        </div>
       </div>

        <!-- /.container -->
    </nav>
    <!-- /.Navigation -->
<br><br><br>


<div class="container">
    <br><br>
      <div class="starter-template">
        <h1>Materia Nueva</h1>
        <form method="POST" action="">
         <table>
          <tr><td>Nombre</td><td><input type="name" name="materia"/></td></tr>
          <tr><td>numero</td><td><input type="name" name="numero"/></td></tr>
          <tr><td>Grado</td><td><input type="name" name="grado"/></td></tr>
         <tr> <td>Asesor acádemico</td><td><input type="name" name="asesor"/></td></tr>

          
          </table>

          <input type="submit" name="submit"  value="Registro">
          <input type="reset">
          
          </form>

          <?php 
          if (isset($_POST['submit'])){

            require ("consulta.php");
          }

          ?>

          <br><br>
          
    </div><!-- /.container -->




</form>
</body>
</html>