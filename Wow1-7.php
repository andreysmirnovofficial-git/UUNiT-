<?php

class BoundingRectangle {
    private $minX;
    private $maxX;
    private $minY;
    private $maxY;
    private $isInitialized = false;

    public function add_point($x, $y) {
        if (!$this->isInitialized) {
            $this->minX = $x;
            $this->maxX = $x;
            $this->minY = $y;
            $this->maxY = $y;
            $this->isInitialized = true;
        } else {
            $this->minX = min($this->minX, $x);
            $this->maxX = max($this->maxX, $x);
            $this->minY = min($this->minY, $y);
            $this->maxY = max($this->maxY, $y);
        }
    }

    public function width() {
        return $this->maxX - $this->minX;
    }
    public function height() {
        return $this->maxY - $this->minY;
    }

    public function bottom_y() {
        return $this->minY;
    }

    public function top_y() {
        return $this->maxY;
    }

    public function left_x() {
        return $this->minX;
    }

    public function right_x() {
        return $this->maxX;
    }
}

$rect = new BoundingRectangle();
$rect->add_point(-1, -2);
$rect->add_point(3, 4);
echo $rect->left_x() . " " . $rect->right_x() . "\n";  // -1 3
echo $rect->bottom_y() . " " . $rect->top_y() . "\n";     // -2 4
echo $rect->width() . " " . $rect->height() . "\n";         // 4 6


?>