<?php

/**
 * Class Calculator
 *
 * @package ${NAMESPACE}
 */
class Calculator
{
    /**
     * @var string
     */
    private $input = '';
    /**
     * @var int
     */
    private $result = 0;
    /**
     * @var null|string
     */
    private $error = null;

    public function reset()
    {
        $this->input = '';
    }

    public function add($in1, $in2)
    {
        $result = $in1 + $in2;

        $this->input = "$in1 + $in2";
        $this->result = $result;

        return $result;
    }

    public function subtract($in1, $in2)
    {
        $result = $in1 - $in2;

        $this->input = "$in1 - $in2";
        $this->result = $result;

        return $result;
    }

    public function divide($in1, $in2)
    {
        $result = $in1 / $in2;

        $this->input = "$in1 / $in2";
        $this->result = $result;

        return $result;
    }

    public function getResult()
    {
        return $this->result;
    }

    public function getError()
    {
        return $this->error;
    }
}
