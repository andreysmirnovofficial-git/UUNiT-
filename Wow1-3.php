<?php

class Balance {
    public $left_weight = 0;
    public $right_weight = 0;

    public function add_right($weight) {
        $this->right_weight += $weight;
    }

    public function add_left($weight) {
        $this->left_weight += $weight;
    }

    public function result() {
        if ($this->left_weight == $this->right_weight) {
            return '='; 
        } elseif ($this->left_weight > $this->right_weight) {
            return 'L'; 
        } else {
            return 'R'; 
        }
    }
}

$balance = new Balance();

$balance->add_right(10);
$balance->add_left(9);
$balance->add_left(2);

echo $balance->result();

?>