<?php

class Point {
    private $x;
    private $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function isEqual(Point $other): bool {
        return $this->x === $other->x && $this->y === $other->y;
    }

    public function isNotEqual(Point $other): bool {
        return !$this->isEqual($other);
    }

    public function __toString(): string {
        return "Point({$this->x}, {$this->y})";
    }
}

$p1 = new Point(1, 2);
$p2 = new Point(5, 6);

if ($p1->isEqual($p2)) {
    echo "Equal True\n";
} else {
    echo "Equal False\n"; 
}

if ($p1->isNotEqual($p2)) {
    echo "Not equal True\n"; 
} else {
    echo "Not equal False\n";
}


?>