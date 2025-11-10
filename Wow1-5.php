<?php

class BigBell {
    private $isDing = true;
    public function sound() {
        if ($this->isDing) {
            echo "ding\n";
            $this->isDing = false;
        } else {
            echo "dong\n";
            $this->isDing = true;
        }
    }
}

$bell = new BigBell();
$bell->sound();
$bell->sound();
$bell->sound();

?>