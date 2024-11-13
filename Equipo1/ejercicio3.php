<?php
    function insertionSort1($n, $arr) {
        $intersection_point = $arr[$n - 1];
        $j = $n - 2;

        while($j >= 0 && $arr[$j] > $intersection_point) {
            $arr[$j + 1] = $arr[$j];
            $j--;
            echo implode(" ", $arr) . "<br>";
        }

        $arr[$j + 1 ] = $intersection_point;

        echo implode(" ", $arr) . "<br>";
    }

    insertionSort1(5, [1, 2, 4, 5, 3]);
?>