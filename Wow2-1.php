<?php

class Selector {
    private $numbers;

    public function __construct($numbers) {
        $this->numbers = $numbers;
    }

    public function get_odds() {
        $odds = [];
        foreach ($this->numbers as $number) {
            if ($number % 2 !== 0) {
                $odds[] = $number;
            }
        }
        return $odds;
    }

    public function get_evens() {
        $evens = [];
        foreach ($this->numbers as $number) {
            if ($number % 2 === 0) {
                $evens[] = $number;
            }
        }
        return $evens;
    }
}

$values = [11, 12, 13, 14, 15, 16, 22, 44, 66];
$selector = new Selector($values);
$odds = $selector->get_odds();
$evens = $selector->get_evens();
echo implode(' ', $odds) . "\n";
echo implode(' ', $evens) . "\n"; 

?>