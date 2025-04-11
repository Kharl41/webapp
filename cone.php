<?php
class Cone {
    private $radius;
    private $height;
    private const PI = 3.1416;

    public function __construct($diameter, $height) {
        $this->radius = $diameter / 2;
        $this->height = $height;
    }

    public function getVolume() {
        return (1/3) * self::PI * pow($this->radius, 2) * $this->height;
    }

    public function getSurfaceArea() {
        $slantHeight = sqrt(pow($this->radius, 2) + pow($this->height, 2));
        return self::PI * $this->radius * ($this->radius + $slantHeight);
    }

    public function getDiameter() {
        return $this->radius * 2;
    }

    public function getHeight() {
        return $this->height;
    }
}
?>
