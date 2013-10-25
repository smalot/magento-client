<?php

namespace Smalot\Magento\StoreView;

use Smalot\Magento\MagentoModuleAbstract;

class Store extends MagentoModuleAbstract
{
    /**
     * @return array
     */
    public function getList()
    {
        return $this->remoteAdapter->storeList();
    }

    /**
     * @param string $storeId
     *
     * @return array
     */
    public function getInfo($storeId = null)
    {
        return $this->remoteAdapter->storeInfo($storeId);
    }
}
