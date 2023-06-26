<?php

use Phalcon\Mvc\Controller;
use Phalcon\Db\Adapter\Pdo\Mysql;
use db\Database;
use Phalcon\Di\FactoryDefault;
class IndexController extends Controller
{
    public function indexAction()
    {
        // redirect to view;
    }
    public function dbAction(){
        echo "<h1>Selected Database is ".$this->request->get('db')."</h1>";
    }

}
