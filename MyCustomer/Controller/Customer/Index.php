<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Vnext\MyCustomer\Controller\Customer;

use Magento\Framework\Controller\ResultFactory;
use Magento\Review\Controller\Customer as CustomerController;

class Index extends CustomerController
{
    /**
     * Render my product reviews
     *
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Framework\View\Result\Page $resultPage */

        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        if ($navigationBlock = $resultPage->getLayout()->getBlock('customer_account_navigation')) {
            $navigationBlock->setActive('mycustomer/customer');
        }
        $resultPage->getConfig()->getTitle()->set(__('My Gift Registry'));

        return $resultPage;
    }
}
