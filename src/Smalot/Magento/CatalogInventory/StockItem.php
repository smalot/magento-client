<?php

/**
 * @file
 *          Magento API Client (SOAP v1).
 *          Allows wrappers for each call, dependencies injections
 *          and code completion.
 *
 * @author  Sébastien MALOT <sebastien@malot.fr>
 * @license MIT
 * @url     <https://github.com/smalot/magento-client>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Smalot\Magento\CatalogInventory;

use Smalot\Magento\ActionInterface;
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
     * @return ActionInterface
     */
    public function getList($productIds)
    {
        return $this->__createAction('cataloginventory_stock_item.list', func_get_args());
    }

    /**
     * Allows you to update the required product stock data.
     *
     * @param string $productId
     * @param array  $data
     *
     * @return ActionInterface
     */
    public function update($productId, $data)
    {
        return $this->__createAction('cataloginventory_stock_item.update', func_get_args());
    }
}
