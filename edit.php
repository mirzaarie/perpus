<?php
// include database connection file
include_once("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    $judul=$_POST['judul'];
    $pengarang=$_POST['pengarang'];
    $penerbit=$_POST['penerbit'];
    $stok=$_POST['stok'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE buku SET judul='$judul',pengarang='$pengarang',penerbit='$penerbit','stok=$stok' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
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
<html>
<head>	
    <title>Edit Data Buku</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Judul</td>
                <td>
                    <input type="text" name="judul" value=<?php echo $judul;?>>
                </td>
            </tr>
            <tr> 
                <td>Pengarang</td>
                <td>
                    <input type="text" name="pengarang" value=<?php echo $pengarang;?>>
                </td>
            </tr>
            <tr> 
                <td>Penerbit</td>
                <td>
                    <input type="text" name="penerbit" value=<?php echo $penerbit;?>>
                </td>
            </tr>
            <tr> 
                <td>Stok</td>
                <td>
                    <input type="text" name="stok" value=<?php echo $stok;?>>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
                </td>
                <td>
                    <input type="submit" name="update" value="Update">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
