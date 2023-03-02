<?php
// Ambil data yang di input oleh user
require_once 'fungsi.php';
$proses = $_POST ['proses'];
$nama_mahasiswa = $_POST ['name'];
$mata_kuliah = $_POST ['matkul'];
$uts = $_POST ['nilai_uts'];
$uas = $_POST ['nilai_uas'];
$tugas = $_POST ['nilai_tugas'];
$_nilai = $uts + $uas + $tugas / 3;
$keterangan = kelulusan($_nilai);
$grade = grade($_nilai);

//cetak data yang telah di ambil ke dalam browser
if(!empty($proses)){
echo "Nama : $nama_mahasiswa";
echo "<br/>Mata Kuliah : $mata_kuliah";
echo "<br/>Nilai UTS : $uts";
echo "<br/>Nilai UAS : $uas";
echo "<br/>Nilai Tugas : $tugas";
echo "<br/>Keterangan : $keterangan";
echo "<br/>Grade : $grade";
echo "<br/>Data Telah Di Proses";
}
?>
