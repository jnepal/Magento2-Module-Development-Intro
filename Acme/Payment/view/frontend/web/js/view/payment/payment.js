define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (
        Component,
        rendererList
    ) {
        'use strict';
        rendererList.push(
            {
                type: 'payment',
                component: 'Acme_Payment/js/view/payment/method-renderer/payment-method'
            }
        );
        return Component.extend({});
    }
);