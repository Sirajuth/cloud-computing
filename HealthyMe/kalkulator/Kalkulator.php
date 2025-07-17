<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator BMI</title>
    <link rel="stylesheet" href="Kalkulator.css">
</head>
<body>

    <div class="container">
        <div class="box">
          <h1>Kalkulator BMI</h1>
          <div class="content">
        <form id="bmiForm" action="Kalkulasi.php" method="POST">
            <div>
              <label class="form-group" for="name">Nama</label>
              <input type="text" id="name" name="name" autocomplete="off" required>
            </div>
            <div>
              <label class="form-group" for="height">Tinggi(cm)</label>
              <input type="number" id="height" name="height" autocomplete="off" required>
            </div>
            <div>
              <label class="form-group" for="weight">Berat(kg)</label>
              <input type="number" id="weight" name="weight" autocomplete="off" required>
            </div>
            <button type="submit">Hitung BMI</button>
        </div>
        </form>
        <br>
        <button class="recordList"onclick="window.location.href='records.php'">Riwayat</a></button>
      </div>
      <button class="home" onclick="window.location.href='../'">Beranda</a></button>
    </div>
    <script src="Kalkulator.js"></script>
</body>
</html>
