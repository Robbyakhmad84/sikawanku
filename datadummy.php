<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Data Mahasiswa</h2>

<form id="filterForm" method="get" action="">
    <label for="tahun">Pilih Tahun:</label>
    <select id="tahun" name="tahun" onchange="filterData()">
        <option value="2001">2001</option>
        <option value="2002">2002</option>
        <option value="2003">2003</option>
        <!-- Tambahkan opsi tahun lainnya jika diperlukan -->
    </select>
</form>

<table id="mahasiswaTable">
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Tahun</th>
  </tr>
  <?php
  // Ambil tahun dari parameter URL
  $tahun = isset($_GET['tahun']) ? $_GET['tahun'] : date('Y'); // Default tahun saat ini jika tidak diset

  // Query untuk mendapatkan data mahasiswa berdasarkan tahun
  // Misalnya kita mengambil data dari database, Anda perlu melakukan koneksi ke database dan melakukan query
  // Di sini kita hanya menggunakan data statis untuk contoh
  $data_mahasiswa = array(
    array("John Doe", "2001"),
    array("Jane Smith", "2002"),
    array("David Johnson", "2001"),
    // Tambahkan data mahasiswa lainnya jika diperlukan
  );

  $nomor = 1;
  // Looping untuk menampilkan data mahasiswa
  foreach ($data_mahasiswa as $mahasiswa) {
      if ($mahasiswa[1] == $tahun) { // Memfilter data berdasarkan tahun yang dipilih
          echo "<tr>";
          echo "<td>$nomor</td>";
          echo "<td>{$mahasiswa[0]}</td>";
          echo "<td>{$mahasiswa[1]}</td>";
          echo "</tr>";
          $nomor++;
      }
  }
  ?>
</table>

<script>
function filterData() {
    var tahun = document.getElementById("tahun").value;
    var urlParams = new URLSearchParams(window.location.search);
    urlParams.set('tahun', tahun);
    window.location.href = "?" + urlParams.toString();
}
</script>

</body>
</html>
