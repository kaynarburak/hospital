<?php
include 'header.php';
include 'sidebar.php';
?>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Muayene</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php">Muayene</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="muayeneAdd.php">
                                    <button style="float:right" class="btn btn-success ">Yeni Muayene Oluştur</button>
                                </a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px">Muayene ID</th>
                                        <th>Hasta Adı</th>
                                        <th>Soyadı Soyadı</th>
                                        <th>Hasta T.C.No</th>
                                        <th>Doktor Adı</th>
                                        <th>Doktor Soyadı</th>
                                        <th>Doktor T.C.No</th>
                                    </tr>
                                    </thead>
                                    <tbody><?php
                                    $muayeneSor = $db->query('select m.muayene_id,d.d_adi,d.d_soyadi,h.adi,h.soyadi,h.tcno,d.d_tcno from muayene m,hasta h,doktor d where m.hasta_id=h.hasta_id and m.doktor_id=d.doktor_id');
                                    while ($muayeneCek = $muayeneSor->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td><?php echo $muayeneCek['muayene_id'] ?></td>
                                            <td><?php echo $muayeneCek['adi'] ?></td>
                                            <td><?php echo $muayeneCek['soyadi'] ?></td>
                                            <td><?php echo $muayeneCek['tcno'] ?></td>
                                            <td><?php echo $muayeneCek['d_adi'] ?></td>
                                            <td><?php echo $muayeneCek['d_soyadi'] ?></td>
                                            <td><?php echo $muayeneCek['d_tcno'] ?></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

<?php include 'footer.php'; ?>