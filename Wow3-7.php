<?php

class Polynomial {
    private $coefficients;

    public function __construct(array $coefficients) {
        $this->coefficients = $coefficients;
    }

    
    public function __invoke($x) {
        $result = 0;
        $degree = 0;

        foreach ($this->coefficients as $coef) {
            $result += $coef * pow($x, $degree);
            $degree++;
        }

        return $result;
    }

    
    public function __add(Polynomial $other) {
        $newCoefs = [];
        $len1 = count($this->coefficients);
        $len2 = count($other->coefficients);
        $maxLen = max($len1, $len2);

        for ($i = 0; $i < $maxLen; $i++) {
            $coef1 = $i < $len1 ? $this->coefficients[$i] : 0;
            $coef2 = $i < $len2 ? $other->coefficients[$i] : 0;
            $newCoefs[$i] = $coef1 + $coef2;
        }

        return new Polynomial($newCoefs);
    }

    
    public function getCoefficients() {
        return $this->coefficients;
    }
}

$poly = new Polynomial([10, -1]);  

echo $poly(0) . "\n";  
echo $poly(1) . "\n";  
echo $poly(2) . "\n";


?>