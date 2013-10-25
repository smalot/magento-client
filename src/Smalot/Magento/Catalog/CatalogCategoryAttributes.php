<?php


namespace Smalot\Magento\Catalog;

use Smalot\Magento\MagentoModuleAbstract;

/**
 * Class CatalogCategoryAttributes
 *
 * @package Smalot\Magento\Catalog
 */
class CatalogCategoryAttributes extends MagentoModuleAbstract
{
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
     * Allows you to retrieve the list of category attributes.
     *
     * @return mixed
     */
    public function getList()
    {
        return $this->remoteAdapter->catalogCategoryAttributeList();
    }

    /**
     * Allows you to retrieve the attribute options.
     *
     * @param string $attributeId
     * @param string $storeView
     *
     * @return mixed
     */
    public function getOptions($attributeId, $storeView = null)
    {
        return $this->remoteAdapter->catalogCategoryAttributeOptions($attributeId, $storeView);
    }
}
