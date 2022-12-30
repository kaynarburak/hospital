<?php
include 'header.php';
include 'sidebar.php';
?>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Hastalar</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php">Hastalar</a></li>
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
                                <a href="hastaAdd.php">
                                    <button style="float:right" class="btn btn-success ">Yeni hasta Oluştur</button>
                                </a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px">hasta Numarası</th>
                                        <th>Hasta Adı</th>
                                        <th>Hasta Soyadı</th>
                                        <th>Hasta T.C. Kimlik Numarası</th>
                                        <th>Doğum Yeri</th>
                                        <th>Doğum Tarihi</th>
                                        <th>Anne Adı</th>
                                        <th>Baba Adı</th>
                                        <th>Cep Numarası</th>
                                        <th>Sil</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $hastaSor = $db->query('Select * from hasta');
                                    while ($hastaCek = $hastaSor->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td><?php echo $hastaCek['hasta_id'] ?></td>
                                            <td><?php echo $hastaCek['adi'] ?></td>
                                            <td><?php echo $hastaCek['soyadi'] ?></td>
                                            <td><?php echo $hastaCek['tcno'] ?></td>
                                            <td><?php echo $hastaCek['d_yeri'] ?></td>
                                            <td><?php echo $hastaCek['d_tarihi'] ?></td>
                                            <td><?php echo $hastaCek['ana_adi'] ?></td>
                                            <td><?php echo $hastaCek['baba_adi'] ?></td>
                                            <td><?php echo $hastaCek['cep_numarasi'] ?></td>
                                            <td>
                                                <a href="process/hastasil.php?hasta_id=<?php echo $hastaCek['hasta_id']     ?>">
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