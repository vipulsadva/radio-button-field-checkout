<?php
/**
 * Copyright © 2015 Qualdev . All rights reserved.
 */
namespace Qualdev\Customcheckoutfield\Block;

use Magento\Sales\Model\ResourceModel\Order\CollectionFactory;

class Customcheckoutfield extends \Magento\Framework\View\Element\Template
{
	
    protected $customerSession;
	
	/**
     * @var CollectionFactory
     */
    private $orderCollectionFactory;

    /**
     * Construct
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Customer\Model\Session $customerSession
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Customer\Model\Session $customerSession,
		CollectionFactory $orderCollectionFactory,
        array $data = []
    ) {
        parent::__construct($context, $data);
		$this->orderCollectionFactory = $orderCollectionFactory;
        $this->customerSession = $customerSession;
    }

    public function getCustomer()
    {
		$customerId = $this->customerSession->getCustomer()->getId();
		$firstname = $this->customerSession->getCustomer()->getFirstname();
		$lastname = $this->customerSession->getCustomer()->getLastname();	
		// $totalamount = $this->getTotal();
        $customerOrder = $this->orderCollectionFactory->create()->addFieldToSelect('customcheckoutfield')->addFieldToSelect('subtotal')->addFieldToFilter('customer_id', $customerId);
		$rewardpoints = $this->orderCollectionFactory->create()->addFieldToSelect('customcheckoutfield')->addFieldToSelect('subtotal')->addFieldToSelect('increment_id')->addFieldToFilter('customer_id', $customerId);
		
		$totalamt = 0;
		$incrementarr = [];
		
		foreach($rewardpoints as $rewardpoint){
			$points = $rewardpoint['customcheckoutfield'];
			if($points != ''){
				$collectornumber = $points;		
				$totalamt = $totalamt + round($rewardpoint['subtotal']);
				$incrementarr[] = $rewardpoint['increment_id'];				
			}
		}
		
		$description = implode(', ', $incrementarr); 
		
		$myParams = array('encryptedClientSiteKey' => "f/iuOuyFZYRdBvgx6otCSdctBXmSb4oOa71K7TtYLEJp1AFn+mzJMX+4FU+frgvx",
			'totalValue' => $totalamt,
			'offerCode' => "BB030001",
			'locationCode' => "0003",
			'firstName' => $firstname,
			'lastName' => $lastname,
			'collectorNumber' => $collectornumber,
			'description' => $description
		);
		/* echo "<pre>";
		print_r($myParams);
		echo "</pre>"; */
		
		
		
        return $myParams;

    }
	
	public function getTotal()
    {
		$customerId = $this->customerSession->getCustomer()->getId(); // pass customer id
        $totals = $this->orderCollectionFactory->create()->addFieldToSelect('customcheckoutfield')->addFieldToSelect('subtotal')->addFieldToFilter('customer_id', $customerId);
		$totalamt = 0;
		foreach($totals as $total){
			if($total['customcheckoutfield'] != ''){
				// echo "<pre>";
				// print_r($total['subtotal']);
				// echo "</pre>";
				$totalamt = $totalamt + round($total['subtotal']);
			}
		}
		return $totalamt;
    }
	
	
	
	
	

}
