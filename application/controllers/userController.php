<?php
class userController extends mainController
{
    public function loginAction()
    {
        $this->view->display( 'login' );
    }

    public function authAction()
    {
        $Auth = new Auth();
        $uStorage = new UserStorage();

        $user = $Auth->checkUser( $this->request->getPost() );

        if( $user )
        {
            $storage = $uStorage->setUserData( $user );
            header( 'Location: ' . Url::getUrl( 'index', 'index' ) );
        }
        else $this->view->display( 'login' );
    }

    public function logoutAction()
    {
        $this->userStorage->logout();
        header('Location: ' . Url::getUrl( 'user', 'login' ) );
    }

    public function registerFormAction()
    {
        $this->view->display( 'register' );
    }

    public function registerAction()
    {
        $Auth = new Auth();
        $post = $this->request->getPost();
        if(isset($post['username']))
        {
            $Auth->register($post);
            header('Location:' . Url::getUrl( 'user', 'login' ) );
        }

    }
}