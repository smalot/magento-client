<?php

namespace Smalot\Magento\CustomerBalance;

use Smalot\Magento\MagentoModuleAbstract;

class StoreCreditQuote extends MagentoModuleAbstract
{
    /**
     * @param string $quoteId
     * @param string $store
     *
     * @return bool
     */
    public function removeAmount($quoteId, $store = null)
    {
        return $this->remoteAdapter->shoppingCartCustomerbalanceRemoveAmount($quoteId, $store);
    }

    /**
     * @param string $quoteId
     * @param string $store
     *
     * @return float
     */
    public function setAmount($quoteId, $store = null)
    {
        return $this->remoteAdapter->shoppingCartCustomerbalanceSetAmount($quoteId, $store);
    }
}
