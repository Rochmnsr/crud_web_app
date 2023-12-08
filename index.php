<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD Web App</title>
</head>
<body>
    <div class="container">
        <h2>CRUD Web App</h2>
        <a href="add.php">Tambah Data</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Email</th>
                <th>No. Telp</th>
                <th>Aksi</th>
            </tr>
            <?php
                include 'config.php';

                $result = mysqli_query($conn, "SELECT * FROM users");

                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['nama']."</td>";
                    echo "<td>".$row['umur']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['no_telp']."</td>";
                    echo "<td><a href='edit.php?id=".$row['id']."'>Edit</a> | <a href='delete.php?id=".$row['id']."'>Hapus</a></td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>
