define([
    'jquery'
], function ($) {
    'use strict';

    /** Override default place order action and add comment to request */
    return function (paymentData) {

        if (paymentData['extension_attributes'] === undefined) {
            paymentData['extension_attributes'] = {};
        }

        //paymentData['extension_attributes']['comment'] = jQuery('[name="ordercomment[comment]"]').val();
        paymentData['extension_attributes']['customcheckoutfield'] = jQuery('input[dataname="custom_attributes[customcheckoutfield]"]:checked').val();
        console.log('test===='+paymentData['extension_attributes']['customcheckoutfield']);
        
        
    };
});
