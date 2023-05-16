<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
    <head>
	<ul>
	  <li><a class="active" href="index.php">Buku</a></li>
	  <li><a href="#news">Member</a></li>
	  <li><a href="#contact">Peminjaman</a></li>
	  <li><a href="#contact">Penerbit</a></li>
	  <li style="float:right"><a href="#about">About</a></li>
    </ul>
    </head>
    
    <body>
	
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