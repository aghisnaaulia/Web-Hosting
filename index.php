<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM olshop ORDER BY id DESC");
?>

<html>
<head>    
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
<a href="add.php">Add New User</a><br/><br/>

    <table width='100%' border="1">

    <tr bgcolor="silver">
        <th>Nama</th> <th>Pesanan</th> <th>Alamat</th> <th>Update</th>
    </tr>
    <?php  
    while($olshop_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$olshop_data['nama']."</td>";
        echo "<td>".$olshop_data['pesanan']."</td>";
        echo "<td>".$olshop_data['alamat']."</td>";
        echo "<td><a href='edit.php?id=$olshop_data[id]'>Edit</a> | <a href='delete.php?id=$olshop_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>