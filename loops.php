//Foreach loop
<?php
$numbers = [1,2,3,4,5,6,7,8,9,10];
foreach ($numbers as $x) {
    echo "$x <br>";
}
?>


//For loop  Loops through a block of code a specified number of times.
<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

for ($i = 0; $i < count($numbers); $i++) {
    echo  ($numbers[$i] + 1) . "<br>";
}
?>

//While Loop executes as a long as the specified condition is true
<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$i = 0;

while ($i < count($numbers)) {
    echo ($numbers[$i] + 1) . "<br>";
    $i++;
}
?>
