 <?php
 session_start();
include 'conexion.php'; 
$id= $_GET['idmateria'];
$sql= "SELECT * FROM materia where idmateria =".$id;
$res= mysqli_query($con,$sql);
if($res)
{
  $dir='server/php/files/'.$_GET['idmateria'];
  if (!is_dir($dir)) {
    mkdir($dir);         
}
}else{
  die('Página no dispobible');
}
$_SESSION['idmateria']=$_GET['idmateria'];
date_default_timezone_set('America/Mexico_City');
  ?>

<!DOCTYPE html>
<html lang="es">
<head>
 <script   src="http://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
  <body>
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Subir archivos</h4>
      </div>
      <div class="modal-body">
<iframe src="subir.php" frameborder="0" width="100%" height="300"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
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
    <div class="col-lg-4">
     <form method="POST" action="" class="form-horizontal" role="form">
    



   
          <?php
          while ($row = mysqli_fetch_array($res))
          { ?>
         <div class="form-group">
         <div class="col-lg-12">
         <label>ID: </label>
         <input type="name" value="<?php echo $row['idmateria']; ?>" class="form-control" readonly name="materia"/>
         </div>
         </div>


         <div class="form-group">
         <div class="col-lg-12">
         <label>Nombre: </label>
         <input type="name" value="<?php echo $row['materia']; ?>" class="form-control" name="materia"/>
         </div>
         </div>

         <div class="form-group">
         <div class="col-lg-12">
         <label>Numero: </label>
         <input type="name" value="<?php echo $row['numero']; ?>" class="form-control"  name="numero"/>
         </div>
         </div>

         <div class="form-group">
         <div class="col-lg-12">
         <label>Grado: </label>
         <input type="name" class="form-control"  value="<?php echo $row['grado']; ?>" name="grado"/>
         </div>
         </div>

         <div class="form-group">

         <div class="col-lg-12">
         <label>Asesor académico: </label>
        <input type="name"  class="form-control"  value="<?php echo $row['asesor']; ?>" name="asesor"/>
        </div>
         </div>
         <div class="form-group">
         <div class="col-lg-5">
         </div>
         <div class="col-lg-7">


      
          <input type="submit" class="btn btn-success" name="submit"  value="Actualizar">
          <input type="reset" value="Cancelar" class="btn btn-info">
          </div>
          </div>

             
          <?php      
          }
          ?>

          </form>
          </div>
          <div class="col-lg-8">
          <h2>Videos asignados a esta materia</h2>
          <br>
          <table class="table">
          <thead>
            <tr>
              <th>Nombre del archivo</th>
              <th>Tamaño</th>
              <th>Fecha de subida</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          <?php 
          $cont=0;
          foreach (new DirectoryIterator('server/php/files/'.$_GET['idmateria'].'/') as $file) {
    if ($file->isFile()) {
        echo "<tr><td>".$file->getFilename()."</td><td>".($file->getSize()/1000)." kb</td><td>".date('Y/m/d H:i:s', $file->getCTime())."</td></tr>";
        $cont++;
    }
}

          ?>
          <?php 
          if($cont==0)
          {
            echo '<tr><td colspan="4">No se han subido archivos</td></tr>';
          }
          ?>
          
          </tbody>
          </table>
          <br><br>
          <div align="right">
          <!-- Button trigger modal -->
<a  class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Subir archivo
</a>
          </div>
          </div>
		
        
      </div>

    </div><!-- /.container -->




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  </body>
</html>