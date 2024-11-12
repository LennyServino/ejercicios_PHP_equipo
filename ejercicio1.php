<?php
/*
Input: heights = [1,1,4,2,1,3]
Output: 3

Explanation:
heights:  [1,1,4,2,1,3]
expected: [1,1,1,2,3,4]
Indices 2, 4, and 5 do not match.
*/
function orderHeight($array) {
    $array_expected = $array;
    $diferencias = 0;
    for($i = 0; $i <  count($array); $i++){
        for ($j=0; $j < count($array) - 1 ; $j++) {
            if($array[$j] > $array[$j+1]){
                $auxiliar = $array[$j+1];
                $array[$j + 1] = $array[$j];
                $array[$j] = $auxiliar;
            }
        }

        if($array[$i] !== $array_expected[$i]) {
            $diferencias++;
        }
    }

    return $diferencias;
}

echo orderHeight([1,1,4,2,1,3]);
?>