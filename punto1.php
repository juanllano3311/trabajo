<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body >  
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Trabajo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="punto1.php">Operaciones <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="punto2.php">IMC</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="punto3.php">Tienda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="punto4.php">Salario</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>
</header>
<main class="fondo">



<div class="container">

        <div class="row justify-content-center">
        


      <div class="col-12 col-md-5">
      <br>
      <br>
        
      
        <h2>Enunciado:</h2>

        <p>&#x25aa;&#xfe0e; Hacer un programa en PHP que permita mostrar en pantalla la
        suma, resta, multiplicación y división de dos números enteros
        almacenados en 2 variables diferentes (utilice formularios
        HTML).
        </p>
        


      </div>

      <div class="col-md-2 linea">
  
</div>


        <div class="col-12 col-md-5">
        <br>
      <br>

        <form action="punto1.php" method="POST" class="mg-top 25">
  <div class="form-group">
    <label for="exampleInputEmail1">Número 1</label>
    <input type="number" class="form-control" name="numero1">
    </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Número 2</label>
    <input type="number" class="form-control" name="numero2">
</div>

  <button type="submit" class="btn btn-primary" name="suma">Sumar</button>
  <button type="submit" class="btn btn-primary" name="resta">Restar</button>
  <button type="submit" class="btn btn-primary" name="multiplicacion">Multiplicación</button>
  <button type="submit" class="btn btn-primary" name="division">División</button>


  <div>
  <?php

if(isset($_POST["suma"])){
    $num1=$_POST["numero1"];
    $num2=$_POST["numero2"];
    $total=$num1+$num2;

    echo("la suma es: ".$total);
}
elseif(isset($_POST["resta"])){
    $num1=$_POST["numero1"];
    $num2=$_POST["numero2"];
    $total=$num1-$num2;

    echo("la resta es: ".$total);
}
elseif(isset($_POST["multiplicacion"])){
    $num1=$_POST["numero1"];
    $num2=$_POST["numero2"];
    $total=$num1*$num2;

    echo("la resta es: ".$total);
}
elseif(isset($_POST["division"])){
    $num1=$_POST["numero1"];
    $num2=$_POST["numero2"];
    $total=$num1/$num2;

    echo("la resta es: ".$total);
}
?>
</div>
</form>
  </div>
        </div>
    </div>

</main>

<footer class="footerr">
      <br>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
            <p>Juan Sebastian Llano Taborda &copy;</p>
            <p>llanotaborda@gmail.com</p>
            <p>Núm.contacto: 3007166045</p>
            <p>2020, Colombia</p>
          </div>

          <div class="col-12 col-md-2">
           <a href="https://www.facebook.com/juansebastian.llanotabordascout.5"><img src="img/facebook.png" alt="facebook" class="tamaño"></a>
            
          </div>
          <div class="col-12 col-md-2">
            <a href="https://www.instagram.com/j_u_a_n__s_e_b_a_s_t_i_a_n/?hl=es-la"><img src="img/instagram.png" alt="insta" class="tamaño"></a>
        </div>
        <div class="col-12 col-md-2 ">
          <a href="https://www.youtube.com/channel/UC8LRTl5zBvs76E34bw4VQug?view_as=subscriber"><img src="img/youtube.png" alt="you" class="tamaño"></a>
      </div>

        </div>
      </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>