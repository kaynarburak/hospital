<?php
include 'header.php';
include 'sidebar.php';
?>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Randevular</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="randevu.php">Randevular</a></li>
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
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px">Randevu Numarası</th>
                                        <th>Hasta Adı</th>
                                        <th>Hasta Soyadı</th>
                                        <th>Hasta T.C. Kimlik Numarası</th>
                                        <th>Tarih</th>
                                        <th>Saat</th>
                                        <th>Doktor</th>

                                    </tr>
                                    </thead>
                                    <?php
                                    $randevuSor = $db->query('select * from randevu where durum=true');
                                    while ($randevuCek = $randevuSor->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td><?php echo $randevuCek['randevu_id'] ?></td>
                                            <td><?php echo $randevuCek['hasta_adi'] ?></td>
                                            <td><?php echo $randevuCek['hasta_soyadi'] ?></td>
                                            <td><?php echo $randevuCek['hasta_tc'] ?></td>
                                            <td><?php echo $randevuCek['tarih'] ?></td>
                                            <td><?php echo $randevuCek['saat'] ?></td>
                                            <td><?php echo $randevuCek['doktor_id'] ?></td>
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