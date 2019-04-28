  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="" alt="" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Service Center</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/image/lg.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?php echo site_url('beranda') ?>" class="d-block">Service AC</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Pilihan
                <i class="right fa fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('layanan') ?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Layanan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('promo') ?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Promo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('pesan') ?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Pemesanan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('laporan') ?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Laporan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('android') ?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Slide Android</p>
                </a>
              </li>
              <li class="nav-item has-treeview menu-closed">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-edit"></i>
                  <p>Daftar Harga
                  <i class="right fa fa-angle-right"></i>
                  </p>
                </a>




            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('jasa')?>" class="nav-link">
                  <i class="nav-icon fa fa-plus-square-o"></i>
                  <p>Jasa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('sparepart')?>" class="nav-link">
                  <i class="nav-icon fa fa-plus-square-o"></i>
                  <p>Spare Part</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('freon')?>" class="nav-link">
                  <i class="nav-icon fa fa-plus-square-o"></i>
                  <p>Freon</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('paket')?>" class="nav-link">
                  <i class="nav-icon fa fa-plus-square-o"></i>
                  <p>Paket</p>
                </a>
              </li>
            </ul>



            <?php if($this->session->userdata('level') == "admin"): ?>
              <li class="nav-item">
                <a href="<?php echo site_url('admin')?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Management User</p>
                </a>
              </li>
            <?php endif; ?>
              <li class="nav-item">
                <a href="<?php echo site_url('login/logout')?>" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </li>
         
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>