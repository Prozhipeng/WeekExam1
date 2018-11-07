<?php
header("content-type:text/html;charset=utf-8");
//把只包含质因子2、3和5的数称作丑数（Ugly Number）。例如6、8都是丑数，但14不是，
//因为它包含质因子7。 习惯上我们把1当做是第一个丑数。求按从小到大的顺序的第N个丑数。


function chou($num){
  for($i = 2;;$i*=1){
    if(is_int($num/2)){
      $num = $num/2;
      echo $num;
    }else if($num == 1){
      return 'YES1';
    }else{
      for($j = 3;;$j*=1){
        if(is_int($num/$j)){
          $num = $num/$j;
        }else if($num == 1){
          return 'YES2';
        }else{
          for($o = 5;;$o*=1){
            if(is_int($num/$o)){
              $num = $num/$o;
            }else if($num == 1){
              return 'YES3';
            }else{
              return 'NO!';
            }
          }
        }
      }
    }

  }
}
echo chou(12);