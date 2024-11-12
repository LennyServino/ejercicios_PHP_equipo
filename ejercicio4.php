<?php
//Codigo testetado en Leetcode
     class Solution 
     {

        /**
        
         * @param Integer[] $nums
         * @param Integer $target
         * @return Integer
         */
        function search($nums, $target) 
        {
             list($first, $last) = [0, count($nums) - 1];
    
            while ($first <= $last) 
            {
                $middle = floor(($first + $last) / 2);
    
                if ($nums[$middle] === $target) 
                {
                    return $middle;
                }
    
                if ($nums[$middle] < $target) 
                {
                    $first = $middle + 1;
                } else {

                    $last = $middle - 1;
                }
            }
    
            return -1;
        }
    }
    
    $solution = new Solution();
    
    // Ejemplo 1:
    $nums1 = [1, 3, 5, 7, 9, 11];
    $target1 = 7;
    echo "Ejemplo 1: El índice de $target1 es " . $solution->search($nums1, $target1) . "\n";
    
    // Ejemplo 2:
    $nums2 = [1, 3, 5, 7, 9, 11];
    $target2 = 1;
    echo "Ejemplo 2: El índice de $target2 es " . $solution->search($nums2, $target2) . "\n";
    
    // Ejemplo 3:
    $nums3 = [1, 3, 5, 7, 9, 11];
    $target3 = 11;
    echo "Ejemplo 3: El índice de $target3 es " . $solution->search($nums3, $target3) . "\n";
    
    // Ejemplo 4:
    $nums4 = [1, 3, 5, 7, 9, 11];
    $target4 = 4;
    echo "Ejemplo 4: El índice de $target4 es " . $solution->search($nums4, $target4) . "\n";
    
    // Ejemplo 5:
    $nums5 = [5];
    $target5 = 5;
    echo "Ejemplo 5: El índice de $target5 es " . $solution->search($nums5, $target5) . "\n";
    
    // Ejemplo 6:
    $nums6 = [5];
    $target6 = 10;
    echo "Ejemplo 6: El índice de $target6 es " . $solution->search($nums6, $target6) . "\n";
?>
