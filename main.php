<?php
/* Task 1
phpinfo();
*/
/* Task 2
echo "Tomorrow I 'll learn PHP global variables.<br>";
echo "This is a bad command: del c:\.";
*/
/* Task 4
$ipAddress = $_SERVER['address'];
echo "Your IP Address is: " . $ipAddress;
*/
/* Task 5
$fileName = basename($_SERVER['PHP_SELF']);
echo "The current file name is: " . $fileName;

*/
/*Task 6
$url = "https://www.w3schools.com/php/default.asp";

$urlComponents = parse_url($url);

echo "Scheme: " . $urlComponents['scheme'] . "<br>";
echo "Host: " . $urlComponents['host'] . "<br>";
echo "Path: " . $urlComponents['path'] . "<br>";
echo "Query: " . $urlComponents['query'] . "<br>";
echo "Fragment: " . $urlComponents['fragment'] . "<br>";
*/

/* Task 7
$string = "PHP Tutorial";
$words = explode(' ', $string);
foreach ($words as &$word) {
    if (!empty($word)) {
        $word = '<span style="color: red;">' . substr($word, 0, 1) . '</span>' . substr($word, 1);
    }
}
$modifiedString = implode(' ', $words);
echo $modifiedString;
*/
?>



