<!doctype html>
  <html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Guia Conversor Aliexpress">
    <meta name="generator" content="Lorem-dev 0.1">
    <title>SEGUIMIENTO ALIEXPRESS</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
  </head>
  <body class="text-center">
    <?php
    $guia = $_GET["guiax"];
        //$canio = "https://global.cainiao.com/detail.htm?mailNoList=";
        //$canio = $canio.$guia;
        //$mailam = "https://mailamericas.com/tracking?tracking=";
        //$mailam = $mailam.$guia;
        //$track17 = "https://t.17track.net/en#nums=";
        //$track17 = $track17.$guia;
        //$urbano = "https://app.urbano.com.pe/plugin/etracking/etracking/?guia=BGL";
        //$urbano = $urbano.$guia;
        //$sunat = "https://ww3.sunat.gob.pe/ol-ad-itimportafacilmc/DepConsulta.htm?action=cargarDepConsultaEstado";

    echo "<p> "; 
    ?>
    <main class="form-signin">
      <form action="index2.php" method="GET">
        <img class="mb-4" src="/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">SEGUIMIENTO ALIEXPRESS</h1>
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingInput" name="guiax" placeholder="BGLXXXXXXXXXXXMU">
          <label for="floatingInput">Guia</label>
          <br>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Seguimiento</button>
      </form>

      <p class="mt-5 mb-2 text-muted">Guia-conv v0.1 &copy; 2020–2021</p>

      <a href=""></a>
    </main>
    <?php

    if (!$_GET) {
      echo "<br><div class='alert alert-danger' role='alert'>N° de guia vació</div>";
    }
    else{
      //añadir nombre y url a convertir
      $guiafinal = array(
        "canio" => "https://global.cainiao.com/detail.htm?mailNoList=",
        "mailamericas" => "https://mailamericas.com/tracking?tracking=",
        "track17" => "https://t.17track.net/en#nums=",
        "urbano" => "https://app.urbano.com.pe/plugin/etracking/etracking/?guia=BGL",
        "Solo Urbano" => "https://app.urbano.com.pe/plugin/etracking/etracking/?guia=",
        "Solo Urbano 1" => "https://portal.urbano.com.pe/rastrear-shipper/",
        "sunat" => "https://ww3.sunat.gob.pe/ol-ad-itimportafacilmc/DepConsulta.htm?action=cargarDepConsultaEstado"
      );
      //formato de tabla para mostrar
      print "<div class='container row d-flex'>
      <table class='table'>
      <thead>
      <tr>
      <th scope='col'>Track por: </th>
      <th scope='col'>Guia</th>
      <th scope='col'>Link</th>
      </tr>
      </thead>
      <tbody>";
      // ciclo que recorre e imprime cada registro de la matriz $guiafinal
      foreach ($guiafinal as $transport => $link) {
        //formato de tabla
        print "<tr>
        <th scope='row'>$transport</th>
        <td>$guia</td>
        <td><a href='$link$guia' target='_blank'>$link$guia</a></td>
        </tr>";
      }
      print "</tbody>
      </table>";
    };
    /*
    
    <div class="container row d-flex">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Track por: </th>
            <th scope="col">Guia</th>
            <th scope="col">Link</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Canio</th>
            <td><?php echo $guia ?></td>
            <td><a href="<?php echo $canio ?>" target="_blank"><?php echo $canio ?></a></td>
          </tr>
          <tr>
            <th scope="row">Mailamericas</th>
            <td><?php echo $guia ?></td>
            <td><a href="<?php echo $mailam ?>" target="_blank"><?php echo $mailam ?></a></td>
          </tr>
          <tr>
            <th scope="row">17TRACK</th>
            <td><?php echo $guia ?></td>
            <td><a href="<?php echo $track17 ?>" target="_blank"><?php echo $track17 ?></td>
            </tr>
            <tr>
              <th scope="row">URBANO</th>
              <td><?php echo "BGL".$guia ?></td>
              <td><a href="<?php echo $urbano ?>" target="_blank"><?php echo $urbano ?></td>
              </tr>
              <tr>
                <th scope="row">Sunat - CONSULTA ENVIOS POSTALES</th>
                <td><?php echo $guia ?></td>
                <td><a href="<?php echo $sunat ?>" target="_blank">Ingresar guia manualmete</td>
                </tr>
              </tbody>
            </table>
            <p>lista terminada</p>
          </div>
          <footer class="fixed-bottom">
            <p class="text-muted"><a style="text-decoration:none" href="https://github.com/ImhoDev/guiaconversor">Proyecto en guihub</a></p>
          </footer>  
        </body>
        </html>
        */
      ?>