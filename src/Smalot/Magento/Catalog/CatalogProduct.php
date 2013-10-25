<?php


namespace Smalot\Magento\Catalog;

use Smalot\Magento\MagentoModuleAbstract;

/**
 * Class CatalogProduct
 *
 * @package Smalot\Magento\Catalog
 */
class CatalogProduct extends MagentoModuleAbstract
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
     * @return mixed
     */
    public function create($type, $set, $sku, $productData, $storeView = null)
    {
        return $this->remoteAdapter->catalogProductCreate($type, $set, $sku, $productData, $storeView);
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
        return $this->remoteAdapter->catalogProductCurrentStore($storeView);
    }


    /**
     * Allows you to delete the required product.
     *
     * @param string $productId
     * @param string $identifierType
     *
     * @return mixed
     */
    public function delete($productId, $identifierType = null)
    {
        return $this->remoteAdapter->catalogProductDelete($productId, $identifierType);
    }

    /**
     * Allows you to get the product special price data.
     *
     * @param string $productId
     * @param string $storeView
     * @param string $identifierType
     *
     * @return mixed
     */
    public function getSpecialPrice($productId, $storeView = null, $identifierType = null)
    {
        return $this->remoteAdapter->catalogProductGetSpecialPrice($productId, $storeView, $identifierType);
    }

    /**
     * Allows you to retrieve information about the required product.
     *
     * @param string $productId
     * @param string $storeView
     * @param string $attributes
     * @param string $identifierType
     *
     * @return mixed
     */
    public function getInfo($productId, $storeView = null, $attributes = null, $identifierType = null)
    {
        return $this->remoteAdapter->catalogProductInfo($productId, $storeView, $attributes, $identifierType);
    }

    /**
     * Allows you to retrieve the list of products.
     *
     * @param array $filters
     * @param string $storeView
     *
     * @return mixed
     */
    public function getList($filters, $storeView = null)
    {
        return $this->remoteAdapter->catalogProductList($filters, $storeView);
    }

    /**
     * Get the list of additional attributes.
     * Additional attributes are attributes that are not in the default set of attributes.
     *
     * @param string $productType
     * @param string $attributeSetId
     *
     * @return mixed
     */
    public function getListOfAdditionalAttributes($productType, $attributeSetId)
    {
        return $this->remoteAdapter->catalogProductListOfAdditionalAttributes($productType, $attributeSetId);
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
     * @return mixed
     */
    public function setSpecialPrice(
        $productId,
        $specialPrice,
        $fromDate,
        $toDate,
        $storeView = null,
        $productIdentifierType = null
    ) {
        return $this->remoteAdapter->catalogProductSetSpecialPrice(
            $productId,
            $specialPrice,
            $fromDate,
            $toDate,
            $storeView,
            $productIdentifierType
        );
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
     * @return mixed
     */
    public function update($productId, $productData, $storeView = null, $identifierType = null)
    {
        return $this->remoteAdapter->catalogProductUpdate($productId, $productData, $storeView, $identifierType);
    }
}
