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
                    <div class="form-group">
                        <label for="NamaOPD">Tiket</label>
                        ` <h5>
                            <?php echo $this->session->userdata('tiket');?>
                        </h5>
                    </div>
                    <div class="form-group">
                        <label for="NamaOPD">Nama Instansi</label>
                        <h5>
                            <?php echo $this->session->userdata('nama_OPD');?>
                        </h5>
                    </div>
                    <div class="form-group">
                        <label for="NamaOPD">Nama Aplikasi</label>
                        <h5>
                            <?php echo $this->session->userdata('nama_aplikasi');?>
                        </h5>

                    </div>
                    <div class="form-group">
                        <label for="NamaOPD">Jenis Aplikasi</label>
                        <h5>
                            <?php echo $this->session->userdata('jenis_aplikasi');?>
                        </h5>
                    </div>
                    <div class="form-group">
                        <label for="NamaOPD">Pengembang</label>
                        <h5>
                            <?php echo $this->session->userdata('pengembang');?>
                        </h5>
                    </div>
                    <br><br>
                    <a href="<?= base_url('C_user') ?>" class="btn btn-primary mb-2">Back Home</a>
                </div>
                <p>simpan tiket anda untuk melihat proses pendaftaran anda</p>
            </div>
            <div class="col-md-5 col-md-offset-1 hidden-xs">
                <img src="<?=base_url()?>asset-user/assets/img/template/regis.png" />
            </div>
        </div>
    </div>
</div>