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
 * Class ProductTag
 *
 * @package Smalot\Magento\Catalog
 */
class ProductTag extends MagentoModuleAbstract
{
    /**
     * Allows you to add one or more tags to a product.
     *
     * @param array $data
     *
     * @return mixed
     */
    public function add($data)
    {
        return $this->remoteAdapter->catalogProductTagAdd($data);
    }

    /**
     * Allows you to retrieve information about the required product tag.
     *
     * @param string $tagId
     * @param string $store
     *
     * @return mixed
     */
    public function getInfo($tagId, $store = null)
    {
        return $this->remoteAdapter->catalogProductTagInfo($tagId, $store);
    }

    /**
     * Allows you to retrieve the list of tags for a specific product.
     *
     * @param string $productId
     * @param string $store
     *
     * @return mixed
     */
    public function getList($productId, $store = null)
    {
        return $this->remoteAdapter->catalogProductTagList($productId, $store);
    }

    /**
     * Allows you to remove an existing product tag.
     *
     * @param string $tagId
     *
     * @return mixed
     */
    public function remove($tagId)
    {
        return $this->remoteAdapter->catalogProductTagRemove($tagId);
    }

    /**
     * Allows you to update information about an existing product tag.
     *
     * @param string $tagId
     * @param array  $data
     * @param string $store
     *
     * @return mixed
     */
    public function update($tagId, $data, $store = null)
    {
        return $this->remoteAdapter->catalogProductTagUpdate($tagId, $data, $store);
    }
}
