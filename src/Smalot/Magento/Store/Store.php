<?php

/**
 * @file
 *          Magento API Client (SOAP v2 - standard).
 *          Allows wrappers for each call, dependencies injections
 *          and code completion.
 *
 * @author  Sébastien MALOT <sebastien@malot.fr>
 * @license GPL-2.0
 * @url     <https://github.com/smalot/magento-client>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Smalot\Magento\Store;

use Smalot\Magento\MagentoModuleAbstract;

/**
 * Class Store
 *
 * @package Smalot\Magento\StoreView
 */
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
