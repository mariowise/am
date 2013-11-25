<?php

class AssetsController extends Zend_Controller_Action
{

    public function init()
    {
        // $AssetsModel = new Application_Model_Asset();
    }

    // List
    public function indexAction()
    {
  //       $this->view->rowset = $this->AssetsModel->fetchAll(null,'ID');
		// $this->view->headers = array(
		// 	'ID', 
		// 	'Serie',
		// 	'BP Usuario',
		// 	'Ticket',
		// 	'Hostname',
		// 	'Username',
		// 	'Fabricante',
		// 	'Producto',
		// 	'Version',
		// 	'Key app',
		// 	'Inicio licencia',
		// 	'Fin licencia',
		// 	'OC-HES',
		// 	'Fecha autorización',
		// 	'Fecha instalación',
		// 	'Estatus',
		// 	'Observaciones'
		// );
		// $this->view->table = $this->view->render('generic/lista.phtml');
    }

    // Agregar
    public function agregarAction() 
    {	
        $form = new Application_Form_Asset();
    	if($this->getRequest()->isPost())
    	{
    		if($form->isValid($_POST))
    		{
    			die('Formulario válido');
    		}
    	}
        $this->view->form = $form;
        $this->view->form_backLink = '/asset';
        $this->view->form_submitValue = 'Agregar';
        $this->view->table = $this->view->render('generic/form.phtml');
    }	

}