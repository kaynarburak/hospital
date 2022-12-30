<?php
include 'header.php';
include 'sidebar.php';
?>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">kullanicilar</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php">kullanicilar</a></li>
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
                                <a href="kullaniciAdd.php">
                                    <button style="float:right" class="btn btn-success ">Yeni kullanici Ekle</button>
                                </a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px">Kullanıcı ID</th>
                                        <th>Kullanıcı Adı</th>
                                        <th>Kullanıcı Şifre</th>
                                        <th>Kullanıcı Yetkisi</th>
                                        <th>Güncelle</th>
                                        <th>Kullanıcı Sil</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $kullaniciSor = $db->query('SELECT * FROM "kullanici"');
                                    while ($kullaniciCek = $kullaniciSor->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td><?php echo $kullaniciCek['kullanici_id'] ?></td>
                                            <td><?php echo $kullaniciCek['kullanici_adi'] ?></td>
                                            <td><?php echo $kullaniciCek['kullanici_sifre'] ?></td>
                                            <td><?php echo $kullaniciCek['kullanici_yetki'] ?></td>
                                            <td>
                                                <a href="kullaniciUpdate.php?kullanici_id=<?php echo $kullaniciCek['kullanici_id'] ?>">
                                                    <button class="btn btn-primary">Güncelle</button>
                                                </a></td>
                                            <td>
                                                <a href="process/kullanicisil.php?kullanici_id=<?php echo $kullaniciCek['kullanici_id'] ?>">
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