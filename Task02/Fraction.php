<?php
namespace App;

class Fraction
{
    private int $number;
    private int $denom;
    
    public function construct(int $number, int $denom)
    {
        if ($denom <= 0) {
            echo "Знаменатель не может быть равен нулю!\n";
            exit();
        }

        $this -> ShortFraction($number, $denom);
    }

    public function getNumer(): int
    {
        return $this -> number;
    }

    public function getDenom(): int
    {
        return $this -> denom;
    }

    public function add(Fraction $f): Fraction
    {
        $number = $f -> denom * $this -> number + $this -> denom * $f -> number;
        $denom = $this -> denom * $f -> denom;
        return new Fraction($number, $denom);
    }

    public function sub(Fraction $f): Fraction
    {
        $number = $f -> denom * $this -> number - $this -> denom * $f -> number;
        $denom = $this -> denom * $f -> denom;
        return new Fraction($number, $denom);
    }

    public function toString(): string
    {
        if (abs($this -> number) > $this -> denom) {
            return $this -> convert();
        }
        return $this -> number . "/" . $this -> denom;
    }

    private function ShortFraction($number, $denom)
    {
        $greatCF = $this -> InputFraction($number, $denom);
        if ($greatCF == 1) {
            $this -> number = $number;
            $this -> denom = $denom;
        } else {
            $this -> number = $number / $greatCF;
            $this -> denom = $denom / $greatCF;
        }
    }


    private function InputFraction($a, $b): int
    {
        return ($a % $b) ? $this -> InputFraction($b, $a % $b) : abs($b);
    }

    private function convert(): string
    {
        $integerPart = intval($this -> number / $this -> denom);
        $number = abs($this -> number % $this -> denom);
        return $integerPart . "'" . $number . "/" . $this -> denom;
    }
}