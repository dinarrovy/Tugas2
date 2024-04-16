<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "contacts_app";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
$query = "SELECT * FROM contacts";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="sidebar">
        <h2>Akun</h2>
        <ul>
            <li><a href="#">Profil</a></li>
            <li><a href="#">Ubah Password</a></li>
            <li><a href="login.html">Logout</a></li>
        </ul>
    </div>
    <div class="content">
        <h2>Dashboard</h2>
        <table>
            <thead>
                <tr>
                    <th>No ID</th>
                    <th>No Telepon</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id_contacts'] . "</td>";
                    echo "<td>" . $row['no_telepon'] . "</td>";
                    echo "<td>" . $row['nama'] . "</td>";
                    echo "<td>" . $row['alamat'] . "</td>";
                    echo "<td>";
                    echo "<button>Edit</button>";
                    echo "<button>Delete</button>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </thead>
        </table>
    </div>
</body>
</html>

<?php
mysqli_close($conn);
?>