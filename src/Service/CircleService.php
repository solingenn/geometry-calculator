<?php declare(strict_types=1);

namespace App\Service;

class CircleService
{
    public static function resultMessage(float $circleDiameter): string
    {
        return "The diameter of a circle is $circleDiameter cm.";
    }

    /**
     * Calculate circle diameter using radius
     * 
     * Formula:
     * d = 2r
     */
    public function circleDiameterCalculator(int $radius): int
    {
        return 2 * $radius;
    }
}