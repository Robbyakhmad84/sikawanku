<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>SIKAWANKU</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/logo-jatim.png" />
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- datatable jquery -->
  <script defer src="https://code.jquery.com/jquery-3.7.0.js">
  </script>
  <script defer src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js">
  </script>
  <script defer src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js">
  </script>
  <script defer src="js/script.js">
  </script>
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
  <!-- load nav/footer bar -->
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <!-- slideshow -->
  <script defer src="js/script.js">
  </script>
</head>

<body class="d-flex flex-column h-100">
  <main class="flex-shrink-0">
    <!--Navigation bar-->
    <div id="nav-placeholder">
    </div>
    <script>
      $(function() {
        $("#nav-placeholder").load("nav.html");
      });
    </script>
    <!--end of Navigation bar-->
    <section class="py-3">
      <div class="container px-5">
        <div class="text-center">
          <h1 class="fw-bolder">SIMULASI PENANGANAN KUMUH</h1>
        </div>
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <table class="table table-bordered table-sm">
                  <tr>
                    <th style="width: 250px;">Wilayah RT/RW</th>
                    <td>GADINGREJO-RT002-RW003</td>
                  </tr>
                  <tr>
                    <th>Provinsi</th>
                    <td>Jawa Timur</td>
                  </tr>
                  <tr>
                    <th>Kabupaten / Kota</th>
                    <td>KOTA PASURUAN</td>
                  </tr>
                  <tr>
                    <th>Kawasan</th>
                    <td>Pesisir</td>
                  </tr>
                  <tr>
                    <th>Kelurahan</th>
                    <td>GADINGREJO</td>
                  </tr>
                </table>
              </div>
              <div class="col-md-6">
                <table class="table table-bordered table-sm">
                  <tr>
                    <th style="width: 300px;">Luas Verifikasi (Ha)</th>
                    <td>2.10</td>
                  </tr>
                  <tr>
                    <th>Jumlah Bangunan (Unit)</th>
                    <td>110</td>
                  </tr>
                  <tr>
                    <th>Jumlah Penduduk (jiwa)</th>
                    <td>397</td>
                  </tr>
                  <tr>
                    <th>Jumlah KK (kk)</th>
                    <td>164</td>
                  </tr>
                  <tr>
                    <th>Panjang Jalan Lingkungan Ideal (m)</th>
                    <td>888.00</td>
                  </tr>
                  <tr>
                    <th>Panjang Drainase Lingkungan Ideal (m)</th>
                    <td>1023.00</td>
                  </tr>
                </table>
              </div>
            </div>
            <!-- Data preview section-->
            <section class="py-5" id="datarekap">
              <div class="container px-5">
                <!-- Data -->
                <div class="text-center my-3">
                                            </div>

                    <table class="table table-bordered table-sm">
                        <tr class="text-center bg-primary1">
                            <th style="width: 150px;">INFRASTRUKTUR</th>
                            <th style="width: 150px;">Volume Kumuh Awal</th>
                            <th style="width: 250px;">KRITERIA</th>
                            <th>KEGIATAN</th>
                            <th>VOLUME OUTCOME</th>
                            <th>SATUAN</th>
                            <th>SUMBER<br>ANGGARAN</th>
                            <th>JUMLAH BIAYA</th>
                            <th style="width: 100px;">TAHUN</th>
                        </tr>
                        <tr>
                       <td rowspan="3">1. Kondisi Bangunan Gedung
                       <td rowspan="1">30
                       </td><td rowspan="1"> a. Ketidakteraturan Bangunan  
                       <br> <button data-id_aspek="c4ca4238a0b923820dcc1509a6f75849b" onclick="penanganan(this,'tambah');" class="btn btn-primary btn-sm fw-600"><i class="fa fa-plus mr-1"></i> entry kegiatan</button>
                       </td> <td colspan="6" class="text-center text-merah fw-500">belum ada penanganan</td>                      
                        </tr> 
                        <tr> 
                        <td rowspan="1">0.8  
                        <td rowspan="1"> b. Kepadatan Bangunan
                        <br> <button data-id_aspek="c4ca4238a0b923820dcc1509a6f75849b" onclick="penanganan(this,'tambah');" class="btn btn-primary btn-sm fw-600"><i class="fa fa-plus mr-1"></i> entry kegiatan</button>
                       </td> <td colspan="6" class="text-center text-merah fw-500">belum ada penanganan</td>                      
                        </tr>                                      
                        <td rowspan="1">30  
                        <td rowspan="1"> c. Ketidaksesuaian dengan Persy Teknis Bangunan 
                        <br> <button data-id_aspek="c4ca4238a0b923820dcc1509a6f75849b" onclick="penanganan(this,'tambah');" class="btn btn-primary btn-sm fw-600"><i class="fa fa-plus mr-1"></i> entry kegiatan</button>
                       </td> <td colspan="6" class="text-center text-merah fw-500">belum ada penanganan</td>                      
                        </tr>  
                         
                        </tr> 
                        <td rowspan="2">2. Kondisi Jalan Lingkungan
                       <td rowspan="1">500
                       </td><td rowspan="1"> a. Cakupan Pelayanan Jalan Lingkungan  
                       <br> <button data-id_aspek="c4ca4238a0b923820dcc1509a6f75849b" onclick="penanganan(this,'tambah');" class="btn btn-primary btn-sm fw-600"><i class="fa fa-plus mr-1"></i> entry kegiatan</button>
                       </td> <td colspan="6" class="text-center text-merah fw-500">belum ada penanganan</td>                      
                        </tr> 
                        <tr> 
                        <td rowspan="1">500
                        <td rowspan="1"> b. Kualitas Permukaan Jalan lingkungan
                        <br> <button data-id_aspek="c4ca4238a0b923820dcc1509a6f75849b" onclick="penanganan(this,'tambah');" class="btn btn-primary btn-sm fw-600"><i class="fa fa-plus mr-1"></i> entry kegiatan</button>
                       </td> <td colspan="6" class="text-center text-merah fw-500">belum ada penanganan</td>                      
                        </tr>                                                                                       
                        
                        </tr> 
                        <td rowspan="2">3. Kondisi Penyediaan Air Minum
                       <td rowspan="1">30
                       </td><td rowspan="1"> a. Ketidaktersediaan Akses Aman Air Minum 
                       <br> <button data-id_aspek="c4ca4238a0b923820dcc1509a6f75849b" onclick="penanganan(this,'tambah');" class="btn btn-primary btn-sm fw-600"><i class="fa fa-plus mr-1"></i> entry kegiatan</button>
                       </td> <td colspan="6" class="text-center text-merah fw-500">belum ada penanganan</td>                      
                        </tr> 
                        <tr> 
                        <td rowspan="1">30
                        <td rowspan="1"> b. Tidak terpenuhinya Kebutuhan Air Minum
                        <br> <button data-id_aspek="c4ca4238a0b923820dcc1509a6f75849b" onclick="penanganan(this,'tambah');" class="btn btn-primary btn-sm fw-600"><i class="fa fa-plus mr-1"></i> entry kegiatan</button>
                       </td> <td colspan="6" class="text-center text-merah fw-500">belum ada penanganan</td>                      
                        </tr>      
                        
                        </tr> 
                        <td rowspan="3">4. Kondisi Drainase Lingkungan
                       <td rowspan="1">0.9
                       </td><td rowspan="1"> a. Ketidakmampuan Mengalirkan Limpasan Air 
                       <br> <button data-id_aspek="c4ca4238a0b923820dcc1509a6f75849b" onclick="penanganan(this,'tambah');" class="btn btn-primary btn-sm fw-600"><i class="fa fa-plus mr-1"></i> entry kegiatan</button>
                       </td> <td colspan="6" class="text-center text-merah fw-500">belum ada penanganan</td>                      
                        </tr> 
                        <tr> 
                        <td rowspan="1">500
                        <td rowspan="1"> b. Ketidaktersediaan Drainase
                        <br> <button data-id_aspek="c4ca4238a0b923820dcc1509a6f75849b" onclick="penanganan(this,'tambah');" class="btn btn-primary btn-sm fw-600"><i class="fa fa-plus mr-1"></i> entry kegiatan</button>
                       </td> <td colspan="6" class="text-center text-merah fw-500">belum ada penanganan</td>                      
                        </tr>
                        <tr> 
                        <td rowspan="1">500
                        <td rowspan="1"> c. Kualitas Konstruksi Drainase
                        <br> <button data-id_aspek="c4ca4238a0b923820dcc1509a6f75849b" onclick="penanganan(this,'tambah');" class="btn btn-primary btn-sm fw-600"><i class="fa fa-plus mr-1"></i> entry kegiatan</button>
                       </td> <td colspan="6" class="text-center text-merah fw-500">belum ada penanganan</td>                      
                        </tr>

                        </tr> 
                        <td rowspan="2">5. Kondisi Pengelolaan Air Limbah
                       <td rowspan="1">30
                       </td><td rowspan="1"> a. Sistem Pengelolaan Air Limbah Tidak Sesuai Standar Teknis 
                       <br> <button data-id_aspek="c4ca4238a0b923820dcc1509a6f75849b" onclick="penanganan(this,'tambah');" class="btn btn-primary btn-sm fw-600"><i class="fa fa-plus mr-1"></i> entry kegiatan</button>
                       </td> <td colspan="6" class="text-center text-merah fw-500">belum ada penanganan</td>                      
                        </tr> 
                        <tr> 
                        <td rowspan="1">30
                        <td rowspan="1"> b. Prasarana dan Sarana Pengelolaan Air Limbah Tidak Sesuai dengan Persyaratan Teknis
                        <br> <button data-id_aspek="c4ca4238a0b923820dcc1509a6f75849b" onclick="penanganan(this,'tambah');" class="btn btn-primary btn-sm fw-600"><i class="fa fa-plus mr-1"></i> entry kegiatan</button>
                       </td> <td colspan="6" class="text-center text-merah fw-500">belum ada penanganan</td>                      
                        </tr>   
                        
                        </tr> 
                        <td rowspan="2">6. Kondisi Pengelolaan Persampahan
                       <td rowspan="1">30
                       </td><td rowspan="1"> a. Prasarana dan Sarana Persampahan Tidak Sesuai dengan persyaratan Teknis
                       <br> <button data-id_aspek="c4ca4238a0b923820dcc1509a6f75849b" onclick="penanganan(this,'tambah');" class="btn btn-primary btn-sm fw-600"><i class="fa fa-plus mr-1"></i> entry kegiatan</button>
                       </td> <td colspan="6" class="text-center text-merah fw-500">belum ada penanganan</td>                      
                        </tr> 
                        <tr> 
                        <td rowspan="1">30
                        <td rowspan="1"> b. Sistem Pengelolaan Persampahan yang tidak sesuai Standar Teknis
                        <br> <button data-id_aspek="c4ca4238a0b923820dcc1509a6f75849b" onclick="penanganan(this,'tambah');" class="btn btn-primary btn-sm fw-600"><i class="fa fa-plus mr-1"></i> entry kegiatan</button>
                       </td> <td colspan="6" class="text-center text-merah fw-500">belum ada penanganan</td>                      
                        </tr>   

                        </tr> 
                        <td rowspan="2">7. Kondisi Proteksi Kebakaran
                       <td rowspan="1">30
                       </td><td rowspan="1"> a. Ketidaktersediaan Prasarana Proteksi Kebakaran
                       <br> <button data-id_aspek="c4ca4238a0b923820dcc1509a6f75849b" onclick="penanganan(this,'tambah');" class="btn btn-primary btn-sm fw-600"><i class="fa fa-plus mr-1"></i> entry kegiatan</button>
                       </td> <td colspan="6" class="text-center text-merah fw-500">belum ada penanganan</td>                      
                        </tr> 
                        <tr> 
                        <td rowspan="1">30
                        <td rowspan="1"> b. Ketidaktersediaan Sarana Proteksi Kebakaran
                        <br> <button data-id_aspek="c4ca4238a0b923820dcc1509a6f75849b" onclick="penanganan(this,'tambah');" class="btn btn-primary btn-sm fw-600"><i class="fa fa-plus mr-1"></i> entry kegiatan</button>
                       </td> <td colspan="6" class="text-center text-merah fw-500">belum ada penanganan</td>                      
                        </tr>
                        