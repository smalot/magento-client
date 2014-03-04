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
 * Class ProductMedia
 *
 * @package Smalot\Magento\Catalog
 */
class ProductMedia extends MagentoModuleAbstract
{
    /**
     * Allows you to upload a new product image.
     *
     * @param string $product
     * @param array  $data
     * @param string $storeView
     * @param string $identifierType
     *
     * @return ActionInterface
     */
    public function create($product, $data, $storeView = null, $identifierType = null)
    {
        return $this->__createAction('catalog_product_attribute_media.create', func_get_args());
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
        return $this->__createAction('catalog_product_attribute_media.currentStore', func_get_args());
    }

    /**
     * Allows you to retrieve information about the specified product image.
     *
     * @param string $productId
     * @param string $file
     * @param string $storeView
     * @param string $identifierType
     *
     * @return ActionInterface
     */
    public function getInfo($productId, $file, $storeView = null, $identifierType = null)
    {
        return $this->__createAction('catalog_product_attribute_media.info', func_get_args());
    }

    /**
     * Allows you to retrieve the list of product images.
     *
     * @param string $productId
     * @param string $storeView
     * @param string $identifierType
     *
     * @return ActionInterface
     */
    public function getList($productId, $storeView = null, $identifierType = null)
    {
        return $this->__createAction('catalog_product_attribute_media.list', func_get_args());
    }

    /**
     * Allows you to remove the image from a product.
     *
     * @param string $productId
     * @param  string $file
     * @param string $identifierType
     *
     * @return ActionInterface
     */
    public function remove($productId, $file, $identifierType = null)
    {
        return $this->__createAction('catalog_product_attribute_media.remove', func_get_args());
    }

    /**
     * Allows you to retrieve product image types including standard image, small_image, thumbnail, etc.
     * Note that if the product attribute set contains attributes of the Media Image type
     * (Catalog Input Type for Store Owner > Media Image), it will also be returned in the response.
     *
     * @param string $setId
     *
     * @return ActionInterface
     */
    public function getTypes($setId)
    {
        return $this->__createAction('catalog_product_attribute_media.types', func_get_args());
    }

    /**
     * Allows you to update the product image.
     *
     * @param string $productId
     * @param string $file
     * @param array  $data
     * @param string $storeView
     * @param string $identifierType
     *
     * @return ActionInterface
     */
    public function update($productId, $file, $data, $storeView = null, $identifierType = null)
    {
        return $this->__createAction('catalog_product_attribute_media.update', func_get_args());
    }
}
