<?php
include 'cone.php';

$cones = [
    new Cone(10, 20),
    new Cone(30, 40),
    new Cone(50, 60),
];

foreach ($cones as $cone) {
    echo "<p><strong>Cone with " . $cone->getDiameter() . " diameter and " . $cone->getHeight() . " height:</strong></p>";
    echo "<p>Volume = " . rtrim(rtrim(number_format($cone->getVolume(), 1, '.', ''), '0'), '.') . "</p>";
    echo "<p>Surface Area = " . rtrim(rtrim(number_format($cone->getSurfaceArea(), 10, '.', ''), '0'), '.') . "</p><br>";
}
?>
