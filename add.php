<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tambah Data - CRUD Web App</title>
</head>
<body>
    <div class="container">
        <h2>Tambah Data</h2>
        <form action="process_add.php" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" required>

            <label for="umur">Umur:</label>
            <input type="number" name="umur" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="no_telp">No. Telp:</label>
            <input type="tel" name="no_telp" required>

            <button type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>
