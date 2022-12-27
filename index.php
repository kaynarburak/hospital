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
                                      <th>Doktor</th>
                                      <th>Gerçekleşti Mi?</th>

                                  </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                      <td>Randevu Numarası</td>
                                      <td>Hasta Adı</td>
                                      <td>Hasta Soyadı</td>
                                      <td>Hasta T.C. Kimlik Numarası</td>
                                      <td>Tarih</td>
                                      <td>Saat</td>
                                      <td>Doktor</td>
                                      <td>
                                          <button class="btn btn-success">
                                              Gerçekleşti/Gerçekleşmedi
                                          </button>
                                      </td>
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