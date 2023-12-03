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
 ?>