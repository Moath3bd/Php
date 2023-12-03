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
echo Reverse($str);
/* Task 3
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
 
*/
// task 4
$a = 15;
$b = 27;
 
echo "\nThe number before swapping is:\n";
echo "Number a =".$a." and b=".$b;

$temp = $a;
$a = $b;
$b = $temp;
 
echo "\nThe number after swapping is: \n";
echo "Number a =".$a." and b=".$b."\n";


function armstrong_number($num) {
    $sl = strlen($num);
    $sum = 0;
    $num = (string)$num;
    for ($i = 0; $i < $sl; $i++) 
    {
      $sum = $sum + pow((string)$num($i),$sl);
    }
    if ((string)$sum == (string)$num) 
    {
      return "True";
    } else {
      return "False";
    }
  }
  echo "Is 153 Armstrong number? ".armstrong_number(153);
  echo "\nIs 21 Armstrong number? ".armstrong_number(21);
  echo "\nIs 4587 Armstrong number? ".armstrong_number(4587);"\n";
?>