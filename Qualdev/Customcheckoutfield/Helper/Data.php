<?php
/**
 * Copyright © 2015 Qualdev . All rights reserved.
 */
namespace Qualdev\Nsearch\Helper;
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
	/**
     * @param \Magento\Framework\App\Helper\Context $context
     */
	public function __construct(
		\Magento\Framework\App\Helper\Context $context
	) {
		parent::__construct($context);
	}
	
	public function points($params){
		$someURL = "https://demo-soap-service.rewardbank.ca/service.php?WSDL";
		$webService = new SoapClient($someURL);

	}
}
?>