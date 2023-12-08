<?php
    include 'config.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $umur = $_POST["umur"];
        $email = $_POST["email"];
        $no_telp = $_POST["no_telp"];

        $sql = "INSERT INTO users (nama, umur, email, no_telp) VALUES ('$nama', '$umur', '$email', '$no_telp')";

        if (mysqli_query($conn, $sql)) {
            header("Location: index.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
?>
