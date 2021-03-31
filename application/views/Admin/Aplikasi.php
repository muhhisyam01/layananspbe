 <div class="wrapper">
     <div class="container-fluid">

         <!-- Page-Title -->
         <div class="row">
             <div class="col-sm-12">
                 <div class="page-title-box">
                     <div class="btn-group pull-right">
                         <ol class="breadcrumb hide-phone p-0 m-0">
                             <li class="breadcrumb-item"><a href="#">E-layanan SPBE</a></li>
                             <li class="breadcrumb-item"><a href="#">Tabel</a></li>

                         </ol>
                     </div>
                     <h4 class="page-title">Tabel Tiket Aplikasi</h4>
                 </div>
             </div>
         </div>
         <!-- end page title end breadcrumb -->
         <div class="row">
             <div class="col-12">
                 <div class="card m-b-30">
                     <div class="card-body">

                         <div class="table-rep-plugin">
                             <div class="table-responsive b-0" data-pattern="priority-columns">
                                 <table id="tech-companies-1" class="table  table-striped">
                                     <thead>
                                         <tr>
                                             <th>No</th>
                                             <th data-priority="1">Tiket</th>
                                             <th data-priority="3">Nama OPD</th>
                                             <th data-priority="1">Nama Aplikasi</th>
                                             <th data-priority="3">Jenis Aplikasi</th>
                                             <th data-priority="3">Pengembang</th>
                                             <th data-priority="3">Sourcode</th>
                                             <th data-priority="3">Verifikasi</th>
                                             <th data-priority="3">Aksi</th>
                                         </tr>
                                     </thead>
                                     <?php
                                        $no = 1;
                                        foreach($aplikasi as $apl) : ?>
                                     <tbody>
                                         <tr>
                                             <td><?php echo $no++; ?> </td>
                                             <td><?php echo $apl->tiket; ?></td>
                                             <td><?php echo $apl->nama_OPD; ?></td>
                                             <td><?php echo $apl->nama_aplikasi; ?></td>
                                             <td><?php echo $apl->jenis_aplikasi; ?></td>
                                             <td><?php echo $apl->pengembang; ?></td>
                                             <td><?php echo $apl->pengembang; ?></td>
                                             <td>
                                                 <?php if($apl->verifikasi == "belum verifikasi"){ ?>
                                                 <a class="btn btn-danger btn-sm">Belum Verifikasi</a>
                                                 <?php  }else{ ?>
                                                 <a class="btn btn-success btn-xs">Verifikasi</a>
                                                 <?php   } 
                                                ?>
                                             </td>
                                             <td>
                                         <tr>
                                             <td><a class="btn btn-success btn-sm"
                                                     href="<?=base_url('C_Admin/verifikasi_edit/').$apl->id_aplikasi ?>">Konfirmasi</a>
                                             </td>
                                             <td> <a class="btn btn-danger btn-sm"
                                                     href="<?=base_url('C_Admin/delete_aplikasi/').$apl->id_aplikasi?>">Delete</a>
                                             </td>
                                         </tr>
                                         </td>
                                         </tr>
                                     </tbody>
                                     <?php endforeach  ?>
                                 </table>
                             </div>

                         </div>

                     </div>
                 </div>
             </div> <!-- end col -->
         </div> <!-- end row -->

     </div> <!-- end container -->
 </div>
 <!-- end wrapper -->

 <!-- Data Modal -->