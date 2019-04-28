<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
  <!-- BASICS -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Promo</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-theme.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
  <!-- skin -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/skin/default.css">
  <!-- =======================================================
    Theme Name: Amoeba
    Theme URL: https://bootstrapmade.com/free-one-page-bootstrap-template-amoeba/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <section id="header" class="appear"></section>
  <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="fa fa-bars color-white"></span>
          </button>
        <h1><a class="navbar-brand" href="<?php echo base_url().'User/index'; ?>" data-0="line-height:90px;" data-300="line-height:50px;">ServiceAC.com</a></h1>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
          <li class="active"><a href="<?php echo base_url().'User/index'; ?>">Home</a></li>
        </ul>
      </div>
      <!--/.navbar-collapse -->
    </div>
  </div>

  <section class="featured">
    <div class="container">
      <div class="row mar-bot40">
        <div class="col-md-6 col-md-offset-3">

          <div class="align-center">
            <i class="fa fa-wrench fa-5x mar-bot20"></i>
            <h2 class="slogan">Selamat Datang di ServiceAC.com</h2>
            <p>
              Kami memiliki penyedia jasa service ac profesional dan terpercaya untuk kebutuhan Anda.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- services -->
  <section id="section-services" class="section pad-bot30 bg-white">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-lg-4">
          <div class="align-center">
            <i class="fa fa-male fa-5x mar-bot20"></i>
            <h4 class="text-bold">Profesional Team</h4>
            <p>Memiliki standart kerja yang baik dan terstruktur, membuat kami percaya diri untuk memberikan pelayanan service ac terbaik kepada anda.
            </p>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="align-center">
            <i class="fa fa-check fa-5x mar-bot20 "  aria-hidden="true"></i>
            <h4 class="text-bold">Terpercaya</h4>
            <p>Telah menjadi kepercayaan banyak orang, kami akan tetap terus berusaha memberikan pelayanan terbaik untuk anda semua.
            </p>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="align-center">
            <i class="fa fa-usd fa-5x mar-bot20"></i>
            <h4 class="text-bold">Harga Terjangkau</h4>
            <p>Selain pelayanan yang sangat maksimal, kami juga memberikan harga yang sangat terjangkau untuk anda.
            </p>
          </div>
        </div>

      </div>

    </div>
  </section>

<!-- section works -->
  <section id="section-works" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Promo</h2>
            <p>Beberapa Promo Yang Saat Ini Masih Tersedia, Silahkan Order Sebelum Masa Promo Berakhir</p>
          </div>
        </div>
      </div>

   <div class="row">
    <?php foreach ($promo->result() as $result): ?>
    <div class="col-md-4 col-xs-12">
      <div class="thumbnail" id="test1">
        <p><center><?php echo $result->judul ?></center></p>
        <!-- <a href="<?php echo base_url();?>assets/img/team/promo7.jpg" target="_blank"> -->
          <img src="<?php echo base_url("assets/image/upload/".$result->gambar) ?>" alt="Hobi" style="width:100%">
          <div class="caption"></a>
          <p><?php echo $result->syarat ?></p>
            <p><?php echo $result->harga ?>
              <br>
            <a href="<?php echo site_url('Userpromo/tambah/'.$result->id); ?>">pesan</p></a>
          </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
            
  </section>

  <section id="footer" class="section footer">
    <div class="container">
      <div class="row animated opacity mar-bot20" data-andown="fadeIn" data-animation="animation">
        <div class="col-sm-12 align-center">
          <ul class="social-network social-circle">
            <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>

      <div class="row align-center copyright">
        <div class="col-sm-12">
          <p>Copyright &copy; Amoeba</p>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Amoeba
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
    </div>

  </section>
  <a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>

  <script src="<?php echo base_url();?>assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.isotope.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.nicescroll.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/fancybox/jquery.fancybox.pack.js"></script>
  <script src="<?php echo base_url();?>assets/js/skrollr.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.scrollTo.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.localScroll.js"></script>
  <script src="<?php echo base_url();?>assets/js/stellar.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.appear.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <script src="<?php echo base_url();?>assets/js/main.js"></script>
  <script src="<?php echo base_url();?>assets/contactform/contactform.js"></script>
</body>

</html>
