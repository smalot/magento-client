<?php

namespace Smalot\Magento\CustomerBalance;

use Smalot\Magento\MagentoModuleAbstract;

class StoreCredit extends MagentoModuleAbstract
{
    /**
     * @param string $customerId
     * @param string $websiteId
     *
     * @return string
     */
    public function getBalance($customerId, $websiteId)
    {
        return $this->remoteAdapter->enterpriseCustomerbalanceBalance($customerId, $websiteId);
    }

    /**
     * @param string $customerId
     * @param string $websiteId
     *
     * @return array
     */
    public function getHistory($customerId, $websiteId = null)
    {
        return $this->remoteAdapter->enterpriseCustomerbalanceHistory($customerId, $websiteId);
    }
}
