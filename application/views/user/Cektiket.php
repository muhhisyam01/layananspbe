 <div class="parallax filter-gradient blue" data-color="blue">
     <div class="parallax-background">
         <img class="parallax-background-image" src="<?=base_url()?>asset-user/assets/img/template/layanan.jpg">
     </div>
     <br><br>

 </div>

 <div class="container">
     <h1 align="center">Masukkan Tiket aplikasi anda</h1>
     <hr>
     <?php echo form_open('');?>

     <div class="form-group mx-sm-3 mb-2">
         <label for="inputPassword2" class="sr-only">search product</label>
         <input type="text" class="form-control" id="inputPassword2" name="key" placeholder="search"> &nbsp;
         <input type="submit" class="form-control btn btn-success" id="inputPassword2" value="search" name="submit">
     </div>

     <?php echo form_close('');?>
 </div>
 <?php foreach ($aplikasi as $key ) {?>
 <div class="container" align="center">

     <div class="card  text-center" style="width: 18rem; height:auto; display: block; ">

         <div class="card-body">
             <h5 class="card-title"><?php echo $key->tiket?></h5>
             <p class="card-text"><?php echo $key->verifikasi?></p>

         </div>

     </div>
 </div>
 <?php } ?>