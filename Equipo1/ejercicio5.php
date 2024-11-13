<?php
function isHappy($n) {
    $visited = [];

    while($n != 1 && !in_array($n, $visited)) {
        $visited[] = $n;

        $stringNumbers = strval($n);
        $arraySplitNumbers = str_split($stringNumbers);
        $n = 0;

        for ($i=0; $i < count($arraySplitNumbers) ; $i++) { 
            $number = intval($arraySplitNumbers[$i]);
            $n += $number * $number;
        }
    }

    return $n == 1 ? true : false;
}

print_r(isHappy(19) ? 'true' : 'false');

?>