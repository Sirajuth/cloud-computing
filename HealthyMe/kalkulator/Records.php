<?php
$servername = "db";
$username = "admin";
$password = "password";
$dbname = "bmi_calculator";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_id'])) {
    $delete_id = $_POST['delete_id'];
    $delete_sql = "DELETE FROM bmi_records WHERE id = $delete_id";
    if ($conn->query($delete_sql) === TRUE) {
        ;
    } else {
       $conn->error;
    }
}

$sql = "SELECT * FROM bmi_records ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catatan BMI</title>
    <link rel="stylesheet" href="Kalkulator.css">
</head>
<body>
    <div class="container">
      <div class="record">
        <h1>Catatan BMI</h1>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Tinggi (cm)</th>
                    <th>Berat (kg)</th>
                    <th>BMI</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['height'] . "</td>";
                        echo "<td>" . $row['weight'] . "</td>";
                        echo "<td>" . $row['bmi'] . "</td>";
                        echo "<td>" . $row['status'] . "</td>";
                        echo "<td>" . $row['created_at'] . "</td>";
                        echo "<td>
                                <form method='POST' action='records.php'>
                                    <input type='hidden' name='delete_id' value='" . $row['id'] . "'>
                                    <button type='submit'>Hapus</button>
                                </form>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>Catatan Kosong</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <button class="rcbtn" onclick="window.location.href='Kalkulator.php'">Kembali</a></button>
        <button class="home" onclick="window.location.href='../'">Beranda</a></button>
       </div>
        <br>
        
    </div>
</body>
</html>

<?php
$conn->close();
?>
