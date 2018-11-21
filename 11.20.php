<?php
//递归方式
function bin_recur_search($arr,$val){
    global $time;
    if(count($arr) >= 1){
        $mid = intval(count($arr) / 2);
        $time++;
        if($arr[$mid] == $val){
            $key = array_keys($arr,$arr[$mid]);
            return '值为:'.$arr[$mid].'<br>查找次数：'.$time.'<br>'.'下标为'.$key;
        }elseif($arr[$mid] > $val){
            $arr = array_splice($arr,0,$mid);
            return bin_recur_search($arr, $val);
        }else{
            $arr = array_slice($arr,$mid + 1);
            return bin_recur_search($arr, $val);
        }
    }
    return '未找到'.$val;
}

$arr = array(1,3,5,7,13,19,25,68,98,145,673,8542);
$val = 145;
print_r(bin_recur_search($arr,$val));