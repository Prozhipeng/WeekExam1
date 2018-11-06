<?php

//求出1~13的整数中1出现的次数,并算出100~1300的整数中1出现的次数？为此他特别数了一下1~13中包含1的数字有1、10、11、12、13因此共出现6次,但是对于后面问题他就没辙了。希望大家帮帮他,并把问题更加普遍化,可以很快的求出任意非负整数区间中1出现的次数（从1 到 n 中1出现的次数）。
function nu($n,$m) {
    $number = 0;
    for($i=$n;$i<=$m;$i++) {
        $a = substr_count((string)$i,"1");
        if($a!==false) {
            $number = $number+$a;
        }
        //echo $i."\n";
    }
    echo $number;
}
nu(1,13);


function one($a,$b)
{
    $c = range($a,$b);
    $c = implode($c);
    $arr = str_split($c);
    return array_count_values($arr)[1];
}

