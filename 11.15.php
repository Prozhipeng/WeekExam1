<?php

function FindNumbersWithSum($array = [1,2,4,7,11,15], $sum = 15)
{
        $low = 0;
        $heigh = count($array) - 1;
        for ($i = 0; $i < count($array); $i++) {
            if ($array[$low] + $array[$heigh] == $sum) {
                break;
            }else if($array[$low] + $array[$heigh] > $sum){
                $heigh--;
            }else {
                $low++;
            }
        }
        print_r("两个数分别为".$array[$low]."  ".$array[$heigh]));

}
// $array = [1,2,4,7,11,15];
// $sum = 15;
FindNumbersWithSum($array,$sum);