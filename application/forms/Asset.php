<?php

class Application_Form_Asset extends Zend_Form
{
	public $labels;

	public function init()
	{
		$this->labels = array(
			'ID' => 'ID', 
			'SERIE' => 'Serie',
			'BP_USUARIO' => 'BP Usuario',
			'TICKET' => 'Ticket',
			'HOSTNAME' => 'Hostname',
			'USERNAME' => 'Username',
			'FABRICANTE' => 'Fabricante',
			'PRODUCTO' => 'Producto',
			'VERSION' => 'Version',
			'KEY_APP' => 'Key app',
			'INICIO_LICENCIA' => 'Inicio licencia',
			'FIN_LICENCIA' => 'Fin licencia',
			'OC_HES' => 'OC-HES',
			'FECHA_AUTORIZACION' => 'Fecha autorización',
			'FECHA_INSTALACION' => 'Fecha instalación',
			'ESTATUS' => 'Estatus',
			'OBSERVACIONES' => 'Observaciones'
		);

		$this->setMethod('post');
		$this->setName('form_cliente');

		$serie = new Zend_Form_Element_Text('SERIE');
			$serie->removeDecorator('Label');
			$serie->setRequired(true);
			$serie->setAttrib('placeholder', 'Número de serie');
			$serie->addValidator('NotEmpty');
			$serie->addValidator(new Zend_Validate_StringLength(0, 50));
			$serie->addValidator(new Zend_Validate_Db_NoRecordExists(array('table' => 'asset', 'field' => 'SERIE')));

			$serie->getValidator('NotEmpty')->setMessage('Es necesario proporcionar un número de serie.');
			$serie->getValidator('stringLength')->setMessage('El largo de este campo no debe superar los 50 caracteres.');
			$serie->getValidator('Db_NoRecordExists')->setMessage('Este valor ya existe en la base de datos.');
			$serie->removeDecorator('Errors');

		$bp_user = new Zend_Form_Element_Text('BP_USUARIO');
			$bp_user->removeDecorator('Label');
			$bp_user->setRequired(true);
			$bp_user->setAttrib('placeholder', 'Número de BP Usuario');
			$bp_user->addValidator('NotEmpty');
			$bp_user->addValidator(new Zend_Validate_StringLength(0, 50));

			$bp_user->getValidator('NotEmpty')->setMessage('Es necesario proporcionar un número de BP Usuario.');
			$bp_user->getValidator('stringLength')->setMessage('El largo de este campo no debe superar los 50 caracteres.');
			$bp_user->removeDecorator('Errors');			

		$ticket = new Zend_Form_Element_Text('TICKET');
			$ticket->removeDecorator('Label');
			$ticket->setRequired(true);
			$ticket->setAttrib('placeholder', 'Número de ticket');
			$ticket->addValidator('NotEmpty');
			$ticket->addValidator(new Zend_Validate_StringLength(0, 50));
			$ticket->addValidator(new Zend_Validate_Db_NoRecordExists(array('table' => 'asset', 'field' => 'TICKET')));

			$ticket->getValidator('NotEmpty')->setMessage('Es necesario proporcionar un número de ticket.');
			$ticket->getValidator('stringLength')->setMessage('El largo de este campo no debe superar los 50 caracteres.');
			$ticket->getValidator('Db_NoRecordExists')->setMessage('Este valor ya existe en la base de datos.');
			$ticket->removeDecorator('Errors');

		$hostname = new Zend_Form_Element_Text('HOSTNAME');
			$hostname->removeDecorator('Label');
			$hostname->setRequired(false);
			$hostname->setAttrib('placeholder', 'Hostname');
			$hostname->addValidator('NotEmpty');
			$hostname->addValidator(new Zend_Validate_StringLength(0, 50));

			$hostname->getValidator('NotEmpty')->setMessage('Es necesario proporcionar un nombre de hostname.');
			$hostname->getValidator('stringLength')->setMessage('El largo de este campo no debe superar los 50 caracteres.');
			$hostname->removeDecorator('Errors');
		
		$username = new Zend_Form_Element_Text('USERNAME');
			$username->removeDecorator('Label');
			$username->setRequired(false);
			$username->setAttrib('placeholder', 'Username');
			$username->addValidator('NotEmpty');
			$username->addValidator(new Zend_Validate_StringLength(0, 50));

			$username->getValidator('NotEmpty')->setMessage('Es necesario proporcionar un nombre de Username.');
			$username->getValidator('stringLength')->setMessage('El largo de este campo no debe superar los 50 caracteres.');
			$username->removeDecorator('Errors');	

		$fabricante = new Zend_Form_Element_Text('FABRICANTE');
			$fabricante->removeDecorator('Label');
			$fabricante->setRequired(true);
			$fabricante->setAttrib('placeholder', 'Nombre fabricante');
			$fabricante->addValidator('NotEmpty');
			$fabricante->addValidator(new Zend_Validate_StringLength(0, 50));

			$fabricante->getValidator('NotEmpty')->setMessage('Es necesario proporcionar un nombre de Fabricante.');
			$fabricante->getValidator('stringLength')->setMessage('El largo de este campo no debe superar los 50 caracteres.');
			$fabricante->removeDecorator('Errors');	

		$producto = new Zend_Form_Element_Text('PRODUCTO');
			$producto->removeDecorator('Label');
			$producto->setRequired(true);
			$producto->setAttrib('placeholder', 'Nombre producto');
			$producto->addValidator('NotEmpty');
			$producto->addValidator(new Zend_Validate_StringLength(0, 50));

			$producto->getValidator('NotEmpty')->setMessage('Es necesario proporcionar un nombre de producto.');
			$producto->getValidator('stringLength')->setMessage('El largo de este campo no debe superar los 50 caracteres.');
			$producto->removeDecorator('Errors');

		$version = new Zend_Form_Element_Text('VERSION');
			$version->removeDecorator('Label');
			$version->setRequired(true);
			$version->setAttrib('placeholder', 'Version');
			$version->addValidator('NotEmpty');
			$version->addValidator(new Zend_Validate_StringLength(0, 50));

			$version->getValidator('NotEmpty')->setMessage('Es necesario proporcionar un número de version.');
			$version->getValidator('stringLength')->setMessage('El largo de este campo no debe superar los 50 caracteres.');
			$version->removeDecorator('Errors');		

		$keyApp = new Zend_Form_Element_Text('KEY_APP');
			$keyApp->removeDecorator('Label');
			$keyApp->setRequired(true);
			$keyApp->setAttrib('placeholder', 'Key app');
			$keyApp->addValidator('NotEmpty');
			$keyApp->addValidator(new Zend_Validate_StringLength(0, 50));

			$keyApp->getValidator('NotEmpty')->setMessage('Es necesario proporcionar un valor para Key app.');
			$keyApp->getValidator('stringLength')->setMessage('El largo de este campo no debe superar los 50 caracteres.');
			$keyApp->removeDecorator('Errors');

		$inicio = new Zend_Form_Element_Text('INICIO_LICENCIA');
			$inicio->removeDecorator('Label');
			$inicio->setRequired(true);
			$inicio->setAttrib('placeholder', 'aaaa-mm-dd');
			$inicio->addValidator('NotEmpty');
			$inicio->addValidator(new Zend_Validate_Date(array('yyyy-MM-dd')));

			$inicio->getValidator('NotEmpty')->setMessage('Es necesario proporcionar una fecha de inicio de licencia.');
			$inicio->getValidator('Zend_Validate_Date')->setMessage('El formato debe ser año-mes-dia. Ej. 2013-09-21');
			$inicio->removeDecorator('Errors');

		$fin = new Zend_Form_Element_Text('FIN_LICENCIA');
			$fin->removeDecorator('Label');
			$fin->setRequired(true);
			$fin->setAttrib('placeholder', 'aaaa-mm-dd');
			$fin->addValidator('NotEmpty');
			$fin->addValidator(new Zend_Validate_Date(array('yyyy-MM-dd')));

			$fin->getValidator('NotEmpty')->setMessage('Es necesario proporcionar una fecha de fin de licencia.');
			$fin->getValidator('Zend_Validate_Date')->setMessage('El formato debe ser año-mes-dia. Ej. 2013-09-21');
			$fin->removeDecorator('Errors');

		$oc_hes = new Zend_Form_Element_Text('OC_HES');
			$oc_hes->removeDecorator('Label');
			$oc_hes->setRequired(true);
			$oc_hes->setAttrib('placeholder', 'OC-HES');
			$oc_hes->addValidator('NotEmpty');
			$oc_hes->addValidator(new Zend_Validate_StringLength(0, 50));

			$oc_hes->getValidator('NotEmpty')->setMessage('Es necesario proporcionar un valor para OC-HES.');
			$oc_hes->getValidator('stringLength')->setMessage('El largo de este campo no debe superar los 50 caracteres.');
			$oc_hes->removeDecorator('Errors');


		$autorizado = new Zend_Form_Element_Text('FECHA_AUTORIZACION');
			$autorizado->removeDecorator('Label');
			$autorizado->setRequired(true);
			$autorizado->setAttrib('placeholder', 'aaaa-mm-dd');
			$autorizado->addValidator('NotEmpty');
			$autorizado->addValidator(new Zend_Validate_Date(array('yyyy-MM-dd')));

			$autorizado->getValidator('NotEmpty')->setMessage('Es necesario proporcionar una fecha de autorización.');
			$autorizado->getValidator('Zend_Validate_Date')->setMessage('El formato debe ser año-mes-dia. Ej. 2013-09-21');
			$autorizado->removeDecorator('Errors');

		$instalacion = new Zend_Form_Element_Text('FECHA_INSTALACION');
			$instalacion->removeDecorator('Label');
			$instalacion->setRequired(true);
			$instalacion->setAttrib('placeholder', 'aaaa-mm-dd');
			$instalacion->addValidator('NotEmpty');
			$instalacion->addValidator(new Zend_Validate_Date(array('yyyy-MM-dd')));

			$instalacion->getValidator('NotEmpty')->setMessage('Es necesario proporcionar una fecha de instalación.');
			$instalacion->getValidator('Zend_Validate_Date')->setMessage('El formato debe ser año-mes-dia. Ej. 2013-09-21');
			$instalacion->removeDecorator('Errors');


		$estatus = new Zend_Form_Element_Text('ESTATUS');
			$estatus->removeDecorator('Label');
			$estatus->setRequired(true);
			$estatus->setAttrib('placeholder', 'Estatus');
			$estatus->addValidator('NotEmpty');
			$estatus->addValidator(new Zend_Validate_StringLength(0, 50));

			$estatus->getValidator('NotEmpty')->setMessage('Es necesario proporcionar un valor para el Estatus.');
			$estatus->getValidator('stringLength')->setMessage('El largo de este campo no debe superar los 50 caracteres.');
			$estatus->removeDecorator('Errors');		

		$obs = new Zend_Form_Element_Textarea('OBSERVACIONES');
			$obs->removeDecorator('Label');
			$obs->setRequired(true);
			$obs->setOptions(array('cols' => '4', 'rows' => '10'));
			$obs->setAttrib('placeholder', 'Observaciones');
			$obs->addValidator('NotEmpty');

			$obs->getValidator('NotEmpty')->setMessage('Es necesario proporcionar un valor para las observaciones.');
			$obs->removeDecorator('Errors');
		
		$this->addElements(array(
			$serie,
			$bp_user,
			$ticket,
			$hostname,
			$username,
			$fabricante,
			$producto,
			$version,
			$keyApp,
			$inicio,
			$fin,
			$oc_hes,
			$autorizado,
			$instalacion,
			$estatus,
			$obs		
		));
	}
}