<?php
$arr = array(10, 20, 30, 40);
$search = 30;
$found = false;

for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] == $search) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "Found";
} else {
    echo "Not Found";
}
?>