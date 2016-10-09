 <?php
include 'conexion.php'; 

$sql= "SELECT * FROM materia";
$res= mysqli_query($con,$sql);
  ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Materias</title>
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
    	        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Materias
                </h1>
            </div>
        </div>
        <!-- /.row -->
      <div class="starter-template">

      	<h4>Materias</h4>
        <table class="table table-striped">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Grado</th>
            <th>Asesor Ac&aacutedemico</th>
            <th>Ver</th>
            <th>Eliminar</th>
          </tr>
          </thead>
        
          <?php
          $contador=0;
          while ($row = mysqli_fetch_array($res))
          { ?>

              <tr>
                <td><?php echo $row['materia']; ?> </td>
                <td><?php echo $row['grado']; ?> </td>
                <td><?php echo $row['asesor']; ?> </td>
                <td><a href="verMateria.php?idmateria=<?php echo "$row[0]";?>" class="btn btn-info">Ver</a></td>
                <td><a href="eliminar?id=" class="btn btn-danger">Eliminar</a></td>
             </tr>
          <?php    
          $contador++;  
          }
          if($contador==0)
          {
            echo "<tr><td colspan='6'>No hay materias registradas</td></tr>";
          }
          ?>

        </table>
      </div>
     <br><br><a class="btn btn-success" href="agregar.php" role="button">Agregar</a>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>