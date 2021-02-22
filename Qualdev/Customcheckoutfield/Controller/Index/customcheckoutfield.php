<?php

namespace Qualdev\Customcheckoutfield\Controller\Index;

class Customcheckoutfield extends \Magento\Framework\App\Action\Action {
	
	public function execute() { 
  
		$this->_view->loadLayout(); 
		$this->_view->renderLayout(); 
	} 

}
