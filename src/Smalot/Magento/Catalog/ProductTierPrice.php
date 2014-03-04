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

namespace Smalot\Magento\Catalog;

use Smalot\Magento\ActionInterface;
use Smalot\Magento\MagentoModuleAbstract;

/**
 * Class ProductTierPrice
 *
 * @package Smalot\Magento\Catalog
 */
class ProductTierPrice extends MagentoModuleAbstract
{
    /**
     * Allows you to retrieve information about product tier prices.
     *
     * @param string $productId
     * @param string $identifierType
     *
     * @return ActionInterface
     */
    public function getInfo($productId, $identifierType = null)
    {
        return $this->__createAction('catalog_product_attribute_tier_price.info', func_get_args());
    }

    /**
     * Allows you to update the product tier prices.
     *
     * @param string $productId
     * @param array  $tierPrices
     * @param string $identifierType
     *
     * @return ActionInterface
     */
    public function update($productId, $tierPrices, $identifierType = null)
    {
        return $this->__createAction('catalog_product_attribute_tier_price.update', func_get_args());
    }
}
