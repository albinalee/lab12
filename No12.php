<?php
$arr = array();
$sum = 0;
for($i = 0; $i < 100; $i++)
{
    $arr[$i] = $i + 1; 
    $sum += $arr[$i];
}
print_r($arr);
print($sum);
?>

<?php
$arr = array();
for($i = 'a'; $i <= 'e'; $i++)
    $arr[] = $i;
print_r($arr);
$arr = array_map('strtoupper', $arr);
print_r($arr);
?>

<?php
$arr = array();
for($i = 'a'; $i <= 'e'; $i++)
    $arr[] = $i;
print_r($arr);
print count($arr) . " elements";
?>

<?php
$arr = array();
for($i = 0; $i < 10; $i++)
    $arr[$i] = $i + 1;
print_r($arr);
print "last : " . $arr[count($arr)-1];
?>

<?php
$arr = array();
for($i = 0; $i < 10; $i++)
    $arr[$i] = $i + 1;
print_r($arr);
if (in_array(3, $arr))
    print "contains 3";
else print "not found";
?>

<?php
$arr = array();
$mult = 1;
for($i = 0; $i < 5; $i++)
{
    $arr[$i] = $i + 1; 
    $mult *= $arr[$i];
}
print_r($arr);
print($mult);
?>

<?php
$arr = array();
for($i = 0; $i < 10; $i++)
    $arr[$i] = $i + 1;
print_r($arr);
print "avg = " . array_sum($arr) / count($arr);
?>

<?php
$arr = range('a', 'z');
print_r($arr);
?>

<?php
$arr = range(1, 9);
$str = join('-', $arr);
print $str;
?>

<?php
$arr = range(1, 10);
$mult = array_product($arr);
print $mult;
?>

<?php
$num = range(1, 5);
print_r($num);
$result = array_slice($num, 1, 3);
print_r($result);
?>

<?php
$num = range(1, 5);
print_r($num);
array_splice($num, 1, 2);
print_r($num);
?>

<?php
$num = range(1, 5);
print_r($num);
$result = array_splice($num, 1, 3);
print_r($result);
?>

<?php
$num = range(1, 5);
print_r($num);
array_splice($num, 3, 0, ['a', 'b', 'c']);
print_r($num);
?>

<?php
$num = range(1, 5);
print_r($num);
array_splice($num, 1, 0, ['a', 'b']);
array_splice($num, 6, 0, 'c');
array_splice($num, count($num), 0, 'e');
print_r($num);
?>

<?php
$arr = array('a' => 1, 'b' => 2, 'c' => 3);
print_r($arr);
$keys = array_keys($arr);
$values = array_values($arr);
print_r($keys);
print_r($values);
$new_arr = array_combine($keys, $values);
print_r($new_arr);
?>

<?php
$arr = array('a' => 1, 'b' => 2, 'c' => 3);
print_r($arr);
$arr = array_flip($arr);
print_r($arr);
?>

<?php
$num = range(1, 5);
print_r($num);
$num = array_reverse($num);
print_r($num);
?>

<?php
$arr = range('a', 'd');
$arr = str_split(join('-', $arr));
print_r($arr);
$i = array_search('-', $arr);
print $i . "\n";
array_splice($arr, $i, 1);
print_r($arr);
?>

<?php
$arr = range('a', 'e');
print_r($arr);
$arr[0] = '!';
$arr[3] = '!!';
print_r($arr);
?>

<?php
$arr = array(3 => 'a', 1 => 'c', 2 => 'e', 4 => 'b');
print_r($arr);
array_multisort($arr);
print_r($arr);
array_multisort($arr, SORT_DESC);
print_r($arr);
array_multisort($arr, SORT_STRING);
print_r($arr);
?>

<?php
$arr = array('a' => 1, 'b' => 2, 'c' => 3);
print_r($arr);
print array_rand($arr) . "\n";
print $arr[array_rand($arr)];
?>

<?php
$arr = range('a', 'e');
print_r($arr);
shuffle($arr);
print_r($arr);
?>

<?php
$arr = range(1, 25);
print_r($arr);
shuffle($arr);
print_r($arr);
?>

<?php
$arr = range('a', 'z');
shuffle($arr);
print_r($arr);
?>

<?php
$arr = range('a', 'z');
shuffle($arr);
$str = substr(join($arr), 0, 6);
print $str;
?>

<?php
$arr = array('a', 'b', 'c', 'b', 'a');
print_r($arr);
$arr = array_unique($arr);
print_r($arr);
?>

<?php
$num = range(1, 5);
print_r($num);
print array_shift($num) . "\n";
print array_pop($num) . "\n";
print_r($num);
?>

<?php
$num = range(1, 5);
print_r($num);
array_unshift($num, 0);
array_push($num, 6);
print_r($num);
?>

<?php
$num = range(1, 8);
print_r($num);
while (count($num) != 0)
{
    print array_shift($num);
    print array_pop($num);
}
?>

<?php
$arr = range('a', 'c');
print_r($arr);
$arr = array_merge($arr, array_fill(0, 3, '-'));
print_r($arr);
?>

<?php
$arr = array_fill(0, 10, 'x');
print_r($arr);
?>

<?php
$num = range(1, 20);
print_r($num);
print_r(array_chunk($num, 4, true));
?>