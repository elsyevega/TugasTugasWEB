<?php
	$nama = ($_POST['nama']);
    $tanggal_lahir = ($_POST['tanggal_lahir']);
    $jenis_kelamin = ($_POST['jenis_kelamin']);
    $nama_ortu = ($_POST['nama_ortu']);
    $no_hp_ortu = ($_POST['no_hp_ortu']);
    $alamat_ortu = ($_POST['alamat_ortu']);
    $sekolah_asal = ($_POST['sekolah_asal']);
    $tahun_lulus = ($_POST['tahun_lulus']);
    include ("db.php");

    $hasil = mysqli_query("INSERT INTO tbl_reg values ('$nama','$tanggal_lahir','$jenis_kelamin','$nama_ortu','$no_hp_ortu','$alamat_ortu','$sekolah_asal','$tahun_lulus')", $konek;
    	echo "penambahan data berhasil";
    	mysql_close($konek);
    ?>