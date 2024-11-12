<?php
    function insertionSort1($n, $arr) {
        for($i = 0; $i < count($arr); $i++) {
            $intersection_point = $arr[$i];
            $j = $i - 1;
            
            while($j >= 0 && $arr[$j] > $intersection_point) {
                $arr[$j + 1] = $arr[$j];
                $j--;
            }
            
            $arr[$j + 1] = $intersection_point;
        }
        echo implode(" ", $arr) . "\n";
    }
?>