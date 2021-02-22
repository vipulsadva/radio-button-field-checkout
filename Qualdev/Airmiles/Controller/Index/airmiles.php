<?php

namespace Qualdev\Airmiles\Controller\Index;

class Airmiles extends \Magento\Framework\App\Action\Action {
	
	public function execute() { 
  
		$this->_view->loadLayout(); 
		$this->_view->renderLayout(); 
	} 

}
