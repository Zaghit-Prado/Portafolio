<?php
require("Global/conexion.php");
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="shortcut icon" type="image/icon" href="favicon.png" />
  <?php
    global $pag;
    $pag = $_GET['pag'];
    $consulta = $conn->query("SELECT * FROM `turismo` WHERE lugar = '$pag';");
    while ($fila = $consulta->fetch_array()) {

    ?>
  <title>CityTours-Turistico - <?php echo utf8_encode($fila['lugar']); ?>.</title>

  <?php
    }
?>
  <!-- CSS files -->
  <link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
  <link href="./assets/css/tabler.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/foter.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="pre.css">

</head>

<body>
  <div class="loader">
    <img loading="lazy" src="img/peru.gif" width="200" height="200">
  </div>

  <div class="page">
    <style>
      .logo a,
      .logo a:hover,
      .logo a:focus {
        color: rgb(0, 0, 0);
        font-size: 24px;
        font-family: 'Poppins', sans-serif;
        text-transform: capitalize;
        font-weight: 600;
        margin: 14px 0px 0;
        padding: 10px 0 0 0;
      }

      .logo a span {
        color: #ad0404;
        text-transform: capitalize;
      }
    </style>
    <?php
    global $pag;
    $pag = $_GET['pag'];
    $consulta = $conn->query("SELECT * FROM `turismo` WHERE lugar = '$pag';");
    while ($fila = $consulta->fetch_array()) {

    ?>
      <div class="page-wrapper">
        <div class="container-xl">
          <!-- Page title -->
          <div class="page-header d-print-none">
            <div class="row align-items-center">
              <div class="col">
                <div class="logo">
                  <a href="index.php">
                    City<span>Tours</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="contenedor">
          <div class="col-md-12">
            <img loading="lazy" src="<?php echo $fila['img']; ?>" width="100%" height="auto">
            <div class="centrado"><?php echo utf8_encode($fila['lugar']); ?></div>
            <h2 class="centrado1"><?php echo utf8_encode($fila['subtitulo']); ?></h2>
          </div>
          <style>
            .contenedor {
              position: relative;
              display: inline-block;
              text-align: center;
            }


            .centrado {
              position: absolute;
              top: 50%;
              left: 20%;
              transform: translate(-50%, -50%);
              font-size: 600%;
              font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
              color: #fff;

            }

            .centrado1 {
              position: absolute;
              top: 60%;
              left: 33%;
              transform: translate(-50%, -50%);
              font-size: 200%;
              font-family: Haettenschweiler, 'Arial Narrow Bold', sans-serif;
              color: #fff;

            }
          </style>

        </div>
        <div class="page-body">
          <div class="container-xl">
            <div class="card card-lg">
              <div class="card-body " style="padding: 3rem;">
                <div class="row g-4">
                  <div class="col-12 markdown">
                    <p><?php echo utf8_encode($fila['text']); ?></p>
                  </div>
                  <div class="col-12 markdown">
                  <?php echo $fila['insta']; ?>
                  </div>
 
  <div class="col-12 markdown">
                    <h1 style="font-size: 2rem;"><?php echo utf8_encode($fila['subtitulo1']); ?></h1>
                    <p><?php echo utf8_encode($fila['text1']); ?></p>
                  </div>
                  <iframe width="100%" height="450" src="<?php echo $fila['vid']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <div class="col-12 markdown">
                    <h1 style="font-size: 2rem;"><?php echo utf8_encode($fila['subtitulo2']); ?></h1>
                    <p><?php echo utf8_encode($fila['text2']); ?></p>
                  </div>
                

  <div class="col-12 markdown">
                    <iframe src="<?php echo utf8_encode($fila['ubic']); ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>





                  



                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
  </div>
<?php
    }
?>
<div class="footer-basic">
  <footer>
    <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Home</a></li>
      <li class="list-inline-item"><a href="#">Services</a></li>
      <li class="list-inline-item"><a href="#">About</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
    </ul>
    <p class="copyright">Company Name © 2018</p>
  </footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<script src="pre.js" charset="utf-8"></script>
</body>

</html>