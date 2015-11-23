<?php
/**
 * Created by PhpStorm.
 * User: edgar
 * Date: 14/10/15
 * Time: 16:18
 */

namespace models;


class CalculatorModel
{
    private $op1;
    private $op2;
    private $result;
    public function __construct()
    {
        $this->result = 0;
    }
    public function sum()
    {
        $this->result = $this->op1 + $this->op2;
    }
    public function subtract()
    {
        $this->result = $this->op1 - $this->op2;
    }
    public function multiply()
    {
        $this->result = $this->op1 * $this->op2;
    }
    public function divide()
    {
        $this->result = (int) ($this->op1 / $this->op2);
    }
    /**
     * @return mixed
     */
    public function getOp1()
    {
        return $this->op1;
    }
    /**
     * @param mixed $op1
     */
    public function setOp1($op1)
    {
        $this->op1 = $op1;
    }
    /**
     * @return mixed
     */
    public function getOp2()
    {
        return $this->op2;
    }
    /**
     * @param mixed $op2
     */
    public function setOp2($op2)
    {
        $this->op2 = $op2;
    }
    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }
}