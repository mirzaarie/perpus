<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: view_buku.php');
}

// //ambil id dari query string
// $id = $_GET['id'];

// // buat query untuk ambil data dari database
// // $result = mysqli_query($mysqli, "SELECT * FROM buku WHERE id=$id");
// $sql = "SELECT * FROM buku WHERE id=$id";
// $query = mysqli_query($mysqli, $sql);
// $siswa = mysqli_fetch_assoc($query);

// // jika data yang di-edit tidak ditemukan
// if( mysqli_num_rows($query) < 1 ){
//     die("data tidak ditemukan...");
// }
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM buku WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $judul = $user_data['judul'];
    $pengarang = $user_data['pengarang'];
    $penerbit = $user_data['penerbit'];
    $stok=$user_data['stok'];
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Siswa | SMK Coding</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Siswa</h3>
    </header>
    <form method="POST" action="proses-edit_buku.php">
        <table border="0">
            <tr> 
                <td>Judul</td>
                <td><input type="text" name="judul" value="<?php echo $judul;?>"></td>
            </tr>
            <tr> 
                <td>Pengarang</td>
                <td><input type="text" name="pengarang" value="<?php echo $pengarang;?>"></td>
            </tr>
            <tr> 
                <td>Penerbit</td>
                <td><input type="text" name="penerbit" value="<?php echo $penerbit;?>"></td>
            </tr>
            <tr> 
                <td>Stok</td>
                <td><input type="text" name="stok" value=<?php echo $stok;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>
    </body>
</html>


