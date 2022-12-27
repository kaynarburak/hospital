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
                    <h1>Kullanıcı Ekle</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Kullanıcı Ekle</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
               <!-- left column-->
                <div class="col-md-2">
                </div>
                <!-- center column -->
                <div class="col-md-8">
                    <!-- general form elements -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Kullanıcı Ekle</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="process/kullaniciekle.php" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="kullanici_adi">Kullanıcı Adı</label>
                                    <input type="text" class="form-control" name="kullanici_adi" id="kullanici_adi" placeholder="Kullanıcı Adını Giriniz">
                                </div>
                                <div class="form-group">
                                    <label for="kullanici_sifre">Şifre</label>
                                    <input type="password" class="form-control" name="kullanici_sifre" id="kullanici_sifre" placeholder="Şifre Giriniz">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Kullanıcı Yetkisi</label>
                                    <input type="text" class="form-control" name="kullanici_yetki" id="kullanici_yetki" placeholder="True/False">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-danger" name="kullaniciInsert">Yeni Kullanıcı Ekle</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--/.col (center) -->
                <!-- right column -->
                <div class="col-md-2">

                </div>
                <!-- /.right column-->

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?php
require_once 'footer.php'?>
