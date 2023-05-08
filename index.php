<html>
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
		    </tr>           
        <?php 
        //Select Tabel Buku dari database
            include "koneksi.php";
		    $query_mysql = mysqli_query($mysqli,"SELECT * FROM buku")or die(mysqli_error());
		    $nomor = 1;
		    while($data = mysqli_fetch_array($query_mysql)){
		?>
            <tr>
    			<td><?php echo $nomor++; ?></td>
    			<td><?php echo $data['judul']; ?></td>
    			<td><?php echo $data['pengarang']; ?></td>
    			<td><?php echo $data['penerbit']; ?></td>
                <td><?php echo $data['stok']; ?></td>
            </tr>
            <?php } ?>
            
        </table>

    </body>
</html>