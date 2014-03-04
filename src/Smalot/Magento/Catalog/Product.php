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
 * Class Product
 *
 * @package Smalot\Magento\Catalog
 */
class Product extends MagentoModuleAbstract
{
    /**
     * Allows you to create a new product and return ID of the created product.
     *
     * @param string $type
     * @param string $set
     * @param string $sku
     * @param array  $productData
     * @param string $storeView
     *
     * @return ActionInterface
     */
    public function create($type, $set, $sku, $productData, $storeView = null)
    {
        return $this->__createAction('catalog_product.create', func_get_args());
    }

    /**
     * Allows you to set/get the current store view.
     *
     * @param string $storeView
     *
     * @return ActionInterface
     */
    public function setCurrentStore($storeView)
    {
        return $this->__createAction('catalog_product.currentStore', func_get_args());
    }


    /**
     * Allows you to delete the required product.
     *
     * @param string $productId
     * @param string $identifierType
     *
     * @return ActionInterface
     */
    public function delete($productId, $identifierType = null)
    {
        return $this->__createAction('catalog_product.delete', func_get_args());
    }

    /**
     * Allows you to get the product special price data.
     *
     * @param string $productId
     * @param string $storeView
     * @param string $identifierType
     *
     * @return ActionInterface
     */
    public function getSpecialPrice($productId, $storeView = null, $identifierType = null)
    {
        return $this->__createAction('catalog_product.getSpecialPrice', func_get_args());
    }

    /**
     * Allows you to retrieve information about the required product.
     *
     * @param string $productId
     * @param string $storeView
     * @param string $attributes
     * @param string $identifierType
     *
     * @return ActionInterface
     */
    public function getInfo($productId, $storeView = null, $attributes = null, $identifierType = null)
    {
        return $this->__createAction('catalog_product.info', func_get_args());
    }

    /**
     * Allows you to retrieve the list of products.
     *
     * @param array $filters
     * @param string $storeView
     *
     * @return ActionInterface
     */
    public function getList($filters, $storeView = null)
    {
        return $this->__createAction('catalog_product.list', func_get_args());
    }

    /**
     * Get the list of additional attributes.
     * Additional attributes are attributes that are not in the default set of attributes.
     *
     * @param string $productType
     * @param string $attributeSetId
     *
     * @return ActionInterface
     */
    public function getListOfAdditionalAttributes($productType, $attributeSetId)
    {
        return $this->__createAction('catalog_product.listOfAdditionalAttributes', func_get_args());
    }

    /**
     * Allows you to set the product special price.
     *
     * @param string $productId
     * @param string $specialPrice
     * @param string $fromDate
     * @param string $toDate
     * @param string $storeView
     * @param string $productIdentifierType
     *
     * @return ActionInterface
     */
    public function setSpecialPrice(
        $productId,
        $specialPrice,
        $fromDate,
        $toDate,
        $storeView = null,
        $productIdentifierType = null
    ) {
        return $this->__createAction('catalog_product.setSpecialPrice', func_get_args());
    }

    /**
     * Allows you to update the required product.
     * Note that you should specify only those parameters which you want to be updated.
     *
     * @param string $productId
     * @param array  $productData
     * @param string $storeView
     * @param string $identifierType
     *
     * @return ActionInterface
     */
    public function update($productId, $productData, $storeView = null, $identifierType = null)
    {
        return $this->__createAction('catalog_product.update', func_get_args());
    }
}
