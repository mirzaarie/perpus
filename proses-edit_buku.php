<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $judul=$_POST['judul'];
    $pengarang=$_POST['pengarang'];
    $penerbit=$_POST['penerbit'];
    $stok=$_POST['stok'];

    // buat query update
    $result = mysqli_query($mysqli, "UPDATE buku SET judul='$judul',pengarang='$pengarang',penerbit='$penerbit', stok='$stok' WHERE id=$id");
    header('Location: view_buku.php');
} else {
    die("Akses dilarang...");
}

    // $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    // if( $query ) {
    //     // kalau berhasil alihkan ke halaman list-siswa.php
    //     header('Location: list-siswa.php');
    // } else {
    //     // kalau gagal tampilkan pesan
    //     die("Gagal menyimpan perubahan...");
    // }




?>