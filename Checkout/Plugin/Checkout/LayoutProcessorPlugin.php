<?php
namespace Vnext\Checkout\Plugin\Checkout;

use Magento\Checkout\Block\Checkout\LayoutProcessor;

class LayoutProcessorPlugin
{
    public function afterProcess(\Magento\Checkout\Block\Checkout\LayoutProcessor $subject, array  $jsLayout)
    {
        $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']
        ['children']['payment']['children']['beforeMethods']['children']['order-comment'] = [
            'component' => 'Vnext_Checkout/js/view/checkout/order-comment',
            'sortOrder' => 300,
        ];

        return $jsLayout;
    }
}
