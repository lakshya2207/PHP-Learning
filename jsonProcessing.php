<?php
$array=array('a','b','c','d','e');
print_r($array);
echo '<br>';
// json_encode
$encodedJson=json_encode($array);
var_dump($encodedJson);
echo '<br>';


var_dump(json_decode($encodedJson));
echo '<br>';

echo phpversion();

?>