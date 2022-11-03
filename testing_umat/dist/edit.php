<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $Wilayah=$_POST['Wilayah'];
    $Agama=$_POST['Agama'];
    $L=$_POST['Laki-laki'];
    $P=$_POST['Perempuan'];
    $Total=$_POST['Total'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE kota_yogyakrta SET wilayah='$Wilayah',Agama='$Agama',Laki-laki='$L',Perempuan='$P',Total='$Total WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: umat.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM kota_yogyakrta WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $wilayah = $user_data['wilayah'];
    $Agama = $user_data['Agama'];
    $L = $user_data['Laki-laki'];
    $P = $user_data['Perempuan'];
    $Total = $user_data['Total'];

}
?>
<html>
<head>	
    <title>Edit User Data</title>
</head>
 
<body>
    <a href="umat.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Wilayah</td>
                <td><input type="text" name="WIlayah" value=<?php echo $Wilayah;?>></td>
            </tr>
            <tr> 
                <td>Agama</td>
                <td><input type="text" name="Agama" value=<?php echo $Agama;?>></td>
            </tr>
            <tr> 
                <td><Laki-laki></Laki-laki></td>
                <td><input type="text" name="Laki-laki" value=<?php echo $L;?>></td>
            </tr>
            <tr> 
                <td>Perempuan</td>
                <td><input type="text" name="Perempuan" value=<?php echo $P;?>></td>
            </tr>
            <tr> 
                <td>Total</td>
                <td><input type="text" name="Total" value=<?php echo $Total;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>