<?php

namespace Smalot\Magento\Core;

use Smalot\Magento\MagentoModuleAbstract;

class Magento extends MagentoModuleAbstract
{
    /**
     * @return array
     */
    public function getInfo()
    {
        return $this->remoteAdapter->magentoInfo();
    }
}
