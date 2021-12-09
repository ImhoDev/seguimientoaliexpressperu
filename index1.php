<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SEGUIMIENTO ALIEXPRESS opcion 1</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
  <!-- Bootstrap core CSS -->
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="text-center">
  <div>
    <form action="index.php" method="POST">
      <img class="mb-4" src="/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">SEGUIMIENTO ALIEXPRESS</h1>
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" name="guiax" placeholder="BGLXXXXXXXXXXXMU">
        <label for="floatingInput">Guia</label>
        <br>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Seguimiento</button>
    </form>
  </div>
  <?php
  if (!$_GET){ 
    for ($i=1;$i<=10;$i++){ 
      echo "<br><a href='index1.php?tabla=$i'>Ver la tabla del $i</a>\n"; 
    } 
  } else { 
    $tabla=$_GET["tabla"]; 
    ?> 
    <table align=center border=1 cellpadding="1"> 
      <?php  
      for ($j=0;$j<=10;$j++){ 
        echo "<tr><td>$tabla X $j</td><td>=</td><td>" . $tabla * $j . "</td></tr>\n"; 
      } 
      ?>
    </table> 
    <?php
  } 
  ?>  
</body>
</html>