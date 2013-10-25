<?php


namespace Smalot\Magento\Catalog;

use Smalot\Magento\MagentoModuleAbstract;

/**
 * Class CatalogCategory
 *
 * @package Smalot\Magento\Catalog
 */
class CatalogCategory extends MagentoModuleAbstract
{
    /**
     * Retrieve the list of products assigned to a required category.
     *
     * @param int $categoryId
     *
     * @return mixed
     */
    public function getAssignedProducts($categoryId)
    {
        return $this->remoteAdapter->catalogCategoryAssignedProducts($categoryId);
    }

    /**
     * Assign a product to the required category.
     *
     * @param int    $categoryId
     * @param string $productId
     * @param string $position
     * @param string $identifierType
     *
     * @return mixed
     */
    public function assignProduct($categoryId, $productId, $position = null, $identifierType = null)
    {
        return $this->remoteAdapter->catalogCategoryAssignProduct($categoryId, $productId, $position, $identifierType);
    }

    /**
     * Create a new category and return its ID.
     *
     * @param int    $parentId
     * @param array  $categoryData
     * @param string $storeView
     *
     * @return mixed
     */
    public function create($parentId, $categoryData, $storeView = null)
    {
        return $this->remoteAdapter->catalogCategoryCreate($parentId, $categoryData, $storeView);
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
        return $this->remoteAdapter->catalogCategoryCurrentStore($storeView);
    }

    /**
     * Allows you to delete the required category.
     *
     * @param int $categoryId
     *
     * @return mixed
     */
    public function delete($categoryId)
    {
        return $this->remoteAdapter->catalogCategoryDelete($categoryId);
    }

    /**
     * Allows you to retrieve information about the required category.
     *
     * @param int    $categoryId
     * @param string $storeView
     * @param array  $attributes
     *
     * @return mixed
     */
    public function getInfo($categoryId, $storeView = null, $attributes = null)
    {
        return $this->remoteAdapter->catalogCategoryInfo($categoryId, $storeView, $attributes);
    }

    /**
     * Allows you to retrieve one level of categories by a website, a store view, or a parent category.
     *
     * @param string $website
     * @param string $storeView
     * @param string $parentCategory
     *
     * @return mixed
     */
    public function getLevel($website, $storeView = null, $parentCategory = null)
    {
        return $this->remoteAdapter->catalogCategoryLevel($website, $storeView, $parentCategory);
    }

    /**
     * Allows you to move the required category in the category tree.
     *
     * @param int    $categoryId
     * @param int    $parentId
     * @param string $afterId
     *
     * @return mixed
     */
    public function move($categoryId, $parentId, $afterId = null)
    {
        return $this->remoteAdapter->catalogCategoryMove($categoryId, $parentId, $afterId);
    }

    /**
     * Allows you to remove the product assignment from the category.
     *
     * @param int    $categoryId
     * @param string $productId
     * @param string $identifierType
     *
     * @return mixed
     */
    public function removeProduct($categoryId, $productId, $identifierType = null)
    {
        return $this->remoteAdapter->catalogCategoryRemoveProduct($categoryId, $productId, $identifierType);
    }

    /**
     * Allows you to retrieve the hierarchical tree of categories.
     *
     * @param string $parentId
     * @param string $storeView
     *
     * @return mixed
     */
    public function getTree($parentId = null, $storeView = null)
    {
        return $this->remoteAdapter->catalogCategoryTree($parentId, $storeView);
    }

    /**
     * Update the required category. Note that you should specify only those parameters which you want to be updated.
     *
     * @param int    $categoryId
     * @param array  $categoryData
     * @param string $storeView
     *
     * @return mixed
     */
    public function update($categoryId, $categoryData, $storeView = null)
    {
        return $this->remoteAdapter->catalogCategoryUpdate($categoryId, $categoryData, $storeView);
    }

    /**
     * Allows you to update the product assigned to a category. The product position is updated.
     *
     * @param int    $categoryId
     * @param string $productId
     * @param string $position
     * @param string $identifierType
     *
     * @return mixed
     */
    public function updateProduct($categoryId, $productId, $position = null, $identifierType = null)
    {
        return $this->remoteAdapter->catalogCategoryUpdateProduct($categoryId, $productId, $position, $identifierType);
    }
}
