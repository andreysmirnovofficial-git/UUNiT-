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

    public function delete_row($row) {
        if ($row < 0 || $row >= $this->rows) {
            return;
        }
        array_splice($this->data, $row, 1);
        $this->rows--;
    }

    public function delete_col($col) {
        if ($col < 0 || $col >= $this->cols) {
            return;
        }
        foreach ($this->data as &$row) {
            array_splice($row, $col, 1);
        }
        $this->cols--;
    }

    public function add_row($row) {
        if ($row < 0 || $row > $this->rows) {
            return;
        }
        $newRow = array_fill(0, $this->cols, 0);
        array_splice($this->data, $row, 0, [$newRow]);
        $this->rows++;
    }

    public function add_col($col) {
        if ($col < 0 || $col > $this->cols) {
            return;
        }
        foreach ($this->data as &$row) {
            array_splice($row, $col, 0, [0]);
        }
        $this->cols++;
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
echo "\n";

$tab->add_row(1);

for ($i = 0; $i < $tab->n_rows(); $i++) {
    for ($j = 0; $j < $tab->n_cols(); $j++) {
        echo $tab->get_value($i, $j) . ' ';
    }
    echo "\n";
}

?>