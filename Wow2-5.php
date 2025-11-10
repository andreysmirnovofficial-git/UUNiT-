<?php

class Table {
    private $rows;
    private $cols;
    private $data;

    public function __construct($rows, $cols) {
        $this->rows = $rows;
        $this->cols = $cols;
        $this->data = [];
        for ($i = 0; $i < $rows; $i++) {
            $this->data[$i] = array_fill(0, $cols, 0);
        }
    }

    public function get_value($row, $col) {
        if ($row < 0 || $row >= $this->rows || $col < 0 || $col >= $this->cols) {
            return null; 
        }
        return $this->data[$row][$col];
    }

    public function set_value($row, $col, $value) {
        $this->data[$row][$col] = $value;
    }

    public function n_rows() {
        return $this->rows;
    }

    public function n_cols() {
        return $this->cols;
    }
}

$tab = new Table(3, 5);
$tab->set_value(0, 1, 10);
$tab->set_value(1, 2, 20);
$tab->set_value(2, 3, 30);

for ($i = 0; $i < $tab->n_rows(); $i++) {
    for ($j = 0; $j < $tab->n_cols(); $j++) {
        echo $tab->get_value($i, $j) . ' ';
    }
    echo "\n";
}

?>