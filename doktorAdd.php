<?php
require_once 'header.php';
require_once 'sidebar.php';

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Doktor Ekle</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Doktor Ekle</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- center column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Doktor Ekle</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="process/Doktorekle.php" method="post">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <label>Adı</label>
                                        <input type="text" class="form-control" name="d_adi">
                                    </div>
                                    <div class="col-4">
                                        <label>Soyadı</label>
                                        <input type="text" class="form-control" name="d_soyadi">
                                    </div>
                                    <div class="col-4">
                                        <label>Kimlik Numarası</label>
                                        <input type="text" class="form-control" name="d_tcno" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <label>Doğum Tarihi</label>
                                        <input type="text" class="form-control" name="d_dtarihi" placeholder="YYYY-AA-GG">
                                    </div>
                                    <div class="col-4">
                                        <label>Anne Adı</label>
                                        <input type="text" class="form-control" name="d_ana_adi">
                                    </div>
                                    <div class="col-4">
                                        <label>Baba Adı</label>
                                        <input type="text" class="form-control" name="d_baba_adi">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <label>Cep Numarası</label>
                                        <input type="text" class="form-control" name="d_cep_numara">
                                    </div>
                                    <div class="col-4">
                                        <label>Bölümü</label>
                                        <input type="text" class="form-control" name="bolum">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-danger" name="doktorInsert">Yeni Doktor
                                    Ekle
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?php
require_once 'footer.php' ?>
