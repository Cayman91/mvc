<?php

class mainController
{
    public $request;
    public $view;
    public $layout;
    public $userStorage;

    public function __construct()
    {
        $this->request = new Request();
        $this->view = new View();
        $this->layout = new Layout();
        $this->userStorage = new UserStorage();
        if(!$this->userStorage->isAuthenticate() && $this->request->getParam('action') !== 'login' && $this->request->getParam('action') !== 'register')
        {
            header( 'Location: ' . Url::getUrl( 'user', 'login' ) );
        }

    }
}