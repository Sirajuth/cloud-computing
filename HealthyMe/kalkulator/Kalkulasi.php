<?php
$servername = "db";
$username = "admin";
$password = "password";
$dbname = "bmi_calculator";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Koneksi Gagal!: " . $conn->connect_error);
}

$name = $_POST['name'];
$height = $_POST['height'];
$weight = $_POST['weight'];

$bmi = $weight / (($height / 100) ** 2);

if ($bmi < 18.5) {
    $status = "Berat Badan Kurang";
} elseif ($bmi >= 18.5 && $bmi < 24.9) {
    $status = "Normal";
} elseif ($bmi >= 25 && $bmi < 29.9) {
    $status = "Berat Badan Berlebih";
} else {
    $status = "Obesitas";
}


$sql = "INSERT INTO bmi_records (name, height, weight, bmi, status) VALUES ('$name', '$height', '$weight', '$bmi', '$status')";

if ($conn->query($sql) === TRUE) {
    ;
} else {
    $conn->error;
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Kalkulasi BMI</title>
    <link rel="stylesheet" href="Kalkulator.css">
</head>
<body>
    <div class="container">
        <div class="kalkulasi">
            <div class="content">
                <h1>Hasil Kalkulasi BMI</h1>
                <p>Nama: <?php echo $name; ?></p>
                <p>Tinggi(cm): <?php echo $height; ?> cm</p>
                <p>Berat(kg): <?php echo $weight; ?> kg</p>
                <p>BMI: <?php echo $bmi; ?></p>
                <p>Status: <?php echo $status; ?></p>
                <button class="klbtn" onclick="window.location.href='Kalkulator.php'">Hitung Ulang</a></button>
            </div>
        </div>
        <button class="home" onclick="window.location.href='../'">Beranda</a></button>
    </div>
</body>
</html>
