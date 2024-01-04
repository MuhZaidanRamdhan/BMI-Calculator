<?php

require_once '../Models/BMICalculator.php';
require_once '../Controllers/BMICalculatorFactory.php';
require_once '../Controllers/MetricBMICalculator.php';

if (isset($_POST['submit'])){
    $beratBadan = $_POST["beratbadan"];
    $tinggiBadan = $_POST["tinggibadan"];

    // Contoh penggunaan
    $bmiCalculatorFactory = new MetricBMICalculatorFactory();
    $bmiCalculator = $bmiCalculatorFactory->createBMICalculator($beratBadan, $tinggiBadan);

    $bmi = $bmiCalculator->getBMI();
    $kategori = $bmiCalculator->getKategori();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator BMI</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Resource/css/style.css">
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4"> <?= (isset($_POST['submit'])) ? "BMI" : "Tidak terdapat inputan!!" ?></h1>
            <h2 class="display-4"><span>
                    <?= (isset($kategori)) ?$kategori : "null" ?>
                </span></h2>
            <div class="d-flex justify-content-around">
                <p class="lead">
                    Tinggi
                    <?= (isset($tinggiBadan)) ? $tinggiBadan : "null" ;?> Cm
                </p>
                <p class="lead">
                    Berat
                    <?= (isset($beratBadan)) ? $beratBadan : "null" ?> Kg
                </p>
            </div>
            <p class="lead">BMI Kamu :
                <?= (isset($bmi)) ? number_format($bmi, 1) . ", " . $kategori : "null" . ", " . "null" ?>
            </p>
            <p class="lead">Pastikan asupan kalori sesuai dengan kebutuhan kalori harian & konsumsi makanan sehat </p>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary" type="button" onclick="window.location.href='index.php'" >Cek Ulang</button>
            </div>
        </div>
    </div>
</body>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</html>