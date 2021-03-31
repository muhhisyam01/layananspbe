<?php foreach ($verifikasi as $sb): ?>
<form class="form-horizontal style-form" method="post" action="<?=base_url('C_Admin/update1')?>">
    <br><br>

    <input type="hidden" name="id_domain" value="<?=$sb->id_domain?>">

    <div class="custom-control custom-switch ml-5">
        <input type="checkbox" class="custom-control-input" id="customSwitch1" value="verifikasi" name="verifikasi">
        <label for="customSwitch1" class="custom-control-label">Verifikasi</label>
    </div>
    <br>

    <div class="form-group">
        <div class="col-sm-10">
            <button class="btn btn-success" type="submit">
                <i class="fa fa-paper-plane"></i> Simpan</button>
        </div>
    </div>

</form>
<?php endforeach;?>