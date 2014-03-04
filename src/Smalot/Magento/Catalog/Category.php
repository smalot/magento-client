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
 * Class Category
 *
 * @package Smalot\Magento\Catalog
 */
class Category extends MagentoModuleAbstract
{
    /**
     * Retrieve the list of products assigned to a required category.
     *
     * @param int $categoryId
     *
     * @return ActionInterface
     */
    public function getAssignedProducts($categoryId)
    {
        return $this->__createAction('catalog_category.assignedProducts', func_get_args());
    }

    /**
     * Assign a product to the required category.
     *
     * @param int    $categoryId
     * @param string $productId
     * @param string $position
     * @param string $identifierType
     *
     * @return ActionInterface
     */
    public function assignProduct($categoryId, $productId, $position = null, $identifierType = null)
    {
        return $this->__createAction('catalog_category.assignProduct', func_get_args());
    }

    /**
     * Create a new category and return its ID.
     *
     * @param int    $parentId
     * @param array  $categoryData
     * @param string $storeView
     *
     * @return ActionInterface
     */
    public function create($parentId, $categoryData, $storeView = null)
    {
        return $this->__createAction('catalog_category.create', func_get_args());
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
        return $this->__createAction('catalog_category.currentStore', func_get_args());
    }

    /**
     * Allows you to delete the required category.
     *
     * @param int $categoryId
     *
     * @return ActionInterface
     */
    public function delete($categoryId)
    {
        return $this->__createAction('catalog_category.delete', func_get_args());
    }

    /**
     * Allows you to retrieve information about the required category.
     *
     * @param int    $categoryId
     * @param string $storeView
     * @param array  $attributes
     *
     * @return ActionInterface
     */
    public function getInfo($categoryId, $storeView = null, $attributes = null)
    {
        return $this->__createAction('catalog_category.info', func_get_args());
    }

    /**
     * Allows you to retrieve one level of categories by a website, a store view, or a parent category.
     *
     * @param string $website
     * @param string $storeView
     * @param string $parentCategory
     *
     * @return ActionInterface
     */
    public function getLevel($website, $storeView = null, $parentCategory = null)
    {
        return $this->__createAction('catalog_category.level', func_get_args());
    }

    /**
     * Allows you to move the required category in the category tree.
     *
     * @param int    $categoryId
     * @param int    $parentId
     * @param string $afterId
     *
     * @return ActionInterface
     */
    public function move($categoryId, $parentId, $afterId = null)
    {
        return $this->__createAction('catalog_category.move', func_get_args());
    }

    /**
     * Allows you to remove the product assignment from the category.
     *
     * @param int    $categoryId
     * @param string $productId
     * @param string $identifierType
     *
     * @return ActionInterface
     */
    public function removeProduct($categoryId, $productId, $identifierType = null)
    {
        return $this->__createAction('catalog_category.removeProduct', func_get_args());
    }

    /**
     * Allows you to retrieve the hierarchical tree of categories.
     *
     * @param string $parentId
     * @param string $storeView
     *
     * @return ActionInterface
     */
    public function getTree($parentId = null, $storeView = null)
    {
        return $this->__createAction('catalog_category.tree', func_get_args());
    }

    /**
     * Update the required category. Note that you should specify only those parameters which you want to be updated.
     *
     * @param int    $categoryId
     * @param array  $categoryData
     * @param string $storeView
     *
     * @return ActionInterface
     */
    public function update($categoryId, $categoryData, $storeView = null)
    {
        return $this->__createAction('catalog_category.update', func_get_args());
    }

    /**
     * Allows you to update the product assigned to a category. The product position is updated.
     *
     * @param int    $categoryId
     * @param string $productId
     * @param string $position
     * @param string $identifierType
     *
     * @return ActionInterface
     */
    public function updateProduct($categoryId, $productId, $position = null, $identifierType = null)
    {
        return $this->__createAction('catalog_category.updateProduct', func_get_args());
    }
}
