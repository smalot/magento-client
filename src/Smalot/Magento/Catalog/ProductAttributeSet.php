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
     * @return mixed
     */
    public function attributeSet($attributeId, $attributeSetId, $attributeGroupId = null, $sortOrder = null)
    {
        return $this->remoteAdapter->catalogProductAttributeSetAttributeAdd(
            $attributeId,
            $attributeSetId,
            $attributeGroupId,
            $sortOrder
        );
    }

    /**
     * Allows you to remove an existing attribute from an attribute set.
     *
     * @param string $attributeId
     * @param string $attributeSetId
     *
     * @return mixed
     */
    public function attributeRemove($attributeId, $attributeSetId)
    {
        return $this->remoteAdapter->call(
            'catalogProductAttributeSetAttributeRemove',
            array($attributeId, $attributeSetId)
        );
    }

    /**
     * Allows you to create a new attribute set based on another attribute set.
     *
     * @param string $attributeSetName
     * @param string $skeletonSetId
     *
     * @return mixed
     */
    public function create($attributeSetName, $skeletonSetId)
    {
        return $this->remoteAdapter->call('catalogProductAttributeSetCreate', array($attributeSetName, $skeletonSetId));
    }

    /**
     * Allows you to add a new group for attributes to the attribute set.
     *
     * @param string $attributeSetId
     * @param string $groupName
     *
     * @return mixed
     */
    public function groupAdd($attributeSetId, $groupName)
    {
        return $this->remoteAdapter->call('catalogProductAttributeSetGroupAdd', array($attributeSetId, $groupName));
    }

    /**
     * Allows you to remove a group from an attribute set.
     *
     * @param string $attributeGroupId
     *
     * @return mixed
     */
    public function groupRemove($attributeGroupId)
    {
        return $this->remoteAdapter->call('catalogProductAttributeSetGroupRemove', array($attributeGroupId));
    }

    /**
     * Allows you to rename a group in the attribute set.
     *
     * @param string $groupId
     * @param string $groupName
     *
     * @return mixed
     */
    public function groupRename($groupId, $groupName)
    {
        return $this->remoteAdapter->call('catalogProductAttributeSetGroupRename', array($groupId, $groupName));
    }

    /**
     * Allows you to retrieve the list of product attribute sets.
     *
     * @return mixed
     */
    public function getList()
    {
        return $this->remoteAdapter->call('catalogProductAttributeSetList', array());
    }

    /**
     * Allows you to remove an existing attribute set.
     *
     * @param string $attributeSetId
     * @param string $forceProductsRemove
     *
     * @return mixed
     */
    public function remove($attributeSetId, $forceProductsRemove)
    {
        return $this->remoteAdapter->call(
            'catalogProductAttributeSetRemove',
            array($attributeSetId, $forceProductsRemove)
        );
    }
}
