
<?php
$db_host = ""; //Isi dengan Nama Host
$db_user = ""; //Isi dengan Username Db
$db_pw = ""; //Isi dengan Password Db
$db_name = ""; //Isi nama database yg ingin diakses;
$sql_query = ""; //Isi dengan kode Sql yang ingin dijalankan pada $db_name
// Koneksi ke database

$conn = mysqli_connect($db_host,$db_user,$db_pw,$db_name);

//Buat Validasi Saat Koneksi berhasil
if ($conn){
  echo "Koneksi berhasil<br>";
  //Set result berdasarkan $sql_query
  $result = mysqli_query($conn,$sql_query); 
  
  //menampilkan semua row hasil result ke dalam $outrow pakai perulangan while dan method mysqli_fetch_assoc();
  while($outrow = mysqli_fetch_assoc($result)){
    echo $outrow['nama_row'] . "<br>"; //[nama_row] adalah row apa yang ingin ditampilkan
  }
  
  
  mysqli_free_result($result); 
}

mysqli_close($conn); // Menutup Koneksi Di $conn

?>
