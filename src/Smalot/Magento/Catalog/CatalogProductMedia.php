<?php


namespace Smalot\Magento\Catalog;

use Smalot\Magento\MagentoModuleAbstract;

/**
 * Class CatalogProductMedia
 *
 * @package Smalot\Magento\Catalog
 */
class CatalogProductMedia extends MagentoModuleAbstract
{
    /**
     * Allows you to upload a new product image.
     *
     * @param string $product
     * @param array  $data
     * @param string $storeView
     * @param string $identifierType
     *
     * @return mixed
     */
    public function create($product, $data, $storeView = null, $identifierType = null)
    {
        return $this->remoteAdapter->catalogProductAttributeMediaCreate($product, $data, $storeView, $identifierType);
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
        return $this->remoteAdapter->catalogProductAttributeMediaCurrentStore($storeView);
    }

    /**
     * Allows you to retrieve information about the specified product image.
     *
     * @param string $productId
     * @param string $file
     * @param string $storeView
     * @param string $identifierType
     *
     * @return mixed
     */
    public function getInfo($productId, $file, $storeView = null, $identifierType = null)
    {
        return $this->remoteAdapter->catalogProductAttributeMediaInfo($productId, $file, $storeView, $identifierType);
    }

    /**
     * Allows you to retrieve the list of product images.
     *
     * @param string $productId
     * @param string $storeView
     * @param string $identifierType
     *
     * @return mixed
     */
    public function getList($productId, $storeView = null, $identifierType = null)
    {
        return $this->remoteAdapter->catalogProductAttributeMediaList($productId, $storeView, $identifierType);
    }

    /**
     * Allows you to remove the image from a product.
     *
     * @param string $productId
     * @param  string $file
     * @param string $identifierType
     *
     * @return mixed
     */
    public function remove($productId, $file, $identifierType = null)
    {
        return $this->remoteAdapter->catalogProductAttributeMediaRemove($productId, $file, $identifierType);
    }

    /**
     * Allows you to retrieve product image types including standard image, small_image, thumbnail, etc.
     * Note that if the product attribute set contains attributes of the Media Image type
     * (Catalog Input Type for Store Owner > Media Image), it will also be returned in the response.
     *
     * @param string $setId
     *
     * @return mixed
     */
    public function getTypes($setId)
    {
        return $this->remoteAdapter->catalogProductAttributeMediaTypes($setId);
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
     * @return mixed
     */
    public function update($productId, $file, $data, $storeView = null, $identifierType = null)
    {
        return $this->remoteAdapter->catalogProductAttributeMediaUpdate(
            $productId,
            $file,
            $data,
            $storeView,
            $identifierType
        );
    }
}
