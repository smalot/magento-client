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
     * @return ActionInterface
     */
    public function add($data)
    {
        return $this->__createAction('product_tag.add', func_get_args());
    }

    /**
     * Allows you to retrieve information about the required product tag.
     *
     * @param string $tagId
     * @param string $store
     *
     * @return ActionInterface
     */
    public function getInfo($tagId, $store = null)
    {
        return $this->__createAction('product_tag.info', func_get_args());
    }

    /**
     * Allows you to retrieve the list of tags for a specific product.
     *
     * @param string $productId
     * @param string $store
     *
     * @return ActionInterface
     */
    public function getList($productId, $store = null)
    {
        return $this->__createAction('product_tag.list', func_get_args());
    }

    /**
     * Allows you to remove an existing product tag.
     *
     * @param string $tagId
     *
     * @return ActionInterface
     */
    public function remove($tagId)
    {
        return $this->__createAction('product_tag.remove', func_get_args());
    }

    /**
     * Allows you to update information about an existing product tag.
     *
     * @param string $tagId
     * @param array  $data
     * @param string $store
     *
     * @return ActionInterface
     */
    public function update($tagId, $data, $store = null)
    {
        return $this->__createAction('product_tag.update', func_get_args());
    }
}
