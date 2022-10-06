<?php

namespace App;

class ClassName_2 extends ClassName_Main
{
    public int $test_2=200;
    public function set_test_2 (int $t_2): void
    {
        $this->test_2 = $t_2;
    }

    public function get_test_2(): int
    {
        return $this->test_2;
    }

    public function square($num)
    {
        $square = $num*$num;
        return $square;
    }
}














