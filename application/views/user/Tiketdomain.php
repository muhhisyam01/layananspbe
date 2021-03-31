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
                      <h3 class="card-title font-20 mt-0">Form Pendaftaran Domain</h3>
                      <p class="card-text">Silahkan isi dengan Data Yang valid</p>
                      <form role="form" action="<?= base_url('C_user/prose_domain') ?>" method="post">
                          <div class="form-group">

                              <input type="hidden" name='tiket' class="form-control" value="<?php echo $kode_domain; ?>"
                                  readonly>
                          </div>
                          <div class="form-group">
                              <label for="NamaOPD">Nama Instansi</label>
                              <input type="text" class="form-control" id="NamaOPD" placeholder="masukan nama opd"
                                  name="nama_OPD">
                              <?= form_error('nama_OPD')?>
                          </div>
                          <div class="form-group">
                              <label for="NamaOPD">Nama Domain</label>
                              <input type="text" class="form-control" id="Namaaplikasi"
                                  placeholder="masukan nama domain" name="nama_domain">
                              <?= form_error('nama_domain')?>
                          </div>
                          <div class="form-group">
                              <label for="NamaOPD">Jenis Domain</label>
                              <input type="text" class="form-control" id="Jenisa domain" placeholder="masukan Jenis"
                                  name="jenis_domain">
                              <?= form_error('jenis_domain')?>
                          </div>
                          <input type="hidden" class="form-control-file" id="" name="verifikasi"
                              value="belum verifikasi">



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