<?php
//manipulation and working with arrays 
$fruits = ['apple', 'mango', 'orange', 'pear'];

//get length of array
echo count($fruits);

//searching an array 
var_dump(in_array('apple', $fruits));

//add to array
$friuts[] = 'coconut'; //adds to the next 
array_push($friuts, 'strawberry'); //adds to the end 
array_unshift($friuts, 'pawpaw');

//remove
array_pop($friuts);
array_shift($fruits);

//spliting the array untio chunks
$array_chunked = array_chunk($fruits, 3);

//merging array
$arr1 = [1, 2, 3, 4];
$arr2 = [4, 5, 7, 8];

$arr3 = array_merge($arr1, $arr2);

//spread operator like js
$arr4 = [...$arr1, ...$arr2]

?>
