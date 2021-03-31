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
                            <?php echo $this->session->userdata('Tiket');?>
                        </h5>
                    </div>
                    <div class="form-group">
                        <label for="NamaOPD">Nama Instansi</label>
                        <h5>
                            <?php echo $this->session->userdata('nama_instansi');?>
                        </h5>
                    </div>
                    <div class="form-group">
                        <label for="NamaOPD">keperluan</label>
                        <h5>
                            <?php echo $this->session->userdata('keperluan');?>
                        </h5>

                    </div>
                    <div class="form-group">
                        <label for="NamaOPD">E-mail</label>
                        <h5>
                            <?php echo $this->session->userdata('E_mail');?>
                        </h5>
                    </div>
                    <div class="form-group">
                        <label for="NamaOPD">no handphone</label>
                        <h5>
                            <?php echo $this->session->userdata('No_handphone');?>
                        </h5>
                    </div>
                    <div class="form-group">
                        <label for="NamaOPD">tgl pinjam</label>
                        <h5>
                            <?php echo $this->session->userdata('tgl_pinjam');?>
                        </h5>
                    </div>
                    <div class="form-group">
                        <label for="NamaOPD">tgl kembali</label>
                        <h5>
                            <?php echo $this->session->userdata('tgl_kembali');?>
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