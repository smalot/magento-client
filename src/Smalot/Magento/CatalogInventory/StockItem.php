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

namespace Smalot\Magento\Catalog;

use Smalot\Magento\MagentoModuleAbstract;

/**
 * Class StockItem
 *
 * @package Smalot\Magento\Catalog
 */
class StockItem extends MagentoModuleAbstract
{
    /**
     * Allows you to retrieve the list of stock data by product IDs.
     *
     * @param array $productIds
     *
     * @return array
     */
    public function getList($productIds)
    {
        return $this->remoteAdapter->call('catalogInventoryStockItemList', array($productIds));
    }

    /**
     * Allows you to update the required product stock data.
     *
     * @param string $productId
     * @param array  $data
     *
     * @return mixed
     */
    public function update($productId, $data)
    {
        return $this->remoteAdapter->call('catalogInventoryStockItemUpdate', array($productId, $data));
    }
}
