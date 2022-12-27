<?php
include 'header.php';
include 'sidebar.php';
?>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Doktorlar</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php">Doktorlar</a></li>
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
                                <a href="doktorAdd.php"> <button style="float:right" class="btn btn-success ">Yeni Doktor Ekle</button></a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px">Doktor ID</th>
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
                                    <tr>
                                        <td>Doktor ID</td>
                                        <td>Doktor Adı</td>
                                        <td>Doktor Soyadı</td>
                                        <td>Doktor T.C. Kimlik Numarası</td>
                                        <td>Doğum Tarihi</td>
                                        <td>Anne Adı</td>
                                        <td>Baba Adı</td>
                                        <td>Cep Numarası</td>
                                        <td>Bölüm</td>
                                    </tr>
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