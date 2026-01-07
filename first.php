<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";
echo "<br/>";

// echo "Hello bro";
// This is a single-line comment

# This is also a single-line comment
// This is also a single-line comment

/* This is a
multi-line comment */

// VARIABLE
$txt = "W3Schools.com";
echo "I love " . $txt . "!";

echo "<br/>";

$x = 5;
var_dump($x);
echo "<br/>";
var_dump(5);
echo "<br/>";
var_dump("John");
echo "<br/>";
var_dump(3.14);
echo "<br/>";
var_dump(true);
echo "<br/>";
var_dump([2, 3, 56]);
echo "<br/>";
var_dump(NULL);

// FUNCTION & SCOPE
function myTest() {
    global $x;
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

function myTest2() {
    static $x = 0;
    echo $x;
    echo "<br/>";
    $x++;
}

myTest2();
myTest2();
myTest2();

echo "<br/>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

echo "<h2>$txt1</h2>";
echo '<h3>' . $txt1 . '</h3>';
echo "<p>Study PHP at $txt2</p>";


$name = 'Linus';
echo '<h1>Hello $name</h1>'; // won't work 
echo "<h1>Hello $name</h1>"; // will work

$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>";
var_dump($y);

echo "<br>";
$x = 5;
$x = (string) $x;
var_dump($x); 

?>

</body>
</html>