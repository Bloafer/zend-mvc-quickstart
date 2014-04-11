<?php
class IndexController extends Zend_Controller_Action{

    public function init(){
        /* Initialize action controller here */
    }

    public function indexAction(){
        $title = $this->view->translate("Home");
        $this->view->headTitle($title);
        $this->view->headMeta()->setName('title',         $title);
        $this->view->headMeta()->setName('keywords',      $title);
        $this->view->headMeta()->setName('description',   $title);
    }

}

