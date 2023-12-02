<?php

// Task 1
$inputString = "example string";
echo strtoupper($inputString) . "<br>";         // a.
echo strtolower($inputString) . "<br>";         // b.
echo ucfirst($inputString) . "<br>";            // c.
echo ucwords($inputString) . "<br>";            // d.

// Task 2
$numericString = '085119';
echo date('H:i:s', strtotime($numericString)) . "<br>";

// Task 3
$sentence = 'I am a full stack developer at orange coding academy';
$wordToCheck = 'Orange';
if (strpos($sentence, $wordToCheck) !== false) {
    echo 'Word Found!<br>';
} else {
    echo 'Word Not Found!<br>';
}

// Task 4
$url = 'www.orange.com/index.php';
$fileName = basename($url);
echo $fileName . "<br>";

// Task 5
$email = 'info@orange.com';
$username = strstr($email, '@', true);
echo $username . "<br>";

// Task 6
$string = 'info@orange.com';
$lastThreeChars = substr($string, -3);
echo $lastThreeChars . "<br>";

// Task 7
$characters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
$password = '';
for ($i = 0; $i < 8; $i++) {
    $password .= $characters[random_int(0, strlen($characters) - 1)];
}
echo $password . "<br>";

// Task 8
$sentence = 'That new trainee is so genius.';
$newWord = 'Our';
$newSentence = preg_replace('/\b\w+\b/', $newWord, $sentence, 1);
echo $newSentence . "<br>";

// Task 9
$string1 = 'dragonball';
$string2 = 'dragonboll';
$pos = strspn($string1 ^ $string2, "\0");
echo "First difference between two strings at position $pos: \"$string1[$pos]\" vs \"$string2[$pos]\"<br>";

// Task 10
$inputString = "Twinkle, twinkle, little star.";
$array = explode(' ', $inputString);
var_dump($array);
echo "<br>";

// Task 11
$char = 'a';
$nextChar = ++$char;
if (strlen($nextChar) > 1) {
    $nextChar = $nextChar[0];
}
echo $nextChar . "<br>";

// Task 12
$originalString = 'The brown fox';
$insertString = 'quick';
$position = 3;
$newString = substr_replace($originalString, $insertString . ' ', $position, 0);
echo $newString . "<br>";

// Task 13
$numberString = '0000657022.24';
$cleanedNumber = ltrim($numberString, '0');
echo $cleanedNumber . "<br>";

// Task 14
$originalString = 'The quick brown fox jumps over the lazy dog';
$removeString = 'fox';
$newString = str_replace($removeString, '', $originalString);
echo $newString . "<br>";

// Task 15
$originalString = 'The quick brown fox jumps over the lazy dog---';
$cleanedString = rtrim($originalString, '-');
echo $cleanedString . "<br>";

// Task 16
$specialString = '\"\1+2/3*2:2-3/4*3';
$cleanedString = preg_replace('/[^0-9]/', ' ', $specialString);
echo $cleanedString . "<br>";

// Task 17
$inputString = 'The quick brown fox jumps over the lazy dog';
$wordsArray = explode(' ', $inputString);
$first5Words = implode(' ', array_slice($wordsArray, 0, 5));
echo $first5Words . "<br>";

// Task 18
$numericString = '2,543.12';
$cleanedNumericString = str_replace(',', '', $numericString);
echo $cleanedNumericString . "<br>";

// Task 19
for ($i = ord('a'); $i <= ord('z'); $i++) {
    echo chr($i) . ' ';
}
echo "<br>";

?>
