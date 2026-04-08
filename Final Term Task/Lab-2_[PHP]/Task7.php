<?php

echo "<h3>Star Pattern</h3>";
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

echo "<br>";


echo "<h3>Number Pattern</h3>";
for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j. " ";
    }
    echo "<br>";
}

echo "<br>";
echo "<h3>Alphabet Pattern</h3>";
$ch = 'A';
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $ch . " ";
        $ch++;
    }
    echo "<br>";
}

?>