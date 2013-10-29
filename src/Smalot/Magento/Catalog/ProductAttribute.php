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
     * @return mixed
     */
    public function addOption($attribute, $data)
    {
        return $this->remoteAdapter->catalogProductAttributeAddOption($attribute, $data);
    }

    /**
     * Allows you to create a new product attribute.
     *
     * @param array $data
     *
     * @return mixed
     */
    public function create($data)
    {
        return $this->remoteAdapter->catalogProductAttributeCreate($data);
    }

    /**
     * Allows you to set/get the current store view.
     *
     * @param string $storeView
     *
     * @return mixed
     */
    public function setCurrentStore($storeView)
    {
        return $this->remoteAdapter->catalogProductAttributeCurrentStore($storeView);
    }

    /**
     * Allows you to get full information about a required attribute with the list of options.
     *
     * @param string $attribute
     *
     * @return mixed
     */
    public function getInfo($attribute)
    {
        return $this->remoteAdapter->catalogProductAttributeInfo($attribute);
    }

    /**
     * Allows you to retrieve the list of product attributes.
     *
     * @param string $setId
     *
     * @return mixed
     */
    public function getList($setId)
    {
        return $this->remoteAdapter->catalogProductAttributeList($setId);
    }

    /**
     * Allows you to retrieve the product attribute options.
     *
     * @param string $attributeId
     * @param string $storeView
     *
     * @return mixed
     */
    public function getOptions($attributeId, $storeView = null)
    {
        return $this->remoteAdapter->catalogProductAttributeOptions($attributeId, $storeView);
    }

    /**
     * Allows you to remove the required attribute from a product.
     *
     * @param string $attribute
     *
     * @return mixed
     */
    public function remove($attribute)
    {
        return $this->remoteAdapter->catalogProductAttributeRemove($attribute);
    }

    /**
     * Allows you to remove the option for an attribute.
     *
     * @param string $attribute
     * @param string $optionId
     *
     * @return mixed
     */
    public function removeOption($attribute, $optionId)
    {
        return $this->remoteAdapter->catalogProductAttributeRemoveOption($attribute, $optionId);
    }

    /**
     * Allows you to retrieve the list of possible attribute types.
     *
     * @return mixed
     */
    public function getTypes()
    {
        return $this->remoteAdapter->catalogProductAttributeTypes();
    }

    /**
     * Allows you to update the required attribute.
     *
     * @param string $attribute
     * @param array  $data
     *
     * @return mixed
     */
    public function update($attribute, $data)
    {
        return $this->remoteAdapter->catalogProductAttributeUpdate($attribute, $data);
    }
}