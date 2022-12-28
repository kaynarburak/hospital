<?php
include 'header.php';
include 'sidebar.php';
?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Anasayfa</h1>
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
                            <h3 class="card-title">Hasta Ara</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" id="searchInput" onkeyup="searchScript()" placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap" id="searchTable">
                                <thead>
                                    <tr>
                                        <th>Hasta ID</th>
                                        <th>Adı</th>
                                        <th>Soyadı</th>
                                        <th>T.C. Numarası</th>
                                        <th>Anne Adı</th>
                                        <th>Baba Adı</th>
                                        <th>Telefon</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $randevuSor = $db->query('select * from hasta');
                                    while ($randevuCek = $randevuSor->fetch(PDO::FETCH_ASSOC)) { ?>

                                        <tr>
                                            <td><?php echo $randevuCek['hasta_id'] ?></td>
                                            <td><?php echo $randevuCek['adi'] ?></td>
                                            <td><?php echo $randevuCek['soyadi'] ?></td>
                                            <td><?php echo $randevuCek['tcno'] ?></td>
                                            <td><?php echo $randevuCek['ana_adi'] ?></td>
                                            <td><?php echo $randevuCek['baba_adi'] ?></td>
                                            <td><?php echo $randevuCek['cep_numarasi'] ?></td>
                                        <?php } ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Bugünki Randevular</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">Randevu Numarası</th>
                                        <th>Hasta Adı</th>
                                        <th>Hasta Soyadı</th>
                                        <th>Hasta T.C. Kimlik Numarası</th>
                                        <th>Tarih</th>
                                        <th>Saat</th>
                                        <th>Doktor Adı</th>
                                        <th>Doktor Soyadı</th>
                                    </tr>
                                </thead>
                                <?php
                                $patientAll = $db->query('select * from randevu r,hasta h,doktor d where r.doktor_id=d.doktor_id and h.hasta_id=r.hasta_id and r.durum=false and r.tarih=current_date');
                                while ($patient = $patientAll->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <tr>
                                        <td><?php echo $patient['randevu_id'] ?></td>
                                        <td><?php echo $patient['adi'] ?></td>
                                        <td><?php echo $patient['soyadi'] ?></td>
                                        <td><?php echo $patient['tcno'] ?></td>
                                        <td><?php echo $patient['tarih'] ?></td>
                                        <td><?php echo $patient['saat'] ?></td>
                                        <td><?php echo $patient['d_adi'] ?></td>
                                        <td><?php echo $patient['d_soyadi'] ?></td>

                                    </tr>
                                <?php } ?>
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

    <!--İsme  Arama ve filtrelme script kodu -->

<script>
    function searchScript() {
         var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("searchTable");
        tr = table.getElementsByTagName("tr");

         for (i = 0; i < tr.length; i++) {
            tdOne = tr[i].getElementsByTagName("td")[1] ;//!!!1. Sütün(Hasta Adı) alanında arama yapmak için 1 diyoruz!!!
            if (tdOne) {
                txtValue = tdOne.textContent || tdOne.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }  
            }  
        }
    }
</script>
<?php include 'footer.php'; ?>