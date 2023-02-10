<?php


class Factorial
{

    public function factorial($num)
    {
        if (!is_int($num)) {
            return null;
        } else {
            if ($num < 0) {
                return null;
            }
            else if ($num == 0) {
                return 1;
            }
            else {
                return ($num * $this->factorial($num - 1));
            }
        }
    }
}