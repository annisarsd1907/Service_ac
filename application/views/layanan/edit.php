

<?php $this->load->view('layout/admin/header') ?>
<?php $this->load->view('layout/admin/left') ?>

<body class="hold-transition sidebar-mini">
<div class="wrapper">





  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Pelanggan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Service AC</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  <div class="container">
       <div class="row">
           <div class="col-md-12">
              <div class="py-4">
                   <a href="<?php echo site_url('Layanan');?>"
                   <a href="" class="btn btn-warning">Kembali</a>
               </div>
               

               <h3>Tambah Data Pelanggan</h3>

               <form action="<?php echo site_url('Layanan/update');?>" method="post">
               <input type="hidden" name="No" value="<?php echo $layanan->No; ?>">
                    <div class="form-group row">
                      <label for="nama_pelanggan" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-6">
                        <input value="<?php echo $layanan->nama_pelanggan; ?>" type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="telp" class="col-sm-2 col-form-label">Telepon</label>
                        <div class="col-sm-6">
                        <input value="<?php echo $layanan->telp; ?>" type="text" class="form-control" id="telp" name="telp">
                        </div>
                    </div>

                    <div class="form-group row">
                      <label for="layanan" class="col-sm-2 col-form-label">Layanan</label>
                        <div class="col-sm-6">
                          <select name="layanan" class="form-control">
                               <option value="Service & Cuci AC" <?php if ($layanan->layanan == "Service & Cuci AC") echo "selected='selected'"?>>Service & Cuci AC</option>
                                <option value="Paket Perawatan AC Tahunan" <?php if ($layanan->layanan == "Paket Perawatan AC Tahunan") echo "selected='selected'"?>>Paket Perawatan AC Tahunan</option>
                                <option value="Check AC" <?php if ($layanan->layanan == "Check AC") echo "selected='selected'"?>>Check AC</option>
                                <option value="Bongkar atau Pasang AC" <?php if ($layanan->layanan == "Bongkar atau Pasang AC") echo "selected='selected'"?>>Bongkar atau Pasang AC</option>
                                <option value="Pemasangan AC Baru" <?php if ($layanan->layanan == "Pemasangan AC Baru") echo "selected='selected'"?>>Pemasangan AC Baru</option>
                                <option value="Pemasangan AC Bekas" <?php if ($layanan->layanan == "Pemasangan AC Bekas") echo "selected='selected'"?>>Pemasangan AC Bekas</option>
                                <option value="Penggantian Spareparts" <?php if ($layanan->layanan == "Penggantian Spareparts") echo "selected='selected'"?>>Penggantian Spareparts</option>
                          </select>
                        </div>
                    </div>

                    <div class="form-group row">
                      <label for="tanggal_service" class="col-sm-2 col-form-label">Tanggal Service</label>
                        <div class="col-sm-6">
                        <input value="<?php echo $layanan->tanggal_service; ?>" type="text" class="form-control" id="tanggal_service" name="tanggal_service">
                        </div>
                    </div>

                     <div class="form-group row">
                      <label for="jam_service" class="col-sm-2 col-form-label">Jam Service</label>
                        <div class="col-sm-6">
                        <input value="<?php echo $layanan->jam_service; ?>" type="text" class="form-control" id="jam_service" name="jam_service">
                        </div>
                    </div>

                    <div class="form-group row">
                      <label for="jumlah_unit" class="col-sm-2 col-form-label">Jumlah Unit</label>
                        <div class="col-sm-6">
                        <input value="<?php echo $layanan->jumlah_unit; ?>" type="text" class="form-control" id="jumlah_unit" name="jumlah_unit">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="tipe_ac" class="col-sm-2 col-form-label">Tipe AC</label>
                        <div class="col-sm-6">
                          <select name="tipe_ac" class="form-control">
                               <option value="AC Split wall mounted" <?php if ($layanan->tipe_ac == "AC Split wall mounted") echo "selected='selected'"?>>AC Split wall mounted</option>
                                <option value="AC Split Duct" <?php if ($layanan->tipe_ac == "AC Split Duct") echo "selected='selected'"?>>AC Split Duct</option>
                                <option value="AC Cassete (Central)" <?php if ($layanan->tipe_ac == "AC Cassete (Central)") echo "selected='selected'"?>>AC Cassete (Central)</option>
                                <option value="Lainnya" <?php if ($layanan->tipe_ac == "Lainnya") echo "selected='selected'"?>>Lainnya</option>
                          </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="merk_ac" class="col-sm-2 col-form-label">Merk AC</label>
                        <div class="col-sm-6">
                        <input value="<?php echo $layanan->merk_ac; ?>" type="text" class="form-control" id="merk_ac" name="merk_ac">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="tipe_freon" class="col-sm-2 col-form-label">Tipe Freon</label>
                        <div class="col-sm-6">
                          <select name="tipe_freon" class="form-control">
                               <option value="R22" <?php if ($layanan->tipe_freon == "R22") echo "selected='selected'"?>>R22</option>
                                <option value="R32" <?php if ($layanan->tipe_freon == "R32") echo "selected='selected'"?>>R32</option>
                                <option value="R410" <?php if ($layanan->tipe_freon == "R410") echo "selected='selected'"?>>R410</option>
                          </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="memiliki_tangga" class="col-sm-2 col-form-label">Memiliki Tangga</label>
                        <div class="col-sm-6">
                          <select name="memiliki_tangga" class="form-control">
                               <option value="Ya" <?php if ($layanan->memiliki_tangga == "Ya") echo "selected='selected'"?>>Ya</option>
                                <option value="Tidak" <?php if ($layanan->memiliki_tangga == "Tidak") echo "selected='selected'"?>>Tidak</option>
                          </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="keluhan" class="col-sm-2 col-form-label">Keluhan</label>
                        <div class="col-sm-6">
                          <select name="keluhan" class="form-control">
                               <option value="AC Tidak Dingin" <?php if ($layanan->keluhan == "AC Tidak Dingin") echo "selected='selected'"?>>AC Tidak Dingin</option>
                                <option value="AC Bocor (Air Netes)" <?php if ($layanan->keluhan == "AC Bocor (Air Netes)") echo "selected='selected'"?>>AC Bocor (Air Netes)</option>
                                <option value="AC Berisik" <?php if ($layanan->keluhan == "AC Berisik") echo "selected='selected'"?>>AC Berisik</option>
                                <option value="AC Mati" <?php if ($layanan->keluhan == "AC Mati") echo "selected='selected'"?>>AC Mati</option>
                          </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-6">
                        <input value="<?php echo $layanan->alamat; ?>" type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                    <label for="simpan" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                      </div>
                    </div>
                </form>
           </div>
        </div>
    </div>
  </div>
</div>
 <?php $this->load->view('layout/admin/footer') ?>