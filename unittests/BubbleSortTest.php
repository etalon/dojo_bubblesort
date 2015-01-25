<?php

require_once("../functions.php");

class BubbleSortTest extends PHPUnit_Framework_TestCase
{

    private $unsorted = array(55, 47, 79, 27, 17, 47, 99, 74, 12, 34, 37, 21, 76, 54);

    public function testSortedArrayAscendingOrder()
    {
        $this->testSortedArrayOrder(SortMode::Ascending);
    }

    function testSortedArrayOrder($p_SortMode = SortMode::Descending)
    {

        $sorted = doSort($this->unsorted, $p_SortMode);
        $lastvalue = $sorted[0];

        foreach ($sorted as $value) {

            switch ($p_SortMode) {
                case SortMode::Ascending:
                    $this->assertGreaterThanOrEqual($lastvalue, $value);
                    $lastvalue = $value;
                    break;
                case SortMode::Descending:
                    $this->assertGreaterThanOrEqual($value, $lastvalue);
                    $lastvalue = $value;
                    break;
                default:
                    $this->fail("Unerwarteter SortMode!");
            }
        }
    }

    public function testSortedArrayDescendingOrder()
    {
        $this->testSortedArrayOrder(SortMode::Descending);
    }

}



