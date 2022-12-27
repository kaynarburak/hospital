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
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php">Doktorlar</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="doktorAdd.php">
                                    <button style="float:right" class="btn btn-success ">Yeni Doktor Ekle</button>
                                </a>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px">Doktor ID</th>
                                        <th>Doktor Adı</th>
                                        <th>Doktor Soyadı</th>
                                        <th>Doktor T.C. Kimlik Numarası</th>
                                        <th>Doğum Tarihi</th>
                                        <th>Anne Adı</th>
                                        <th>Baba Adı</th>
                                        <th>Cep Numarası</th>
                                        <th>Bölüm</th>
                                        <th>Sil</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $doktorSor = $db->query('SELECT * FROM "doktor"');
                                    while ($doktorCek = $doktorSor->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td><?php echo $doktorCek['doktor_id'] ?></td>
                                            <td><?php echo $doktorCek['d_adi'] ?></td>
                                            <td><?php echo $doktorCek['d_soyadi'] ?></td>
                                            <td><?php echo $doktorCek['d_tcno'] ?></td>
                                            <td><?php echo $doktorCek['d_dtarihi'] ?></td>
                                            <td><?php echo $doktorCek['d_ana_adi'] ?></td>
                                            <td><?php echo $doktorCek['d_baba_adi'] ?></td>
                                            <td><?php echo $doktorCek['d_cep_numara'] ?></td>
                                            <td><?php echo $doktorCek['bolum'] ?></td>
                                            <td>
                                                <a href="process/doktorsil.php?doktor_id=<?php echo $doktorCek['doktor_id'] ?>">
                                                    <button class="btn btn-danger">Sil</button>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php include 'footer.php'; ?>