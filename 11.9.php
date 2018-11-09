<?php

//输入一个正整数数组，把数组里所有数字拼接起来排成一个数，打印能拼接出的所有数字中最小的一个。例如输入数组{3，32，321}，
//则打印出这三个数字能排成的最小数字为321323。
//冒泡方法
// 1.循环外层 i
// 2.内层循环 j，判断条件是j=i+1;j<arr.length;j++
// 3.内层调换 arr[i].arr[j] > arr[j].arr[i] 调换位置
function Number2($arr)
{
    $length=count($arr);

    for($i=0;$i<$length;$i++){

        for($j=$i+1;$j<$length;$j++){

            if(($arr[$i].''.$arr[$j])>($arr[$j].''.$arr[$i])){
                $temp=$arr[$i];

                $arr[$i]=$arr[$j];

                $arr[$j]=$temp;
            }
        }
    }
    return (implode('',$arr));
}
$arr = [43,12,443];
$result=Number2($arr);

echo "2:".$result;




//function get_days($date1,$date2){
//    $time1=strtotime($date1);
//    $time2=strtotime($date2);
//    return abs($time1-$time2)/86400;
//}
//echo get_days('2018-8-5','2018-8-6');
