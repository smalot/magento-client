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
 * Class ProductAttributeSet
 *
 * @package Smalot\Magento\Catalog
 */
class ProductAttributeSet extends MagentoModuleAbstract
{
    /**
     * Allows you to add an existing attribute to an attribute set.
     *
     * @param string $attributeId
     * @param string $attributeSetId
     * @param string $attributeGroupId
     * @param string $sortOrder
     *
     * @return ActionInterface
     */
    public function attributeAdd($attributeId, $attributeSetId, $attributeGroupId = null, $sortOrder = null)
    {
        return $this->__createAction('product_attribute_set.attributeAdd', func_get_args());
    }

    /**
     * Allows you to remove an existing attribute from an attribute set.
     *
     * @param string $attributeId
     * @param string $attributeSetId
     *
     * @return ActionInterface
     */
    public function attributeRemove($attributeId, $attributeSetId)
    {
        return $this->__createAction('product_attribute_set.attributeRemove', func_get_args());
    }

    /**
     * Allows you to create a new attribute set based on another attribute set.
     *
     * @param string $attributeSetName
     * @param string $skeletonSetId
     *
     * @return ActionInterface
     */
    public function create($attributeSetName, $skeletonSetId)
    {
        return $this->__createAction('product_attribute_set.create', func_get_args());
    }

    /**
     * Allows you to add a new group for attributes to the attribute set.
     *
     * @param string $attributeSetId
     * @param string $groupName
     *
     * @return ActionInterface
     */
    public function groupAdd($attributeSetId, $groupName)
    {
        return $this->__createAction('product_attribute_set.groupAdd', func_get_args());
    }

    /**
     * Allows you to remove a group from an attribute set.
     *
     * @param string $attributeGroupId
     *
     * @return ActionInterface
     */
    public function groupRemove($attributeGroupId)
    {
        return $this->__createAction('product_attribute_set.groupRemove', func_get_args());
    }

    /**
     * Allows you to rename a group in the attribute set.
     *
     * @param string $groupId
     * @param string $groupName
     *
     * @return ActionInterface
     */
    public function groupRename($groupId, $groupName)
    {
        return $this->__createAction('product_attribute_set.groupRename', func_get_args());
    }

    /**
     * Allows you to retrieve the list of product attribute sets.
     *
     * @return ActionInterface
     */
    public function getList()
    {
        return $this->__createAction('product_attribute_set.list', func_get_args());
    }

    /**
     * Allows you to remove an existing attribute set.
     *
     * @param string $attributeSetId
     * @param string $forceProductsRemove
     *
     * @return ActionInterface
     */
    public function remove($attributeSetId, $forceProductsRemove)
    {
        return $this->__createAction('product_attribute_set.remove', func_get_args());
    }
}
