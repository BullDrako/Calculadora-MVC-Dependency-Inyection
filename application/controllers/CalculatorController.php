<?php
/**
 * Created by PhpStorm.
 * User: edgar
 * Date: 14/10/15
 * Time: 16:14
 */

namespace controllers;

use models\CalculatorModel;

class CalculatorController
{
    /**
     * @var CalculatorModel
     */
    private $model;
    function __construct(CalculatorModel $model)
    {
        $this->model = $model;
    }
    public function sumAction()
    {
        $action = 'doSum';
        require 'application/views/form.phtml';
    }
    public function doSumAction()
    {
        $this->model->setOp1($_POST['op1']);
        $this->model->setOp2($_POST['op2']);
        $this->model->sum();
        $result = $this->model->getResult();
        require 'application/views/result.phtml';
    }
    public function subtractAction()
    {
        $action = 'doSubtract';
        require 'application/views/form.phtml';
    }
    public function doSubtractAction()
    {
        $this->model->setOp1($_POST['op1']);
        $this->model->setOp2($_POST['op2']);
        $this->model->subtract();
        $result = $this->model->getResult();
        require 'application/views/result.phtml';
    }
    public function multiplyAction()
    {
        $action = 'doMultiply';
        require 'application/views/form.phtml';
    }
    public function doMultiplyAction()
    {
        $this->model->setOp1($_POST['op1']);
        $this->model->setOp2($_POST['op2']);
        $this->model->multiply();
        $result = $this->model->getResult();
        require 'application/views/result.phtml';
    }
    public function divideAction()
    {
        $action = 'doDivide';
        require 'application/views/form.phtml';
    }
    public function doDivideAction()
    {
        $this->model->setOp1($_POST['op1']);
        $this->model->setOp2($_POST['op2']);
        $this->model->divide();
        $result = $this->model->getResult();
        require 'application/views/result.phtml';
    }
}
