<html>
    
    <head>
    <h1>Create Data Baru</h1>
    </head>

    <body>
        <h3>Data buku</h3>
	    <form action="add_buku.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr> 
                    <td>Judul</td>
                    <td><input type="text" name="judul"></td>
                </tr>
                <tr> 
                    <td>Pengarang</td>
                    <td><input type="text" name="pengarang"></td>
                </tr>
                <tr>
                    <td>Penerbit</td>
                    <td>
                        <select name="penerbit" id="penerbit">
                          <option disabled selected> Pilih </option>
                          <?php 
                          include_once("koneksi.php");
                          $query_mysql = mysqli_query($mysqli,"SELECT * FROM penerbit")or die(mysqli_error());
                          while ($data=mysqli_fetch_array($query_mysql)) {
                            foreach($query_mysql as $data){
                         ?>
                          <option value=<?php echo $data['id']; ?>><?php echo $data['nama_penerbit']; ?> </option>
                         <?php
                          }
                         ?>
                        </select>
                    </td>
                </tr>
                <tr> 
                    <td>Stok</td>
                    <td><input type="text" name="stok"></td>
                </tr>
                <tr>
                    
                    <td></td>
                    <td><input type="submit" name="Submit" value="Add"></td>
                </tr>
                <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $juduls= $_POST['judul'];
        $pengarangs = $_POST['pengarang'];
        $penerbits = $_POST['penerbit'];
        $stoks= $_POST['stok'];
        echo($judul);
        // include database connection file
        include_once("koneksi.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, 
        "INSERT INTO buku(judul,pengarang,penerbit,stok) 
        VALUES('$juduls','$pengarangs','$penerbits','$stoks')");

        
        // Show message when user added
       // echo "Data added successfully. <a href='index.php'>View Data Buku</a>";
        header("location:view_buku.php");

    }
    ?>
            </table>
        </form>
    </body>
</html>


