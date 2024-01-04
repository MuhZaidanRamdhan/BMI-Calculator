defined('BASEPATH') OR exit('No direct script access allowed');

// Cek apakah permintaan berasal dari file controller atau model
if (preg_match('/Controllers/.*|Models/.*/Resources/.*', $_SERVER['REQUEST_URI'])) {
    // Jika iya, tampilkan halaman kesalahan 404
    show_404();
}

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
            <h1 class="display-4">Kalkulator BMI</h1>
            <p class="lead">Hitung Indeks Massa Tubuh Anda dengan Mudah</p>
        </div>

        <form action="calculate.php" method="POST">
            <div class="row">
                <div class="col-md-6">
                    <div id="gender-selection">
                        <h4>Pilih Jenis Kelamin</h4>
                        <div class="gender-container" onclick="selectGender('male')">
                            <img src="https://i.pinimg.com/564x/33/f8/71/33f871978f930dd0c29214c7011bb378.jpg"
                                alt="Male" class="gender-image selected" id="gender-image-male">
                            <div class="gender-label">Laki-laki</div>
                        </div>
                        <div class="gender-container" onclick="selectGender('female')">
                            <img src="https://i.pinimg.com/236x/1d/19/6c/1d196c17f2777cf4a3862533086ef8f2.jpg"
                                alt="Female" class="gender-image not-selected" id="gender-image-female">
                            <div class="gender-label">Perempuan</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="height">Tinggi (cm):</label>
                        <input type="number" class="form-control" id="height" placeholder="Masukkan tinggi Anda"
                            name="tinggibadan" maxlength="3" required>
                    </div>
                    <div class="form-group">
                        <label for="weight">Berat (kg):</label>
                        <input type="number" class="form-control" id="weight" placeholder="Masukkan berat Anda"
                            name="beratbadan" maxlength="3" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary" name="submit">Hitung BMI</button>
                        </div>
                    </div>
                </div>
        </form>
        <div class="col-md-6">
            <div class="deskripsi">
                <h4>Berat badan ideal adalah impian semua orang. Tidak hanya memiliki bentuk tubuh yang
                    menunjang penampilan, berat badan ideal juga menandakan kondisi tubuh yang sehat. Bagaimana
                    denganmu? Yuk, hitung sekarang di BMI Kalkulator.</h4>
            </div>
        </div>
    </div>

    </div>

    <!-- Link Bootstrap JS dan Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script src="../Resource/js/script.js"></script>
    <script src="../Resource/js/gender.js">

    </script>



</body>

</html>