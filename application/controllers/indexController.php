<?php
class indexController extends mainController
{
    public function indexAction()
    {
        $this->view->display( 'index' );
    }
}