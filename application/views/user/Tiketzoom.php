  <!-- <div class="parallax filter-gradient blue" data-color="blue">
      <div class="parallax-background">
          <img class="parallax-background-image" src="<?=base_url()?>asset-user/assets/img/template/layanan.jpg">
      </div>

  </div>
  <div class="section section-presentation">
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <div class="description">
                      <h3 class="card-title font-20 mt-0">Form Peminjaman Akun Zoom</h3>
                      <p class="card-text">Silahkan isi dengan Data Yang valid</p>
                      <form role="form" action="<?= base_url('C_user/prose_zoom') ?>" method="post">
                          <div class="form-group">

                              <input type="hidden" name='Tiket' class="form-control" readonly>
                          </div>
                          <div class="form-group">
                              <label for="NamaOPD">Nama Instansi</label>
                              <input type="text" class="form-control" id="NamaOPD" placeholder="masukan nama opd"
                                  name="Nama_OPD">
                          </div>
                          <div class="form-group">
                              <label for="keperluan">Keperluan</label>
                              <textarea class="form-control" name="Keperluan" id="Keperluan"></textarea>
                          </div>
                          <div class="form-group">
                              <label for="E-mail">E-Mail</label>
                              <input type="E-mail" class="form-control" id="E-mail" placeholder="masukan E-mail"
                                  name="E-mail">
                          </div>
                          <div class="form-group">
                              <label for="No_handphone">No handphone</label>
                              <input type="No" class="form-control" id="No_handphone" placeholder="masukan no handphone"
                                  name="No_handphone">
                          </div>
                          <div class="form-group">
                              <label for="tanggalpinjam">Tanggal Pinjam</label>
                              <input type="date" class="form-control" id="Namaaplikasi"
                                  placeholder="masukkan Tanggalpinjam" name="tanggalpinjam">
                          </div>
                          <div class="form-group">
                              <label for="tanggalpengembalian">Tanggal pengembalian</label>
                              <input type="date" class="form-control" id="tannggalpengembalian"
                                  placeholder="masukkan Tanggalpengembalian" name="Tanggal">
                          </div>
                          <input type="hidden" class="form-control-file" id="" name="verifikasi" value="0">


                          <a href="#" class="card-link">Syarat & ketentuan</a>
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
  </div> -->
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
                      <h3 class="card-title font-20 mt-0">Form peminjaman akun zoom</h3>
                      <p class="card-text">Silahkan isi dengan Data Yang valid</p>
                      <form role="form" action="<?= base_url('C_user/prose_zoom') ?>" method="post">
                          <div class="form-group">

                              <input type="hidden" name='Tiket' class="form-control" value="<?php echo $kode_zoom; ?>"
                                  readonly>
                          </div>
                          <div class="form-group">
                              <label for="NamaOPD">Nama Instansi</label>
                              <input type="text" class="form-control" id="Nama_instansi" placeholder="masukan nama opd"
                                  name="Nama_instansi">
                              <?= form_error('nama_instansi')?>
                          </div>
                          <div class="form-group">
                              <label for="NamaOPD">Keperluan</label>
                              <input type="text" class="form-control" id="keperluan" placeholder="masukan keperluan"
                                  name="keperluan">
                              <?= form_error('keperluan')?>
                          </div>
                          <div class="form-group">
                              <label for="NamaOPD">E-mail</label>
                              <input type="Email" class="form-control" id="E_mail" placeholder="masukan E-mail"
                                  name="E_mail">
                              <?= form_error('E_mail')?>
                          </div>
                          <div class="form-group">
                              <label for="NamaOPD">No handphone</label>
                              <input type="No" class="form-control" id="No_handphone" placeholder="masukan no handphone"
                                  name="No_handphone">
                              <?= form_error('No_handphone')?>
                          </div>
                          <div class="form-group">
                              <label for="tanggalpinjam">Tanggal Pinjam</label>
                              <input type="date" class="form-control" id="tgl_pinjam"
                                  placeholder="masukkan Tanggal pinjam" name="tgl_pinjam">
                              <?= form_error('tgl_pinjam')?>
                          </div>
                          <div class="form-group">
                              <label for="tanggalpengembalian">Tanggal pengembalian</label>
                              <input type="date" class="form-control" id="tgl_kembali"
                                  placeholder="masukkan Tanggal pengembalian" name="tgl_kembali">
                              <?= form_error('tgl_kembali')?>
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