<!-- 1.	Create variable [name,age]- Hello, I’m ____and my age is____ -->
<?php
$name = "Thiru";
$age = 21;

echo "Hello, I'm " . $name . " and my age is " . $age;
?>

<!-- 2.	Add two numbers using function -->
<?php
function add($a, $b){
    return $a + $b;
}

$result = add(10, 20);
echo "<br>Sum is: " . $result;
?>

<!-- 3.	Print numbers from 100 to 130 using loop -->

<?php
echo "<br>Numbers from 100 to 130:<br>";

for($i = 100; $i <= 130; $i++){
    echo $i . " ";
}
?>

 <!-- 4.	Check even or odd -->

<?php
$num = 15;

if($num % 2 == 0){
    echo "<br>$num is Even";
} else {
    echo "<br>$num is Odd";
}
?>

<!-- 5.	Store 5 colors in array and print -->

<?php
$colors = ["Red", "Green", "Blue", "Yellow", "Black"];

echo "<br>Colors List:<br>";

foreach($colors as $color){
    echo $color . "<br>";
}
?>

<!-- 6.	Built-in functions[sample program for all]
  – strlen, str_word_count, strtoupper,strtolower,str_replace, 
  count,sort,date,rand,min,max,isset,empty,gettype,die -->

<?php
$str = "Hello World";

echo "<br>String Length: " . strlen($str);
echo "<br>Word Count: " . str_word_count($str);
echo "<br>Uppercase: " . strtoupper($str);
echo "<br>Lowercase: " . strtolower($str);
echo "<br>Replace: " . str_replace("World", "PHP", $str);

$arr = [5, 2, 8, 1, 9];
echo "<br>Count: " . count($arr);

sort($arr);
echo "<br>Sorted Array: ";
print_r($arr);

echo "<br>Current Date: " . date("Y-m-d");

echo "<br>Random Number: " . rand(1, 100);

echo "<br>Minimum: " . min(10, 20, 5);
echo "<br>Maximum: " . max(10, 20, 5);

$x = 100;
echo "<br>Isset Check: ";
var_dump(isset($x));

$y = "";
echo "<br>Empty Check: ";
var_dump(empty($y));

echo "<br>Datatype: " . gettype($x);
?>