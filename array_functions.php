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
$arr4 = [...$arr1, ...$arr2];

 //combining array (1 for key) (2 for value )
 $c = array_combine($arr1, $arr2);

 //flip, switch kiss and values 

 $numbers = range(1, 20);


 //create a new array using array map
 $new_numbers = array_map(function($number){
    return "Number ${number}";},  $numbers
 );
    //filter away
$lessThan10 = array_filter($numbers, fn($number) => $number <=10);

//array reduce 
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
var_dump($num)


?>
