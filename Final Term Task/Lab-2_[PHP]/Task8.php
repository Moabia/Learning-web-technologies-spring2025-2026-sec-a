<?php

$arr = array(
    array(1, 2, 3, 'A'),
    array(1, 2, 'B', 'C'),
    array(1, 'D', 'E', 'F')
);


echo "<h3>Number Shape</h3>";

for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr[$i]); $j++) {

  
        if (is_numeric($arr[$i][$j])) {
            echo $arr[$i][$j]." ";
        }
    }
    echo "<br>";
}

echo "<br>";


echo "<h3>Alphabet Shape</h3>";

for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr[$i]); $j++) {

      
        if (!is_numeric($arr[$i][$j])) {
            echo $arr[$i][$j] . " ";
        }
    }
    echo "<br>";
}
?>