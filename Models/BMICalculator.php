<?php


// Produk Abstrak: Kalkulator BMI
interface BMICalculator
{

    /**
     * Mengambil dan mengembalikan nilai BMI (Body Mass Index).
     *
     * @return float Nilai BMI.
     */
    public function getBMI(): float;

    /**
     * Mengambil dan mengembalikan kategori berat badan berdasarkan nilai BMI.
     *
     * @return string Kategori berat badan (Kurus, Normal, Gemuk, atau Obesitas).
     */
    public function getKategori(): string;

}


