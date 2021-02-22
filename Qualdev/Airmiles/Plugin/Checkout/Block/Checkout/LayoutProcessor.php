<?php
namespace Qualdev\Airmiles\Plugin\Checkout\Block\Checkout;
class LayoutProcessor
{
    public function afterProcess(
        \Magento\Checkout\Block\Checkout\LayoutProcessor $subject,
        array  $jsLayout
    ) {
 /*
        $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']
        ['shippingAddress']['children']['shipping-address-fieldset']['children']['airmiles'] = [
            'component' => 'Magento_Ui/js/form/element/abstract',
            'config' => [
                'customScope' => 'shippingAddress.custom_attributes',
                'template' => 'ui/form/field',
                'elementTmpl' => 'ui/form/element/input',
                'options' => [],
                'id' => 'airmiles'
            ],
            'dataScope' => 'shippingAddress.custom_attributes.airmiles',
            'label' => 'Backordered Shipping Options',
            'provider' => 'checkoutProvider',
            'visible' => true,
            'validation' => [],
            'sortOrder' => 299,
            'id' => 'airmiles'
        ];
 
 
        return $jsLayout;*/
        
        /*Qualdev_Airmiles*/
        /*$jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']
        ['shippingAddress']['children']['shipping-address-fieldset']['children']['airmiles'] = .... */
        $attributeCode = 'airmiles';
        $jsLayout['components']['checkout']['children']['sidebar']['children']['additional']['children']['airmiles'] = [
			//'component' => 'Magento_Ui/js/form/element/checkbox-set',
			'component' => 'Magento_Ui/js/form/element/checkbox-set-new',
			//'component' => 'Qualdev_Airmiles/js/form/element/checkbox-set',
			'config' => [
				'customScope' => 'shippingAddress.custom_attributes',
				'template' => 'ui/form/field',
				//'elementTmpl' => 'ui/form/element/checkbox-set',
				'elementTmpl' => 'ui/form/element/checkbox-set-new',
				//'elementTmpl' => 'Amasty_Checkout/checkout/summary/checkbox-set',
				'options' => [
					[
						'value' => 'Ship stock now & B/O\'s upon arrival',
						'label' => 'Ship stock now & B/O\'s upon arrival'
					],
					[
						'value' => 'Hold & Ship complete',
						'label' => 'Hold & Ship complete'
					],
					[
						'value' => 'Cancel Back Orders',
						'label' => 'Cancel Back Orders'
					]
				],
				'value' => 'Ship stock now & B/O\'s upon arrival', // default checked value
				'id' => 'airmiles',
				'name' => 'airmiles'
			],
			'dataScope' => 'shippingAddress.custom_attributes.' . $attributeCode,
			'label' => 'Backordered Shipping Options',
            'provider' => 'checkoutProvider',
            'visible' => true,
            'validation' => [],
            'sortOrder' => 1,
            'id' => 'airmiles',
            'name' => 'airmiles'
		];
		return $jsLayout;
		
		


    }
}
