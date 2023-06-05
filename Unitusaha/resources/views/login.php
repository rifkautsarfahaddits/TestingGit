<?php
// Koneksi ke database
$servername = "localhost";
$username = "db_username";
$password = "db_password";
$dbname = "db_name";
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi database
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

// Ambil data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk memeriksa kecocokan username dan password di database
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($query);

// Periksa hasil query
if ($result->num_rows > 0) {
    // Jika data ditemukan, user berhasil login
    session_start();
    $_SESSION['username'] = $username;
    header("Location: dashboard.php"); // Ganti dengan halaman dashboard setelah login berhasil
} else {
    // Jika data tidak ditemukan, user gagal login
    echo "Username atau password salah";
}

$conn->close();
?>
