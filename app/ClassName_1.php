<?php

namespace App;

class ClassName_1 extends ClassName_Main
{
    public int $test_1=100;
    public function set_test_1 (int $t_1): void
    {
        $this->test_1 = $t_1;
    }

    public function get_test_1(): int
    {
        return $this->test_1;
    }

    public function square($num)
    {
        $square = $num*$num;
        return $square;
    }
}