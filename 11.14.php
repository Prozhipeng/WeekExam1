<?php
echo Add(1,5);
function Add($num1, $num2)
{
	while ($num2!=0) {  
            $temp = $num1^$num2;  //不用进位的部分
            $num2 = ($num1&$num2)<<1;  //进位的部分
            $num1 = $temp;  
        }  
        return $num1;
}
