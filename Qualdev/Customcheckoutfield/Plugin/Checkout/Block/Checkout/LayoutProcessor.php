<?php
namespace Qualdev\Customcheckoutfield\Plugin\Checkout\Block\Checkout;
class LayoutProcessor
{
    public function afterProcess(
        \Magento\Checkout\Block\Checkout\LayoutProcessor $subject,
        array  $jsLayout
    ) {
 /*
        $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']
        ['shippingAddress']['children']['shipping-address-fieldset']['children']['customcheckoutfield'] = [
            'component' => 'Magento_Ui/js/form/element/abstract',
            'config' => [
                'customScope' => 'shippingAddress.custom_attributes',
                'template' => 'ui/form/field',
                'elementTmpl' => 'ui/form/element/input',
                'options' => [],
                'id' => 'customcheckoutfield'
            ],
            'dataScope' => 'shippingAddress.custom_attributes.customcheckoutfield',
            'label' => 'Backordered Shipping Options',
            'provider' => 'checkoutProvider',
            'visible' => true,
            'validation' => [],
            'sortOrder' => 299,
            'id' => 'customcheckoutfield'
        ];
 
 
        return $jsLayout;*/
        
        /*Qualdev_Customcheckoutfield*/
        /* $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']
        ['shippingAddress']['children']['shipping-address-fieldset']['children']['customcheckoutfield'] = .... */
        /* $jsLayout['components']['checkout']['children']['sidebar']['children']['additional']['children']['customcheckoutfield'] */
        $attributeCode = 'customcheckoutfield';
        
        $jsLayout['components']['checkout']['children']['sidebar']['children']['additional']['children']['customcheckoutfield'] = [
			//'component' => 'Magento_Ui/js/form/element/checkbox-set',
			'component' => 'Magento_Ui/js/form/element/checkbox-set-new',
			//'component' => 'Qualdev_Customcheckoutfield/js/form/element/checkbox-set',
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
				'id' => 'customcheckoutfield',
				'name' => 'customcheckoutfield'
			],
			'dataScope' => 'shippingAddress.custom_attributes.' . $attributeCode,
			'label' => 'Backordered Shipping Options',
            'provider' => 'checkoutProvider',
            'visible' => true,
            'validation' => [],
            'sortOrder' => 0,
            'id' => 'customcheckoutfield',
            'name' => 'customcheckoutfield'
		];
		
		
       $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']
        ['shippingAddress']['children']['shipping-address-fieldset']['children']['customcheckoutfield'] = [
			//'component' => 'Magento_Ui/js/form/element/checkbox-set',
			'component' => 'Magento_Ui/js/form/element/checkbox-set-new',
			//'component' => 'Qualdev_Customcheckoutfield/js/form/element/checkbox-set',
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
				'id' => 'customcheckoutfield',
				'name' => 'customcheckoutfield'
			],
			'dataScope' => 'shippingAddress.custom_attributes.' . $attributeCode,
			'label' => 'Backordered Shipping Options',
            'provider' => 'checkoutProvider',
            'visible' => true,
            'validation' => [],
            'sortOrder' => 215,
            'id' => 'customcheckoutfield',
            'name' => 'customcheckoutfield'
		];
		return $jsLayout;
		
		


    }
}
