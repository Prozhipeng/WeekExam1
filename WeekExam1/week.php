<?php

interface Walk{
	public function gongjiao();
	public function paobu();
	public function qiche();
}

class Person{
	public function name(){
		$name1 = "zhangsan";
		$name2 = "lisi";
		$name3 = "wangwu";
	}
	public function age(){
		$age1 = 32;
		$age2 = 43;
		$age3 = 12;
	}
}
/**
 * 
 */
class Student extends PersonClass
{
	public function age($age)
	{
		return $age."岁";
	}
	public function sex($sex){
		return $sex."人";
	}
	public function phone($phone){
		return $phone;
	}
	public function tizhong($tizhong){
		return $tizhong."千克";
	}
	public function gao($gao){
		return $gao."厘米";
	}
	
	
}































//回文赋
// function ishuiwen($str){
//   $len=strlen($str);
//   $l=1;
//   $k=intval($len/2)+1;
//    for($j=0;$j<$k;$j++){
//     if (substr($str,$j,1)!=substr($str,$len-$j-1,1))
//      {
//   $l=0;
//   break;
//    }
//  }
//  if ($l==1)
//  {
//  return 1;
//  }
//  else
//  {
//  return -1;
//   }
//  }
//  $str= 12321;
//  echo ishuiwen($str);





























//求阶乘
// function a($n,$t=1){
//     if ($n>1) {
//         $t = a($n-1,$t*$n);
//     }
//     return $t;
// }
// function demo($a)
// {
//    if($a > 1){
// 	  $r=$a*demo($a-1);
// 	}else{
// 	  $r=$a;
// 	}
// 	return $r;
// }

// $a=5;
// echo $a."===".demo($a);

/**
 * 1+2+3+...+100的和
 */
// class Sum{
// 	//循环求和
// 	public function getsum1($init){
// 		$sum = 0;
// 		for ($i=0; $i <= $init ; $i++) { 
// 			$sum+=$i;
// 		}
// 		return $sum;
// 	}
// 	public function getsum2($value='')
// 	{
// 		$n = 100;
// 		return ($n+1)*($n/2);
// 	}
// 	public function getsum3(){
// 		$sum=$i=0;
// 		while($i<=100)
// 		{
// 		 	$sum+=($i++);
// 		}
// 		return $sum;
// 	}
// 	public function get_sum($n)
// 	{
// 		return $n==1?1:$n+get_sum($n-1);
// 	}
// }



