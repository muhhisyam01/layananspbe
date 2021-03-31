  <div class="parallax filter-gradient blue" data-color="blue">
      <div class="parallax-background">
          <img class="parallax-background-image" src="<?=base_url()?>asset-user/assets/img/template/layanan.jpg">
      </div>

  </div>
  <div class="section section-presentation">
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <div class="description">

                      <?=$this->session->flashdata('pesan')?>

                      <h3 class="card-title font-20 mt-0">Form Pendaftaran Aplikasi</h3>
                      <p class="card-text">Silahkan isi dengan Data Yang valid</p>
                      <form role="form" action="<?= base_url('C_user/proses_data') ?>" method="post"
                          enctype="multipart/form-data">
                          <div class="form-group">

                              <input type="hidden" name='tiket' class="form-control"
                                  value="<?php echo $kode_register; ?>" readonly>
                          </div>
                          <div class="form-group">
                              <label for="NamaOPD">Nama Instansi</label>
                              <input type="text" class="form-control" id="NamaOPD" placeholder="masukan nama opd"
                                  name="nama_OPD">
                              <?= form_error('nama_OPD')?>
                          </div>
                          <div class="form-group">
                              <label for="NamaOPD">Nama Aplikasi</label>
                              <input type="text" class="form-control" id="Namaaplikasi"
                                  placeholder="masukan nama apliksi" name="nama_aplikasi">
                              <?= form_error('nama_aplikasi')?>

                          </div>
                          <div class="form-group">
                              <label for="NamaOPD">Jenis Aplikasi</label>
                              <input type="text" class="form-control" id="Jenisaplikasi" placeholder="masukan Jenis"
                                  name="jenis_aplikasi">
                              <?= form_error('jenis_aplikasi')?>
                          </div>
                          <div class="form-group">
                              <label for="NamaOPD">Pengembang</label>
                              <input type="text" class="form-control" id="Pengembang"
                                  placeholder="masukan nama pengembang" name="pengembang">
                              <?= form_error('pengembang')?>
                          </div>
                          <div class="form-group">
                              <label for="exampleFormControlFile1">upload source code</label>
                              <br>
                              <i>maksimal file 10 mb</i>
                              <input type="file" class="form-control-file" id="source code" name="sourcecode">
                              <input type="hidden" class="form-control-file" id="" name="verifikasi"
                                  value="belum verifikasi">
                          </div>


                          <br><br>
                          <button type="submit" class="btn btn-primary mb-2">Kirim</button>
                      </form>

                  </div>
              </div>
              <div class="col-md-5 col-md-offset-1 hidden-xs">
                  <img src="<?=base_url()?>asset-user/assets/img/template/regis.png" />
              </div>
          </div>
      </div>
  </div>