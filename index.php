<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <head>
    <h1>Menampilkan Tabel</h1>
    </head>
    
    <body>
        <h3>Data buku</h3>
		<button><a href="add.php">Add New User</a><br/><br/></button>
		
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
				<td><a href='edit.php?id=<?php echo $data['id'];?>'>Edit</a>
					<a href='delete.php?id=<?php echo $data['id'];?>'>Delete</a>
				</td>
            </tr>
            <?php } ?>
            
        </table>

    </body>
</html>