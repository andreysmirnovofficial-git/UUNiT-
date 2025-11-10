<?php

class FoodInfo {
    private $proteins;
    private $fats;
    private $carbohydrates;

    public function __construct($proteins, $fats, $carbohydrates) {
        $this->proteins = (int)$proteins;
        $this->fats = (int)$fats;
        $this->carbohydrates = (int)$carbohydrates;
    }

    public function get_proteins() {
        return $this->proteins;
    }

    public function get_fats() {
        return $this->fats;
    }

    public function get_carbohydrates() {
        return $this->carbohydrates;
    }

    public function get_kcalories() {
        return 4 * $this->proteins + 9 * $this->fats + 4 * $this->carbohydrates;
    }

    public function add(FoodInfo $other) {
        $newProteins = $this->proteins + $other->proteins;
        $newFats = $this->fats + $other->fats;
        $newCarbohydrates = $this->carbohydrates + $other->carbohydrates;
        
        return new FoodInfo($newProteins, $newFats, $newCarbohydrates);
    }
}

$food1 = new FoodInfo(100, 100, 100);
$food2 = new FoodInfo(50, 60, 70);
$food3 = $food1->add($food2);

echo $food1->get_proteins() . ' ' . $food1->get_fats() . ' ' .
     $food1->get_carbohydrates() . ' ' . $food1->get_kcalories() . "\n";

echo $food2->get_proteins() . ' ' . $food2->get_fats() . ' ' .
     $food2->get_carbohydrates() . ' ' . $food2->get_kcalories() . "\n";

echo $food3->get_proteins() . ' ' . $food3->get_fats() . ' ' .
     $food3->get_carbohydrates() . ' ' . $food3->get_kcalories() . "\n";



?>