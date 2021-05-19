<?php declare(strict_types=1);

namespace App\Service;

class TriangleService
{
    public static function resultMessage(int $triangleArea): string
    {
        return "The area of a triangle is $triangleArea square cm.";
    }

    /**
     * Calculate area of the triangle using
     * base and height of the triangle
     * 
     * Formula:
     * a = (bh) / 2
     */
    public function baseAndHeightAreaCalculator(int $base, int $height): int|float
    {
        return ($base * $height) / 2;
    }

    /**
     * Calculate semiperimeter of the triangle for use in Heron's formula
     * 
     * Formula:
     * s = (sideA + sideB + sideC) / 2
     */
    private function semiperimeterCalculator(int $sideA, int $sideB, int $sideC): int|float
    {
        return ($sideA + $sideB + $sideC) / 2;
    }

    /**
     * Heron's formula for calculating triangle area with semiperimeter
     * and side lenghts
     * 
     * Formula:
     * s = semiperimeter value
     * a = sgrt(s(s-a)(s-b)(S-c))
     */
    private function heronFormula(int|float $semiperimeter, int $sideA, int $sideB, int $sideC): float
    {
        return sqrt(
            $semiperimeter * (
                ($semiperimeter - $sideA) * 
                ($semiperimeter - $sideB) * 
                ($semiperimeter - $sideC)
            )
        );
    }

    /**
     * Calculate area of the triangle using Heron's formula
     */
    public function heronFormulaAreaCalculator(int $sideA, int $sideB, int $sideC): float
    {
        // calculate semiperimeter using sidelenghts
        $semiperimeter = $this->semiperimeterCalculator($sideA, $sideB, $sideC);
        
        return $this->heronFormula($semiperimeter, $sideA, $sideB, $sideC);
    }
}