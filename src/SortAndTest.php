<?php
use PHPUnit\Framework\TestCase;

class SortAndTest extends TestCase
{
    public function testSort()
    {
        $arr = [
            '0' => 'ahoj1',
            '1' => 'Ahoj10',
            '2' => 'ahoj12',
            '3' => 'Ahoj2',
            '4' => 'ahoj3',
        ];

        $sortedArr = [
            '0' => 'ahoj1',
            '3' => 'Ahoj2',
            '4' => 'ahoj3',
            '1' => 'Ahoj10',
            '2' => 'ahoj12',
        ];

        usort($arr, function($a, $b) {
            return strcmp(strtolower($a), strtolower($b));
        });

        $this->assertEquals($sortedArr, $arr);
    }
}