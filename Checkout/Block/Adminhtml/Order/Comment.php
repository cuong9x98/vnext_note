<?php
namespace Vnext\Checkout\Block\Adminhtml\Order;

class Comment extends \Magento\Framework\View\Element\Template
{
    protected $_checkoutSession;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Checkout\Model\Session $checkoutSession,
        array $data = []
    ) {
        $this->_checkoutSession = $checkoutSession;
        $this->_registry = $registry;
        parent::__construct($context, $data);
    }

    public function getCurrentOrder() {
        return $this->_registry->registry('current_order');
    }

    public function getComment()
    {
        $order = $this->getCurrentOrder();
        $order_comment = $order->getData('customer_note');
        return $order_comment;
    }

    public function getOrderId() {
        return $this->getRequest()->getParam('order_id');
    }

    public function getEditLink($label = '')
    {
        if (empty($label)) {
            $label = __('Edit');
        }
        $url = $this->getUrl('sales/order/delivery', ['id' => $this->getOrderId()]);
        return '<a href="' . $this->escapeUrl($url) . '">' . $this->escapeHtml($label) . '</a>';
    }

}
