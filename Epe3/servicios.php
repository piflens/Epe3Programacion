<!doctype html>
<html lang="en">
  <head>
    <title>CRUD</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script>
  </head>
  <body>
     
  <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <br> Síguenos en:
                <a href="https://www.instagram.com/sernaturchile/ "><img src="images/iconos/logotipo.png"></a>&nbsp;
                <a href="https://www.facebook.com/SernaturChile/ "> <img src="images/iconos/facebook.png"></a>
            </div>
            <div class="col-sm-2">

            </div>
            <div class="col-sm">
                <img src="images/logo/logo.jpg" class="img-fluid rounded " width="280 ">
            </div>
            <div class="col-sm-2">

            </div>
            <!--Se utiliza el kbd para darle el aspecto de estar encerrado aunque tambien se pudo haber hecho con un alert que le da un toque similar o con el breadcrumb-->
            <div class="col-sm">
                <br>
                <i class="fas fa-phone"></i>+56979331178
            </div>
        </div>
    </div>
    <div class="container-fluid ">

        <nav class="nav justify-content-center bg-secondary  ">
            <a class="nav-link text-warning " href="index.html">Inicio</a>
            <a class="nav-link text-warning " href="quienesSomos.html">Quienes Somos</a>
            <a class="nav-link text-warning " href="galeria.html">Galería</a>
            <a class="nav-link text-warning " href="servicios.html">Servicios</a>
            <a class="nav-link text-warning " href="contacto.html">Contacto</a>
            <a class="nav-link text-warning " href="foro.html">Foro</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="input-group-append">
                <span class=" "><i class="fa fa-user text-warning"></i>
                <a href="login.html"><button  type="submit" class="btn btn-default ml-sm- btn-warning">Mi cuenta</button></a>
                </span>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <div class="input-group-append">
                <span class=" "><i class="fa fa-edit text-warning"></i>
            <a href="loginadmin.html"><button  type="submit" class="btn btn-default ml-sm- btn-warning">Administrar</button></a>
            </span>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <form method="post" action="cerrarsesion.php">
                <div class="input-group-append">
                    <span class=" "><i class="fas fa-sign-out-alt     text-danger"></i>
            <a href="loginadmin.html"><button  type="submit" class="btn btn-default ml-sm- btn-danger">Cerrar sesion</button></a>
            </span>
                </div>
            </form>
        </nav>
    </div><br><br><br>

  
  


  <?php
  include 'conexion.php';
  $sql="select *from servicio";
  $resultado=mysql_query($sql);

  
  ?>

<div class="container">
<table class="table table-warning table-bordered responsive-sm" >
<thead>
<tr>
<th>CODIGO</th>
<th>EMPRESA</th>
<th>SERVICIO</th>
<th>CORREO</th>
<th>PRECIO</th>
<th>ACCIONES</th>
</tr>
</thead>

<tbody>
<?php while ($filas=mysql_fetch_assoc($resultado)){




   ?>
<tr>
<td><?php echo $filas['cod'] ?> </td>
<td><?php echo $filas['empresa']?></td>
<td><?php echo $filas['tipo']?></td>
<td><?php echo $filas['correo']?></td>
<td><?php echo $filas['precio']?></td>
<td>
<a type="button" class=" btn btn-primary" href="modificar.php?id=<?php echo $filas['cod'] ?> ">Modificar</a>
<a type="button" class="btn btn-danger" href="eliminar.php?id=<?php echo $filas['cod'] ?>">Eliminar</a>
</td>
</tr>


<?php } ?>

</tbody>


</table>
<a type="button" class="btn btn-success " href="registrarServicio.html">Atrás</a>















</div>







  <!--footer-->
    <br><br><br><br><br><br><br><br><br><br><br>
    
    <!--con el fiexd bottom se tira para abajos-->
    <footer>
        <div class="container-fluid bg-secondary ">
            <div class="row">
                <!--redes sociales-->
                <div class="col-sm">
                    <h4>Horario de Apertura</h4>
                    <hr>
                    <div class="col-sm">
                        <i class="fas fa-clock"></i> Lunes a Viernes: <b>9:00-18:00</b>
                    </div>
                    <br>
                    <div class="col-sm">
                        <i class="fa fa-copyright"></i> 2020 Macanudos Todos los Derechos Reservados. Diseñado por Alexis Alcaino, Cristopher Gonzalez, Felipe Salinas, Cristobal Castro.
                    </div>
                </div>
                <!-- Logo de la pagina-->
                <div class="col-sm text-center">
                    <div class="center">
                        <div class="col-sm">
                            <img src="images/logo/logo.jpg" class="img-fluid rounded " width="250 ">
                        </div>
                    </div>
                    <div class="col-sm">
                        <h4>Ubícanos</h4>
                    </div>

                    <div class="col-sm text-dark">
                        <i class="fas fa-map-marker-alt"></i>
                        <a href="mapa.html">
                            <div class="text-dark">
                                Av. Francisco Bilbao 7202, Las Condes, Región Metropolitana, Chile </div>
                        </a>
                    </div>
                    <div class="col-sm">
                        <i class="fas fa-phone fa-lg fa-fw "></i>
                        <p>+569967293</p>
                    </div>

                </div>

                <!-- contacto de telefono   -->
                <div class="col-sm">
                    <div class="col-sm">
                        <h5>Suscríbete</h5>
                        <hr>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="email" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Ingresa tu correo">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default ml-sm- btn-dark">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>








<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>





  </body>
</html>