<!DOCTYPE html>
<html>
<head>
	<title>Halaman User </title>
</head>
<body>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
	<h1>Halaman User</h1>
 
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a>
	<ul>
	  <li><a class="active" href="index.php">Buku</a></li>
	  <li><a href="#news">Member</a></li>
	  <li><a href="#contact">Peminjaman</a></li>
	  <li><a href="#contact">Penerbit</a></li>
	  <li style="float:right"><a href="#about">About</a></li>
    </ul>
   
	
        <h3>Data buku</h3>
		<button><a href="add_buku.php">Add New User</a><br/><br/></button>
		
	    <table border="1" class="table">
		    <tr>
    			<th>No</th>
    			<th>Judul</th>
    			<th>Pengarang</th>
    			<th>Penerbit</th>
    			<th>Stok</th>
				<th>Aksi</th>		
		    </tr>           
        <?php 
        //Select Tabel Buku dari database
            include "koneksi.php";
		    $query_mysql = mysqli_query($mysqli,"SELECT buku.*,penerbit.nama_penerbit FROM buku,penerbit WHERE penerbit.id=buku.penerbit")or die(mysqli_error());
		    $nomor = 1;
		    while($data = mysqli_fetch_array($query_mysql)){
		?>
            <tr>
    			<td><?php echo $nomor++; ?></td>
    			<td><?php echo $data['judul']; ?></td>
    			<td><?php echo $data['pengarang']; ?></td>
    			<td><?php echo $data['nama_penerbit']; ?></td>
                <td><?php echo $data['stok']; ?></td>
				<td><a href='edit_buku.php?id=<?php echo $data['id'];?>'>Edit</a>
					<a href='delete_buku.php?id=<?php echo $data['id'];?>'>Delete</a>
				</td>
            </tr>
            <?php } ?>
            
        </table>
 
	
</body>
</html>