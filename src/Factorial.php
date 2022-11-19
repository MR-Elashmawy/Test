<?php 
class Factorial{

    public function factorialFunction($n) {
        if (is_int($n) && $n >= 0) {
            $factorial = 1;
            for ($i = 1; $i <= $n; $i++) {
                $factorial *= $i;
            }
            return $factorial;
        } else {
            return null;
        }
    }

}
?>