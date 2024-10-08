<?php
<<<<<<< HEAD
require_once('config/connection.php');
$result = pg_query($cn, "select * from dados");
=======
  require_once('config/connection.php');
  $result = pg_query($cn,"select * from dados");
>>>>>>> 3c0ad53bc7a01a679210f88369d7294750ff38e8
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dados Pessoais</title>
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
        <h1>Dados pessoais manipulados<span>.</span></h1>
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
          <h2>Dados Pessoais</h2>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <img src="assets/img/pag2.png" class="img-fluid rounded-4 mb-4" alt="">
          </div>

          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Veja quais dados pessoais são coletados e a origem desses dados:
              </p>
<<<<<<< HEAD
              <?php
              while ($row = pg_fetch_object($result)) {
              ?>
                <p class="fst-italic">
                  Dado pessoal:
                </p>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i><?php echo $row->descricao; ?></li>
                  <b>Detalhamento: </b><?php echo $row->detalhamento; ?>
                  <br>
                  <b>Recurso: </b><?php echo $row->recurso; ?>
                  <br>
                  <b>Ações: </b><?php echo $row->acoes; ?>
                  <br>
                  <br>
                <?php
              }
                ?>
                </ul>
=======
                <?php
                  while($row = pg_fetch_object($result)){
                ?>
              <p class="fst-italic">
                Dado pessoal:
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i><?php echo $row->descricao; ?></li>
                <b>Detalhamento: </b><?php echo $row->detalhamento;?>
                <br>
                <b>Recurso: </b><?php echo $row->recurso; ?>
                <br>
                <b>Ações: </b><?php echo $row->acoes; ?>
                <br>
                <br>
                <?php
                }
                ?>
              </ul>
>>>>>>> 3c0ad53bc7a01a679210f88369d7294750ff38e8
            </div>
          </div>

          <div class="row gy-4">
            <div class="content ps-0 ps-lg-5">
              <div class="justify-content-center">
                <b>Base legal para manipulação dos dados</b>
              </div>
              <p class="fst-italic">
                A coleta e manipulação de seus dados é feita conforme as seguintes leis:
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Lei nº 12.527, de 18 de novembro de 2011: Lei de Acesso à Informação – Regula o acesso a informações previsto na Constituição Federal.</li>
                <li><i class="bi bi-check-circle-fill"></i> Lei nº 13.460, de 26 de junho de 2017: Dispõe sobre participação, proteção e defesa dos direitos do usuário dos serviços públicos da administração pública.</li>
                <li><i class="bi bi-check-circle-fill"></i> Lei nº 13.709, de 14 de agosto de 2018: Dispõe sobre o tratamento de dados pessoais, inclusive nos meios digitais, por pessoa natural ou por pessoa jurídica de direito público ou privado, com o objetivo de proteger os direitos fundamentais de liberdade e de privacidade e o livre desenvolvimento da personalidade da pessoa natural.</li>
              </ul>
              </p>
            </div>
          </div>

          <div class="row gy-4">
            <div class="col-lg-6">
              <div class="content ps-0 ps-lg-5">
                <div class="justify-content-center">
                  <b>Período de manipulação de seus dados</b>
                </div>
                <p>
                  Seus dados pessoais serão manipulados desde o momento do início do uso do aplicativo até sua eventual desinstalação.
                </p>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="content ps-0 ps-lg-5">
                <div class="justify-content-center">
                  <b>É obrigado a ceder os dados pessoais?</b>
                </div>
                <p>
                  Sim, pois a aplicação visa gerenciar e disponibilizar informações sobre acesso a serviços de saúde, assim faz-se necessário
                  obter, armazenar e compartilhar seus dados.
                </p>
              </div>
            </div>

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
