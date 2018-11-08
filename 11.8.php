<?php
//每年六一儿童节,周院长都会准备一些小礼物去看望孤儿院的小朋友,今年亦是如此。每次周院长准备了一些小游戏。其中,有个游戏是这样的:首先,让小朋友们围成一个大圈。然后,他随机指定一个数m,让编号为0的小朋友开始报数。每次喊到m-1的那个小朋友要出列唱首歌,然后可以在礼品箱中任意的挑选礼物,并且不再回到圈中,从他的下一个小朋友开始,继续0...m-1报数....这样下去....直到剩下最后一个小朋友,可以不用表演,并且拿到礼物。请你试着想下,哪个小朋友会得到这份礼品呢？(注：小朋友的编号是从0到n-1)


function killMonkey($monkeys , $m , $current = 0){
     $number = count($monkeys);
     $num = 1;
     if(count($monkeys) == 1){
         echo $monkeys[0]."成为了胜利者";
         return;
     }
     else{
         while($num++ < $m-1){
             $current++ ;
             $current = $current%$number;
         }
         echo $monkeys[$current]."删掉了<br/>";
         array_splice($monkeys , $current , 1);
         killMonkey($monkeys , $m , $current);
     }
 }
 $monkeys = array(1 , 2 , 3 , 4 , 5 , 6); //monkeys的编号
 $m = 3; //数到第几只猴子被踢出
 killMonkey($monkeys , $m);









