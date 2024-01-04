<?php


// Kelas MetricBMICalculator
class MetricBMICalculator implements BMICalculator
{
    private float $berat; // Berat badan dalam kilogram
    private float $tinggi; // Tinggi badan dalam sentimeter

    /**
     * Konstruktor untuk MetricBMICalculator.
     *
     * @param float $berat   Berat badan dalam kilogram.
     * @param float $tinggi  Tinggi badan dalam sentimeter.
     */
    public function __construct(float $berat, float $tinggi)
    {
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }

    /**
     * Menghitung dan mengembalikan nilai BMI (Body Mass Index).
     *
     * @return float Nilai BMI.
     */
    public function getBMI(): float
    {
        // Mengonversi tinggi badan ke meter.
        $tinggibadanMeter = $this->tinggi / 100;

        // Menghitung BMI menggunakan rumus standar.
        $bmi = $this->berat / ($tinggibadanMeter * $tinggibadanMeter);

        return $bmi;
    }

    /**
     * Mengembalikan kategori berat badan berdasarkan nilai BMI.
     *
     * @return string Kategori berat badan (Kurus, Normal, Gemuk, atau Obesitas).
     */
    public function getKategori(): string
    {
        $bmi = $this->getBMI();

        // Menentukan kategori berat badan berdasarkan nilai BMI.
        if ($bmi < 18.5) {
            return "Kurus";
        } elseif ($bmi < 25) {
            return "Normal";
        } elseif ($bmi < 30) {
            return "Gemuk";
        } else {
            return "Obesitas";
        }
    }
}
