<?php
// Task 1

class IsPrime
{
    function check($num)
    {
        $bCheck = true;
        for ($i=2;$i<$num;$i++)
        {
            if($num %$i ==0)
            {
                $bCheck = false;
                break;
            }
        }
        if ($bCheck)
        echo 'Prime';
        else
        echo 'Not prime';
    }
}
$x = new Isprime();
$x->check(4);

// Task 2
function Reverse($str)
{ 
    return strrev($str); 
} 
  
$str = "moath"; 
echo Reverse($str)
// Task 3
function is_str_lowercase($str1)
   {
    for ($sc = 0; $sc < strlen($str1); $sc++) {
	      if (ord($str1[$sc]) >= ord('A') &&
          ord($str1[$sc]) <= ord('Z')) {
      return false;
         }
         }
      return true;
       }
var_dump(is_str_lowercase('abc def ghi'));
var_dump(is_str_lowercase('abc dEf ghi'));
 ?>