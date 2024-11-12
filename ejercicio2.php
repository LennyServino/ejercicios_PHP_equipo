<?php
/*
- `answer[i] == "FizzBuzz"` if `i` is divisible by `3` and `5`.
- `answer[i] == "Fizz"` if `i` is divisible by `3`.
- `answer[i] == "Buzz"` if `i` is divisible by `5`.
- `answer[i] == i` (as a string) if none of the above conditions are true. 
 */
function fizzBuzz($number) {
    $answer = [];

    for($i = 1; $i <= $number; $i++) {
        if($i % 3 == 0 && $i % 5 == 0) {
            $answer[] = 'FizzBuzz'; 
        } else if ($i % 3 == 0){
            $answer[] = 'Fizz';
        } else if($i % 5 == 0) {
            $answer[] = 'Buzz';
        } else{
            $answer[] = (string)$i;
        }
    }

    return $answer;
}

print_r(fizzBuzz(15));
?>