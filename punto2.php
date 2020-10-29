<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Punto 2</title>
</head>
<body class="fondo">
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Trabajo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="punto1.php">Operaciones <span class="sr-only">(current)</span></a>
      </li> 
      <li class="nav-item active">
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
    <main>
        <div class="container">
            <div class="row justify-content-center">
            

                <div class="col-12 col-md-5">
                <br>
      <br>
                <h2>Enunciado:</h2>
                <p>&#x25aa;&#xfe0e; El gimnasio Bodytech, lo contrata para desarrollar una
aplicación web que permita a sus usuarios calcular el índice
de masa corporal basado en el formula:</p>

<div class="centro">
<p>El 𝐼𝑀𝐶 se encuentra con la siguiente formula:</p>


<p>𝑃𝐸𝑆𝑂
</p>
<hr width="150">
<p>
𝐴𝐿𝑇𝑈𝑅𝐴 ∗ 𝐴𝐿𝑇𝑈𝑅𝐴
</p>
</div>


<p>
Tenga en cuenta que la clasificación del IMC es la siguiente:
</p>


<img src="img/pesos.jpg" alt="pesos" class="w-100">

                </div>

<div class="col-md-2 linea">
  
</div>


              <div class="col-12 col-md-5">
              <br>
      <br>
      


            <form action="punto2.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Peso:</label>
    <input type="decimal" class="form-control" id="peso" name="peso">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Altura</label>
    <input type="text" class="form-control" id="altura" name="altura">
  </div>

  <div class="form-group">
  <button type="submit" class="btn btn-primary" name="calcular">Calcular IMC</button>

  </div>
  <?php

if(isset($_POST["calcular"])){
    $peso=$_POST["peso"];
    $altura=$_POST["altura"];
    $imc=$peso/($altura*$altura);
    echo("Su peso es de: ".$imc);
    echo(" = ");
    if($imc<18.5){
        echo("Peso unsuficiente");
    }
    elseif($imc>=18.5 && $imc<=24.9){
        echo("Normopeso");
    }
    elseif($imc>=25 && $imc<=26.9){
        echo("Sobrepeso grado I");
    }
    elseif($imc>=27 && $imc<=29.9){
        echo("Sobrepeso grado II (preobesidad)");
    }
    elseif($imc>=30 && $imc<=34.9){
        echo("Obesidad de tipo I");
    }
    elseif($imc>=35 && $imc<=39.9){
        echo("Obesidad de tipo II");
    }
    elseif($imc>=40 && $imc<=49.9){
        echo("Obesidad de tipo III (mórbida)");
    }
    elseif($imc>50){
        echo("Obesidad de tipo IV (extrema)");
    }
}
?>
 
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