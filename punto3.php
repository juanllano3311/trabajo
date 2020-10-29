<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
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
      <li class="nav-item">
        <a class="nav-link" href="punto2.php">IMC</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="putno3.php">Tienda</a>
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
          <p>&#x25aa;&#xfe0e; Codificar un programa en PHP para la tienda Spring Step que
tiene una promoción de descuento, esta dependerá del número de
zapatos que se compren.</p>

  <p>&#x2326; Si son 3 pares se les dará un 10% de descuento al cliente
sobre el total de la compra;</p>

<p>&#x2326; Si el número de zapatos es mayor 3 pares, pero menor o
igual de 8 pares, se le otorga un 20% de descuento
</p>
<p>&#x2326; si son más 8 pares de zapatos se otorgará un 50% de
descuento. Defina la cantidad de variables que necesite,
el costo de cada par de zapatos y establezca el valor
total de la compra de zapatos.
</p>

        </div>


        <div class="col-md-2 linea">
  
  </div>
<div class="col-12 col-md-5">
<br>
      <br>

        <form action="punto3.php" method="POST" class="mg-top 25">
  <div class="form-group">
    <label for="exampleInputEmail1">Cantidad de pares:</label>
    <input type="number" class="form-control" placeholder="Digite pares" name="pares">
    </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Valor de la compra</label>
    <input type="number" class="form-control" placeholder="Digite el valor de la compra" name="valor">
</div>

  <button type="submit" class="btn btn-primary" name="calcular">Calcular</button>
  <div>

<div>

<?php if(isset($_POST["calcular"])):?>
    <?php 
        $pares=$_POST["pares"];
        $valor=$_POST["valor"];
        $des=0;
        $total=0;
        $vdes=0;
        ?>
        
            <?php if($pares==3):?>
                <?php
                $vdes=10;
                $des=($valor*10)/100;
                $total=$valor-$des;
                ?>
               
            <?php endif?>
            <?php if($pares>3 && $pares<=8):?>
                <?php
                $vdes=20;
                $des=($valor*20)/100;
                $total=$valor-$des;
                ?>
                
            <?php endif?>
            <?php if($pares>8):?>
                <?php
                $vdes=50;
                $des=($valor*50)/100;
                $total=$valor-$des;
                ?>
                
                
            <?php endif?>
            <h3>Tuvo un descuento del <?php echo($vdes)?>%</3>
                <h3>El total de la compra es: <?php echo($total)?></h3>

<?php endif?>


</form>

             
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