<?php
require_once 'header.php';
require_once 'sidebar.php';
$kullanici_id= $_GET['kullanici_id'];
$kullaniciSor=$db->prepare("Select * from kullanici where kullanici_id=:id");
$kullaniciSor->execute(array(
    'id'=>$kullanici_id
));
$kullaniciCek=$kullaniciSor->fetch(PDO::FETCH_ASSOC);
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kullanıcı Güncelle</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Kullanıcı Güncelle</li>
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
                            <h3 class="card-title">Kullanıcı Güncelle</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <form action="process/kullaniciguncelle.php" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="kullanici_adi">Kullanıcı Adı</label>
                                    <input type="text" class="form-control" name="kullanici_adi" id="kullanici_adi" placeholder="Kullanıcı Adını Giriniz" value="<?php echo $kullaniciCek['kullanici_adi']?>">
                                </div>
                                <div class="form-group">
                                    <label for="kullanici_sifre">Şifre</label>
                                    <input type="text" class="form-control" name="kullanici_sifre" id="kullanici_sifre" placeholder="Şifre Giriniz" value="<?php echo $kullaniciCek['kullanici_sifre']?>">
                                    <input type="hidden" class="form-control" name="kullanici_id" id="kullanici_id" value="<?php echo $kullaniciCek['kullanici_id']?>">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-danger" name="kullaniciUpdate">Kullanıcı Güncelle</button>
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
