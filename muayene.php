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
                            <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>
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
                                        <th>Doktor Adı</th>
                                        <th>Doktor Soyadı</th>
                                        <th>Hasta Adı</th>
                                        <th>Hasta Soyadı</th>
                                        <th>Hasta T.C. Kimlik Numarası</th>
                                        <th>Tarih</th>
                                        <th>Saat</th>
                                        <th>Randevu</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $muayeneSor = $db->query('SELECT * FROM "muayene"');
                                    while ($muayeneCek = $muayeneSor->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td><?php echo $muayeneCek['muayene_id'] ?></td>
                                            <td><?php echo $muayeneCek['muayene_adi'] ?></td>
                                            <td><?php echo $muayeneCek['muayene_sifre'] ?></td>
                                            <td><?php echo $muayeneCek['muayene_yetki'] ?></td>
                                            <td>
                                                <a href="process/muayenesil.php?muayene_id=<?php echo $muayeneCek['muayene_id'] ?>">
                                                    <button class="btn btn-danger">Sil</button>
                                                </a>
                                            </td>
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