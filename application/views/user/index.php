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
  <title>Service AC</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/isotope.css" media="screen" />
  <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
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
        <h1><a class="navbar-brand" href="index.php" data-0="line-height:90px;" data-300="line-height:50px;">			ServiceAC.com
					</a></h1>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#section-harga">Harga</a></li>
          <li><a href="#section-about">Layanan</a></li>
          <li><a href="#section-works">Promo</a></li>
          <li><a href="#section-contact">Kontak Kami</a></li>
          <li><a href="<?php echo site_url('Login')?>" >Login</a></li>
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

  <!-- spacer section:testimonial -->
  <section id="testimonials" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="align-center">
            <div class="testimonial pad-top40 pad-bot40 clearfix">
              <h5>
        								Banyak orang yang bermimpi menjadi sukses, sementara yang lain juga bermimpi dan mulai bertindak untuk menjadikan sukses mereka menjadi kenyataan dan bukan hanya sekedar mimpi.
        							</h5>
              <br/>
              <span class="author">&mdash; Anonymous <a href="#" style="color: black">www.ServiceAC.com</a></span>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- section Harga -->
  <section id="section-harga" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Harga</h2>
            <p>Dengan harga yang terjangkau, kami akan berusaha memberikan pelayanan terbaik untuk anda</p>
          </div>
        </div>
      </div>

      <div class="row align-center mar-bot40">
        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo1"><img src="<?php echo base_url();?>assets/img/team/jasa1.png" alt="" /></figure>
            <div class="team-detail1">
              <h4>Jasa</h4>
              <span><a href="<?php echo base_url().'Daftarhargauser/index'; ?>" class="btn btn-success" role="button">Lihat</a></span>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo1"><img src="<?php echo base_url();?>assets/img/team/sparepart1.png" alt="" /></figure>
            <div class="team-detai1l">
              <h4>Sparepart</h4>
              <span><a href="<?php echo base_url().'Daftarhargauser/sparepart'; ?>" class="btn btn-success" role="button">Lihat</a></span>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo1"><img src="<?php echo base_url();?>assets/img/team/freon1.png" alt="" /></figure>
            <div class="team-detail1">
              <h4>Freon</h4>
              <span><a href="<?php echo base_url().'Daftarhargauser/freon'; ?>" class="btn btn-success" role="button">Lihat</a></span>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo1"><img src="<?php echo base_url();?>assets/img/team/paket1.png" alt="" /></figure>
            <div class="team-detail1">
              <h4>Paket</h4>
              <span><a href="<?php echo base_url().'Daftarhargauser/paket'; ?>" class="btn btn-success" role="button">Lihat</a></span>
            </div>
          </div>
        </div>
        </div>
      </div>

    </div>
  </section>
  <section id="parallax2" class="section parallax" data-stellar-background-ratio="0.5">
    <div class="align-center pad-top40 pad-bot40">
      <blockquote class="bigquote color-white">Aman, Murah dan Terjangkau</blockquote>
      <p class="color-white">ServiceAC.com</p>
    </div>
  </section>

  <!-- about -->
<section id="section-about" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Pelayanan</h2>
            <p>Kami akan berusaha memberikan pelayanan terbaik untuk anda</p>
          </div>
        </div>
      </div>

      <div class="row align-center mar-bot40">
        <div class="col-md-offset-4 col-md-4">
          <div class="team-member">
            <figure class="member-photo"><img src="<?php echo base_url();?>assets/img/team/service1.png" alt="" /></figure>
            <div class="team-detail">
              <h4>Service AC</h4>
              <span><a href="<?php echo base_url().'User/tambah'; ?>" class="btn btn-success" role="button">Pesan</a></span>
            </div>
          </div>
        </div>
        </div>
      </div>

    </div>
  </section>
  <!-- /about -->

  <!-- spacer section:stats -->
  <section id="parallax1" class="section pad-top40 pad-bot40" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="align-center pad-top40 pad-bot40">
        <blockquote class="bigquote color-white">Pelayanan Service AC Terbaik Untuk Anda</blockquote>
        <p class="color-white">ServiceAC.com</p>
      </div>
    </div>
  </section>

  <!-- section works -->
  <section id="section-works" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-4 col-md-4">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Promo</h2>
            <p>Beberapa Promo Yang Saat Ini Masih Tersedia, Silahkan Order Sebelum Masa Promo Berakhir</p>
          </div>
        </div>
      </div>

      <div class="row align-center mar-bot40">
        <div class="col-md-12">
          <div class="team-member">
            <figure class="member-photo1"><img src="<?php echo base_url();?>assets/img/team/promo1.png" alt="" /></figure>
            <div class="team-detail1">
              <h4>Promo</h4>
              <span><a href="<?php echo base_url().'Daftarhargauser/promo'; ?>" class="btn btn-success" role="button">Lihat</a></span>
            </div>
          </div>
        </div>
        </div>
      </div>

    </div>
  </section>


  <section id="parallax2" class="section parallax" data-stellar-background-ratio="0.5">
    <div class="align-center pad-top40 pad-bot40">
      <blockquote class="bigquote color-white">Aman,Jujur dan Terpercaya</blockquote>
      <p class="color-white">ServiceAC.com</p>
    </div>
  </section>
  <!-- contact -->
  <section id="section-contact" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Kontak Kami</h2>
            <p>Jika ada keluhan ataupun pertanyaan, silahkan menghubungi kontak dibawah ini</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-md-offset-4">
          <div class="container">
            <ul style="list-style-type: none;">
            <li><a href="#"><img src="<?php echo base_url();?>assets/img/team/wa.png" alt="" />+6281234567890</a></li>
            <li><a href="#"><img src="<?php echo base_url();?>assets/img/team/fb.png" alt="" />Service_AC</a></li>
            <li><a href="#"><img src="<?php echo base_url();?>assets/img/team/twitter.png" alt="" />Service_AC</li>
            </ul>
      </div>
          </div>
        </div>
        <!-- ./span12 -->
      </div>

    </div>
  </section>
  <!-- map -->
  <section id="footer" class="section footer">
    <div class="container">

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
  <script src="<?php echo base_url();?>assets/https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <script src="<?php echo base_url();?>assets/js/main.js"></script>
  <script src="<?php echo base_url();?>assets/contactform/contactform.js"></script>
</body>

</html>
