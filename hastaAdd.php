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
                    <h1>Hasta Ekle</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Hasta Ekle</li>
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
                            <h3 class="card-title">Hasta Ekle</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="process/hastaekle.php" method="post">
                            <div class="card-body">
                                <div class="row mb-4" >
                                    <div class="col-4">
                                        <label>Adı</label>
                                        <input type="text" class="form-control" name="adi">
                                    </div>
                                    <div class="col-4">
                                        <label>Soyadı</label>
                                        <input type="text" class="form-control" name="soyadi">
                                    </div>
                                    <div class="col-4">
                                        <label>Kimlik Numarası</label>
                                        <input type="text" class="form-control" maxlength="11" name="tcno" >
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-6">
                                        <label>Doğum Yeri</label>
                                        <input type="text" class="form-control" name="d_yeri">
                                    </div>
                                    <div class="col-6">
                                        <label>Doğum Tarihi</label>
                                        <input type="text" class="form-control" name="d_tarihi"placeholder="YYYY-AA-GG">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <label>Anne Adı</label>
                                        <input type="text" class="form-control" name="ana_adi">
                                    </div>
                                    <div class="col-4">
                                        <label>Baba Adı</label>
                                        <input type="text" class="form-control" name="baba_adi">
                                    </div>
                                    <div class="col-4">
                                        <label>Cep Numarası</label>
                                        <input type="text" class="form-control" name="cep_numarasi" maxlength="11">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-danger" name="hastaInsert">Yeni Doktor
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
