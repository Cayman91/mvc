<?php
class markiController extends mainController
{

    public function listAction()
    {

        $Marki = new Marki();

        $page = $this->request->getParam( 'page', 1 );
        $limit = 10;
        $from = ( $page - 1 ) * $limit;

        $this->view->pagerConfig = array
        (
            'url' => Url::getUrl( 'marki', 'list', array
            (
                'page' => 'key_page'
            )),
            'count' => $Marki->countData(),
            'pack' => $limit,
            'page' => $page
        );

        $this->view->data = $Marki->getMarkiLimit($from, $limit);

        $this->view->display( 'pokazmarki' );
    }

    public function deleteMarkaAction()
    {
        $Marki = new Marki();

        $idMarki = $this->request->getParam('id');

        $Marki->deleteMarki($idMarki);

        header('Location:' . Url::getUrl( 'marki', 'list' ) );
    }

    public function pagerAction()
    {
        $Marki = new Marki();
        $resultsPerPage = 5;
        $page = $this->request->getParam('page');
        if ($page<1) {
            $page = 1;
        }
        $this->view->data = $Marki->getMarki( $resultsPerPage, $resultsPerPage*($page -1) );
        $this->view->data['page'] = ceil($Marki->countData()/$resultsPerPage);
        $this->view->data['currentPage'] = $this->request->getParam('page');
        $this->view->display( 'pager' );
    }

    public function addMarkiAction()
    {
        $Marki = new Marki();
        $post = $this->request->getPost();
        if(isset($post['marka']))
        {
            $Marki->addMarki($post['marka']);
            header('Location:' . Url::getUrl( 'marki', 'list' ) );
        }
    }

    public function formMarkiAction()
    {
        $this->view->display('dodajmarke');
    }

}