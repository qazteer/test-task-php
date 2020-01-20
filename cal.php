<?php

/**
 * Class Cal
 */
class Cal
{
    public $result = 0;

    /**
     * @param $var
     * @return number
     */
    public function add($var)
    {
        return $this->result = $this->result + $var;
    }

    /**
     * @param $var
     * @return number
     */
    public function min($var)
    {
        return $this->result = $this->result - $var;
    }

    /**
     * @param $digit
     * @return float|int
     */
    public function divider($digit)
    {
        return $this->result = $this->result * $digit;
    }

    /**
     * @param $var
     * @return float|int
     */
    public function multiply($var)
    {
        return $this->result = $this->result * $var;
    }

    /**
     * @param $var
     * @param int $precision
     * @return false|float
     */
    public function round($var, $precision = 0)
    {
        return $this->result = round($var, $precision);
    }
}