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
                    <h1>Muayene Oluştur</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Muayene Oluştur</li>
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
                            <h3 class="card-title">Muayene Oluştur</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="process/muayeneekle.php" method="post">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <label>Doktor ID</label>
                                        <input type="text" class="form-control" name="doktor_id">
                                    </div>
                                    <div class="col-6">
                                        <label>Hasta ID</label>
                                        <input type="text" class="form-control" name="hasta_id">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label>Tarih</label>
                                        <input type="text" class="form-control" name="tarih">
                                    </div>
                                    <div class="col-6">
                                        <label>Saati</label>
                                        <input type="text" class="form-control" name="saat">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-danger" name="muayeneInsert">Yeni Muayene Oluştur
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
