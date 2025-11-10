<?php

class SquareFunction {
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function __invoke($x) {
        return $this->a * $x * $x + $this->b * $x + $this->c;
    }
}

$sf = new SquareFunction(1, 0, 0);
echo $sf(-2) . "\n";  
echo $sf(-1) . "\n";  
echo $sf(0)  . "\n";  
echo $sf(1)  . "\n";  
echo $sf(2)  . "\n";  
echo $sf(10) . "\n";  


?>