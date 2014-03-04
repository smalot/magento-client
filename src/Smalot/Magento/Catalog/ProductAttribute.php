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
 * Class ProductAttribute
 *
 * @package Smalot\Magento\Catalog
 */
class ProductAttribute extends MagentoModuleAbstract
{
    /**
     * Allows you to add a new option for attributes with selectable fields.
     *
     * @param string $attribute
     * @param array  $data
     *
     * @return ActionInterface
     */
    public function addOption($attribute, $data)
    {
        return $this->__createAction('product_attribute.addOption', func_get_args());
    }

    /**
     * Allows you to create a new product attribute.
     *
     * @param array $data
     *
     * @return ActionInterface
     */
    public function create($data)
    {
        return $this->__createAction('product_attribute.create', func_get_args());
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
        return $this->__createAction('product_attribute.currentStore', func_get_args());
    }

    /**
     * Allows you to get full information about a required attribute with the list of options.
     *
     * @param string $attribute
     *
     * @return ActionInterface
     */
    public function getInfo($attribute)
    {
        return $this->__createAction('product_attribute.info', func_get_args());
    }

    /**
     * Allows you to retrieve the list of product attributes.
     *
     * @param string $setId
     *
     * @return ActionInterface
     */
    public function getList($setId)
    {
        return $this->__createAction('product_attribute.list', func_get_args());
    }

    /**
     * Allows you to retrieve the product attribute options.
     *
     * @param string $attributeId
     * @param string $storeView
     *
     * @return ActionInterface
     */
    public function getOptions($attributeId, $storeView = null)
    {
        return $this->__createAction('product_attribute.options', func_get_args());
    }

    /**
     * Allows you to remove the required attribute from a product.
     *
     * @param string $attribute
     *
     * @return ActionInterface
     */
    public function remove($attribute)
    {
        return $this->__createAction('product_attribute.remove', func_get_args());
    }

    /**
     * Allows you to remove the option for an attribute.
     *
     * @param string $attribute
     * @param string $optionId
     *
     * @return ActionInterface
     */
    public function removeOption($attribute, $optionId)
    {
        return $this->__createAction('product_attribute.removeOption', func_get_args());
    }

    /**
     * Allows you to retrieve the list of possible attribute types.
     *
     * @return ActionInterface
     */
    public function getTypes()
    {
        return $this->__createAction('product_attribute.types', func_get_args());
    }

    /**
     * Allows you to update the required attribute.
     *
     * @param string $attribute
     * @param array  $data
     *
     * @return ActionInterface
     */
    public function update($attribute, $data)
    {
        return $this->__createAction('product_attribute.update', func_get_args());
    }
}
