<?php
include_once('navbar.php');
include_once('sidebar.php');
?>
<!-- ini untuk buka konten -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Nilai Siswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content" >
        <?php
        //buatlah data nilai siswa dengan array assosiatif 
        $ns1 = ['id'=> 1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
        $ns2 = ['id'=> 2,'nim'=>'01102','uts'=>85,'uas'=>90,'tugas'=>88];
        $ns3 = ['id'=> 3,'nim'=>'01103','uts'=>89,'uas'=>95,'tugas'=>98];

        //simpan seluruh data variable array assosiatif
        //ke dalam array indexing
        $ar_nilai = [$ns1,$ns2,$ns3];
        ?>
        <h3 style="text-align: center;">Daftar Nilai Siswa</h3>
        <table border="1" width = "100%" style="text-align: center;">
            <thead>
                <tr style="background-color: #CCCCFF;">
                    <th>NO</th>
                    <th>NIM</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>TUGAS</th>
                    <th>NILAI AKHIR</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach ($ar_nilai as $nilai) {
                    echo '<tr><td>'.$nomor.'</td>';
                    echo '<td>'.$nilai['nim'].'</td>';
                    echo '<td>'.$nilai['uts'].'</td>';
                    echo '<td>'.$nilai['uas'].'</td>';
                    echo '<td>'.$nilai['tugas'].'</td>';
                    $nilai_akhir = ($nilai['uts']+$nilai['uas']+$nilai['tugas'])/3;
                    echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
                    echo '<tr/>';
                    $nomor++;

                }
                ?>
            </tbody>
        </table>
    </section>
</div>


<?php
include_once('footer.php');
?>