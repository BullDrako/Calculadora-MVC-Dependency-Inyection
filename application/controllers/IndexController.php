<?php
/**
 * Created by PhpStorm.
 * User: edgar
 * Date: 14/10/15
 * Time: 16:16
 */

namespace controllers;


class IndexController
{
    public function indexAction()
    {
        require 'application/views/index.phtml';
    }
}