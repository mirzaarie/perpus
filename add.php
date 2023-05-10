<html>
    <head>
    <h1>Create Data Baru</h1>
    </head>

    <body>
        <h3>Data buku</h3>
	    <form action="add.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr> 
                    <td>Judul</td>
                    <select name="buku" id="provinsi">
                        <option disabled selected> Pilih </option>
                            <?php 
                                include "koneksi.php";
                                $query_mysql = mysqli_query($mysqli,"SELECT * FROM buku")or die(mysqli_error());
                                while ($data=mysql_fetch_array($query_mysql)) {
                            ?>
                        <option value="<?=$data['provinsi']?>"><?=$data['provinsi']?></option> 
                        <?php
                            }
                        ?>
                    </select>
                    <!-- <td><input type="text" name="judul"></td> -->
                </tr>
                <tr> 
                    <td>Pengarang</td>
                    <td><input type="text" name="pengarang"></td>
                </tr>
                <tr> 
                    <td>Penerbit</td>
                    <td><input type="text" name="penerbit"></td>
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
        header("location:index.php");

    }
    ?>
            </table>
        </form>
    </body>
</html>


