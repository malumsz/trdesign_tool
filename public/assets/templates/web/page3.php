<?php
require_once('config/connection.php');
<<<<<<< HEAD
$result = pg_query($cn, "select * from atores");
=======
$result = pg_query($cn, "select * from propositos");
>>>>>>> 3c0ad53bc7a01a679210f88369d7294750ff38e8
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

<<<<<<< HEAD
  <title>Pessoas e Empresas</title>
=======
  <title>Propósito de uso</title>
>>>>>>> 3c0ad53bc7a01a679210f88369d7294750ff38e8
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <h1>Pessoas e Empresas<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Início</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <main id="main">

    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
<<<<<<< HEAD
          <h2>Empresas e pessoas que manipulam seus dados</h2>
=======
          <h2>Propósito de uso</h2>
>>>>>>> 3c0ad53bc7a01a679210f88369d7294750ff38e8
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <img src="assets/img/pag3.png" class="img-fluid rounded-4 mb-4" alt="">
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
<<<<<<< HEAD
                Para essa informação, é importante entender:
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> <b>Controladores:</b> Quem define o objetivo da manipulação dos dados.</li>
                <li><i class="bi bi-check-circle-fill"></i> <b>Operadores e/ou Processadores:</b> Empresas com recusos de computação que executam as ações de processar os dados pessoais.</li>
                <li><i class="bi bi-check-circle-fill"></i> <b>Destinatários:</b> Empresas ou pessoas que recebem dados pessoais compartilhados pelos controladores.</li>
                <li><i class="bi bi-check-circle-fill"></i> <b>Agência de Proteção</b>:</b> Agência de Proteção governamental que controla a manipulação de dados.</li>
=======
                Veja quais os propósitos de uso dos seus dados pessoais:
              </p>
              <ul>
                <?php
                while ($row = pg_fetch_object($result)) {
                ?>
                <li><i class="bi bi-check-circle-fill"></i><?php echo $row->descricao; ?></li>
                <b>Base legal: </b><?php echo $row->baseLegal;?>
                <br>
                <br>
                <?php
                }
                ?>
>>>>>>> 3c0ad53bc7a01a679210f88369d7294750ff38e8
              </ul>
            </div>
          </div>
        </div>

        <div class="row gy-4">
          <?php
          while ($row = pg_fetch_object($result)) {
          ?>
          <div class="card flex-row">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-check-circle-fill"></i> <?php echo $row->nome; ?></h5>
              <p class="card-text">
                <b>Tipo:</b> <?php
                            if ($row->tipo == 1){ echo "Controlador";}
                            elseif ($row->tipo == 2){ echo "Operador";}
                            elseif ($row->tipo == 3){ echo "Destinatário";}
                            elseif ($row->tipo == 4){ echo "Agência de Proteção de Dados";}
                            ?><br>
                <b>Endereço: </b> <?php echo $row->rua; echo ", "; echo "nº: ";echo $row->numero;echo ", ";echo $row->cidade;echo ", ";echo $row->estado;echo ", ";echo $row->pais;echo ", "; echo "CEP: "; echo $row->codigoPostal;?><br>
                <b>Telefone: </b> <?php echo $row->telefone; ?><br>
                <b>E-mail: </b> <?php echo $row->email; ?><br>
                <b>Responsável: </b> <?php echo $row->nome; ?><br>
                <b>Escritório de Proteção: </b> <?php echo $row->agencia; ?> <br>

            </div>
          </div>
          <?php
          }
          ?>
        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
