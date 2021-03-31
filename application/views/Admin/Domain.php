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
                    <h4 class="page-title">Tabel Tiket Domain</h4>
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
                                            <th data-priority="1">Nama Domain</th>
                                            <th data-priority="3">Jenis Domain</th>
                                            <th data-priority="3">Verifikasi</th>
                                        </tr>
                                    </thead>
                                    <?php
                                        $no = 1;
                                        foreach($domain as $dm) : ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $no++; ?> </td>
                                            <td><?php echo $dm->tiket; ?></td>
                                            <td><?php echo $dm->nama_OPD; ?></td>
                                            <td><?php echo $dm->nama_domain; ?></td>
                                            <td><?php echo $dm->jenis_domain; ?></td>
                                            <td>
                                                <?php if($dm->verifikasi == "belum verifikasi"){ ?>
                                                <a class="btn btn-danger btn-sm">Belum Verifikasi</a>
                                                <?php  }else{ ?>
                                                <a class="btn btn-success btn-xs">Verifikasi</a>
                                                <?php   } ?>
                                            </td>
                                            <td>
                                        <tr>
                                            <td><a class="btn btn-success btn-sm"
                                                    href="<?=base_url('C_Admin/verifikasi_edit1/').$dm->id_domain ?>">Konfirmasi</a>
                                            </td>
                                            <td> <a class="btn btn-danger btn-sm"
                                                    href="<?=base_url('C_Admin/delete_domain/').$dm->id_domain?>">Delete</a>
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