<?php

namespace App;

abstract class ClassName_Main
{
    public int $test;
    public function set_test (int $t): void
    {
        $this->test = $t;
    }

    public function tt ($test)
    {
        return $this->test*$test;
    }

    public function get_test(): int
    {
        return $this->test;
    }

    public string $string = 'test';
    public function set_string (int $s): void
    {
        $this->test = $s;
    }

    public function get_string(): int
    {
        return $this->test;
    }

    abstract public function square ($num);
}
