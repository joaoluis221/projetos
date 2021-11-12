<?php
$nome = $_POST['txtnome'];
$turma = $_POST['txtturma'];
$comentario = $_POST['txtcomentario'];

echo "<h1>Comentário</h1>";
echo "<p>Nome: $nome</p>";

$sql = "INSERT into comentarios 
     (nome, turma, comentario) 
    VALUES 
     ('$nome', '$turma', '$comentario')";

$conexao = new PDO('mysql:host=192.168.15.2;dbname=pessoal', 'root', '');

$conexao->exec($sql);

echo "<p>Gravado com sucesso</p>";
$sql = "SELECT * FROM comentarios";
$conexao = new PDO('mysql:host=192.168.15.2;dbname=pessoal','root','');
$resultado = $conexao->query($sql);
$lista = $resultado->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DevFolio Bootstrap Portfolio Template - Blog Single</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: DevFolio - v4.6.0
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

 
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">DevFolio</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
          <li><a class="nav-link scrollto" href="#about">Sobre</a></li>
          <li><a class="nav-link scrollto" href="#services">Entretenimento</a></li>
          <li><a class="nav-link scrollto " href="#blog">Pessoal</a></li>
          <li><a class="nav-link scrollto" href="#contact">Comentarios</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

            <div class="box-comments">
              <div class="title-box-2">
                <h4 class="title-comments title-left">Comentarios</h4>
              </div>
              <ul class="list-comments">
                <li>
                  <div class="comment-avatar">
                    <img src="assets/img/testimonial-2.jpg" alt="">
                  </div>
                  <div class="comment-details">
                    <h4 class="comment-author">Oliver Colmenares</h4>
                    <span>18 Sep 2017</span>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                      ipsam temporibus maiores
                      quae natus libero optio, at qui beatae ducimus placeat debitis voluptates amet corporis.
                    </p>
                    <a href="3">Reply</a>
                  </div>
                </li>
                <li>
                  <div class="comment-avatar">
                    <img src="assets/img/testimonial-4.jpg" alt="">
                  </div>
                  <div class="comment-details">
                    <h4 class="comment-author">Carmen Vegas</h4>
                    <span>18 Sep 2017</span>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                      ipsam temporibus maiores
                      quae natus libero optio, at qui beatae ducimus placeat debitis voluptates amet corporis,
                      veritatis deserunt.
                    </p>
                    <a href="3">Reply</a>
                  </div>
                </li>
                <li class="comment-children">
                  <div class="comment-avatar">
                    <img src="assets/img/testimonial-2.jpg" alt="">
                  </div>
                  <div class="comment-details">
                    <h4 class="comment-author">Oliver Colmenares</h4>
                    <span>18 Sep 2017</span>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                      ipsam temporibus maiores
                      quae.
                    </p>
                    <a href="3">Reply</a>
                  </div>
                </li>
                <li>
                  <div class="comment-avatar">
                    <img src="assets/img/testimonial-2.jpg" alt="">
                  </div>
                  <div class="comment-details">
                    <h4 class="comment-author">Oliver Colmenares</h4>
                    <span>18 Sep 2017</span>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                      ipsam temporibus maiores
                      quae natus libero optio.
                    </p>
                    <a href="3">Reply</a>
                  </div>
                </li>
              </ul>
            </div>
            <div class="form-comments">
              <div class="title-box-2">
                <h3 class="title-left">
                  Deixe uma mensagem
                </h3>
              </div>
              <form class="form-mf">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <input type="text" class="form-control input-mf" id="inputName" placeholder="Nome *" required>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <input type="email" class="form-control input-mf" id="inputName" placeholder="Sobrenome *" required>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="url" class="form-control input-mf" id="inputUrl" placeholder="Turma *">
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <textarea id="textMessage" class="form-control input-mf" placeholder="Comentario *" name="message" cols="45" rows="8" required></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <button type="submit" class="button button-a button-big button-rouded">Enviar mensagem</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          

  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>Jo�o Luis Da Silva</strong>. Todos os direitos reservados</p>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
            -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>