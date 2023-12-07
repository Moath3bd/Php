<?php
class MyClass 
{
    public function __construct() 
    {
        echo 'MyClass class has initialized!';
    }
}
$myObject = new MyClass();
?>
<?php
class Greeting 
{
    public function introduce($name) 
    {
        echo "Hello All, I am $name";
    }
}
$greeting = new Greeting();
$greeting->introduce("Scott");
?>
<?php
class Factorial 
{
    public function calculate($num)
    {
        if ($num < 0) 
        {
            return "Cannot calculate factorial for negative numbers.";
        }

        $result = 1;
        for ($i = 1; $i <= $num; $i++) 
        {
            $result *= $i;
        }

        return $result;
    }
}
$factorialObj = new Factorial();
echo $factorialObj->calculate(5);
?>
<?php
class ArraySort 
{
    public function sortArray($arr) 
    {
        sort($arr);
        return $arr;
    }
}

$arraySortObj = new ArraySort();
$sampleArray = array(11, -2, 4, 35, 0, 8, -9);
$resultArray = $arraySortObj->sortArray($sampleArray);
print_r($resultArray);
?>
<?php
class DateDifference 
{
    public function calculateDifference($date1, $date2)
    {
        $datetime1 = new DateTime($date1);
        $datetime2 = new DateTime($date2);
        $interval = $datetime1->diff($datetime2);
        return $interval->format('Difference: %y years, %m months, %d days');
    }
}

$dateDiffObj = new DateDifference();
echo $dateDiffObj->calculateDifference('1981-11-03', '2013-09-04');
?>
<?php
class StringToDateConverter 
{
    public function convertToDate($dateString) 
    {
        return date('Y-m-d', strtotime($dateString));
    }

    public function convertToDateTime($dateString) 
    {
        return date('Y-m-d H:i:s', strtotime($dateString));
    }
}
$stringToDateObj = new StringToDateConverter();
echo $stringToDateObj->convertToDate('12-08-2004'); 
?>


