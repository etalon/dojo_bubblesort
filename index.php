<?php

require_once("functions.php");

$unsorted = array(55, 47, 79, 27, 17, 47, 99, 74, 12, 34, 37, 21, 76, 54);

echo "<h1>Unsorted</h1>";
echo join(",", $unsorted);

echo "<h1>Sorted Descending</h1>";
$sorted = doSort($unsorted, SortMode::Descending);

echo join(",", $sorted);

echo "<h1>Sorted Ascending</h1>";
$sorted = doSort($unsorted, SortMode::Ascending);

echo join(",", $sorted);