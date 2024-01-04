<?php

// Kelas AbstractFactoryBMICalculator
abstract class AbstractFactoryBMICalculator
{
    /**
     * Membuat instance BMICalculator.
     *
     * @param float $berat   Berat badan dalam kilogram.
     * @param float $tinggi  Tinggi badan dalam sentimeter.
     * @return BMICalculator  Instance BMICalculator.
     */
    abstract public function createBMICalculator($berat, $tinggi): BMICalculator;
}


// Kelas MetricBMICalculatorFactory
class MetricBMICalculatorFactory extends AbstractFactoryBMICalculator
{
    /**
     * Membuat instance MetricBMICalculator.
     *
     * @param float $berat   Berat badan dalam kilogram.
     * @param float $tinggi  Tinggi badan dalam sentimeter.
     * @return MetricBMICalculator  Instance MetricBMICalculator.
     */
    public function createBMICalculator($berat, $tinggi): BMICalculator
    {
        return new MetricBMICalculator($berat, $tinggi);
    }
}
?>