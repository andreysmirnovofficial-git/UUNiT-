<?php
class AmericanDate {
    private $year;
    private $month;
    private $day;

    public function __construct($year, $month, $day) {
        $this->year = $year;
        $this->month = $month;
        $this->day = $day;
    }

    public function set_year($year) {
        $this->year = $year;
    }

    public function set_month($month) {
        $this->month = $month;
    }

    public function set_day($day) {
        $this->day = $day;
    }

    public function get_year() {
        return $this->year;
    }

    public function get_month() {
        return $this->month;
    }

    public function get_day() {
        return $this->day;
    }

    public function format() {
        return sprintf("%02d.%02d.%04d", $this->month, $this->day, $this->year);
    }
}

class EuropeanDate {
    private $year;
    private $month;
    private $day;

    public function __construct($year, $month, $day) {
        $this->year = $year;
        $this->month = $month;
        $this->day = $day;
    }

    public function set_year($year) {
        $this->year = $year;
    }

    public function set_month($month) {
        $this->month = $month;
    }

    public function set_day($day) {
        $this->day = $day;
    }

    public function get_year() {
        return $this->year;
    }

    public function get_month() {
        return $this->month;
    }

    public function get_day() {
        return $this->day;
    }

    public function format() {
        return sprintf("%02d.%02d.%04d", $this->day, $this->month, $this->year);
    }
}

$american = new AmericanDate(2000, 4, 10);
$european = new EuropeanDate(2000, 4, 10);

echo $american->format() . "\n";  
echo $european->format() . "\n";   

?>