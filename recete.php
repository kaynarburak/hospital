<?php
include 'header.php';
include 'sidebar.php';
?>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Reçeteler</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php">Ana Sayfa</a></li>
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
                                <a href="receteAdd.php"> <button style="float:right" class="btn btn-success ">Yeni Reçete Oluştur</button></a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Reçete No</th>
                                        <th>Hasta Adı</th>
                                        <th>Hasta Soyadı</th>
                                        <th>Hasta TC</th>
                                        <th>Doktor ID</th>
                                        <th>Doktor Adı</th>
                                        <th>Doktor Soyadı</th>
                                        <th>Doktor TC</th>
                                        <th>Reçete Kodu</th>
                                    </tr>
                                    </thead>
                                    <tbody><?php
                                    $receteSor = $db->query('select r.recete_id,r.recete_kodu,h.tcno,h.adi,h.soyadi,h.soyadi,d.d_adi,d.d_soyadi,d.doktor_id,d.d_tcno from recete r,hasta h,doktor d where r.hasta_id=h.hasta_id and r.doktor_id=d.doktor_id');
                                    while ($receteCek = $receteSor->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td><?php echo $receteCek['recete_id'] ?></td>
                                            <td><?php echo $receteCek['adi'] ?></td>
                                            <td><?php echo $receteCek['soyadi'] ?></td>
                                            <td><?php echo $receteCek['tcno'] ?></td>
                                            <td><?php echo $receteCek['doktor_id'] ?></td>
                                            <td><?php echo $receteCek['d_adi'] ?></td>
                                            <td><?php echo $receteCek['d_soyadi'] ?></td>
                                            <td><?php echo $receteCek['d_tcno'] ?></td>
                                            <td><?php echo $receteCek['recete_kodu'] ?></td>
                                        </tr>
                                    <?php } ?></tbody>
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