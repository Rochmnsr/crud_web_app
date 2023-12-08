<?php
    include 'config.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
        $row = mysqli_fetch_array($result);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $nama = $_POST["nama"];
        $umur = $_POST["umur"];
        $email = $_POST["email"];
        $no_telp = $_POST["no_telp"];

        $sql = "UPDATE users SET nama='$nama', umur='$umur', email='$email', no_telp='$no_telp' WHERE id=$id";

        if (mysqli_query($conn, $sql)) {
            header("Location: index.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit Data - CRUD Web App</title>
</head>
<body>
    <div class="container">
        <h2>Edit Data</h2>
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <label for="nama">Nama:</label>
            <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required>

            <label for="umur">Umur:</label>
            <input type="number" name="umur" value="<?php echo $row['umur']; ?>" required>

            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo $row['email']; ?>" required>

            <label for="no_telp">No. Telp:</label>
            <input type="tel" name="no_telp" value="<?php echo $row['no_telp']; ?>" required>

            <button type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>
