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
                    <h4 class="page-title">Tabel Tiket Zoom</h4>
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
                                            <th data-priority="3">Nama instansi</th>
                                            <th data-priority="1">keperluan</th>
                                            <th data-priority="3">E mail</th>
                                            <th data-priority="3">No handphone</th>
                                            <th data-priority="3">tgl pinjam</th>
                                            <th data-priority="3">tgl kembali</th>

                                        </tr>
                                    </thead>
                                    <?php
                                        $no = 1;
                                        foreach($Zoom as $zm) : ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $no++; ?> </td>
                                            <td><?php echo $zm->Tiket; ?></td>
                                            <td><?php echo $zm->Nama_instansi; ?></td>
                                            <td><?php echo $zm->keperluan; ?></td>
                                            <td><?php echo $zm->E_mail; ?></td>
                                            <td><?php echo $zm->No_handphone; ?></td>
                                            <td><?php echo $zm->tgl_pinjam; ?></td>
                                            <td><?php echo $zm->tgl_kembali; ?></td>
                                            <td>
                                                <?php if($zm->verifikasi == "belum verifikasi"){ ?>
                                                <a class="btn btn-danger btn-sm">Belum Verifikasi</a>
                                                <?php  }else{ ?>
                                                <a class="btn btn-success btn-xs">Verifikasi</a>
                                                <?php   } ?>
                                            </td>
                                            <td>
                                        <tr>
                                            <td><a class="btn btn-success btn-sm"
                                                    href="<?=base_url('C_Admin/verifikasi_edit2/').$zm->id_zoom ?>">Konfirmasi</a>
                                            </td>
                                            <td> <a class="btn btn-danger btn-sm"
                                                    href="<?=base_url('C_Admin/delete_zoom/').$zm->id_zoom?>">Delete</a>
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