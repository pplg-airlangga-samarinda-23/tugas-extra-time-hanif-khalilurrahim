<?php

require_once('config/dbtables.php');
$query = "select * from tables";
$result = mysqli_query($con,$query);

?>

<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['nama'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>DashBoard</title>
</head>
<body>
    <div class="head">
        <a>Zahwa</a>
        <img src="zahwa.jpg">
    </div>

    <div class="dashboard">
        <img src="tomut.jpg">
        <a href="">DashBoard</a><br>
        <a href="">Master Barang</a><br>
        <a href="">Receiving</a><br>
        <a href="">issuing</a><br>
        <a href="login.php">Back ⬅️</a><br>
    </div>

    <div class="tabel">
        <table>
            <tr>
              <th>No</th>
              <th>Barang</th>
              <th>Stock</th>
              <th>Harga</th>
            </tr>
            <tr>
            <?php
            
                while($row = mysqli_fetch_assoc($result))
                {
            ?>  
                <td><?php echo $row['No'] ?></td>
                <td><?php echo $row['Barang'] ?></td>
                <td><?php echo $row['Stock'] ?></td>
                <td><?php echo $row['harga'] ?></td>
            
            </tr>
            <?php
                }
                
            ?>

          </table>
    </div>

    <di class="footer">
        <a class="kopi">Copyright By karuga</a>
        <a class="vr">Version 1.0 Beta alpha Sigma</a>
    </di>

</body>
</html>

<?php 
}else{
    header("Location: login.php");
    exit();
}
?>