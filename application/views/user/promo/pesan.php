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
  <title>Pesan</title>
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
        <h1><a class="navbar-brand" href="<?php echo base_url().'User/index'; ?>" data-0="line-height:90px;" data-300="line-height:50px;">			ServiceAC.com
					</a></h1>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
          <li class="active"><a href="<?php echo base_url().'User/index'; ?>">Home</a></li>
        </ul>
      </div>
      <!--/.navbar-collapse -->
    </div>
  </div>

  <!-- section works -->
  <section id="section-harga" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <br>
            <br>
            <h2 class="section-heading animated" data-animation="bounceInUp">Pesan</h2>
            <p>Silahkan Mengisi Form Dibawah Untuk Melakukan Pemesanan</p>
          </div>
        </div>
      </div>

  <form class="form-horizontal" action="<?php echo site_url().'Userpromo/simpan'; ?>" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="nama">Nama Pelanggan:</label>
      <div class="col-sm-8">
        <input type="text" name="nama" required="" id="nama" class="form-control" placeholder="masukkan nama lengkap">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="alamat">Alamat:</label>
      <div class="col-sm-8">          
        <input type="text" name="alamat" required="" id="alamat" class="form-control" placeholder="masukkan alamat">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="telepon">Telepon:</label>
      <div class="col-sm-8">
        <input type="text" name="telepon" required="" id="telepon" class="form-control" placeholder="masukkan no telepon">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="judul">Nama Pesanan:</label>
      <div class="col-sm-8">
        <input type="text" value="<?php echo $promo->judul; ?>" name="judul" required="" id="judul" class="form-control" placeholder="masukkan nama pesanan">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="jumlah_pesan">Jumlah:</label>
      <div class="col-sm-8">
        <input type="text" name="jumlah_pesan" required="" id="jumlah_pesan" class="form-control" placeholder="masukkan jumlah pesan">
      </div>
    </div>

    <div class="clear"> </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <?php echo $widget;?>
        <?php echo $script;?>
        <br />
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
  </form>
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

      <div class="modal" id="#Popup" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam necessitatibus, atque totam ducimus quos odio sed quis non eius. Nobis tempore deleniti esse, officia dicta aliquid pariatur consectetur molestiae iste?</p>
            </div> 
          </div>
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
