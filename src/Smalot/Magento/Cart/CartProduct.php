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

namespace Smalot\Magento\Cart;

use Smalot\Magento\ActionInterface;
use Smalot\Magento\MagentoModuleAbstract;

/**
 * Class CartProduct
 *
 * @package Smalot\Magento\Cart
 */
class CartProduct extends MagentoModuleAbstract
{
    /**
     * Allows you to add one or more products to the shopping cart (quote).
     *
     * @param int    $quoteId
     * @param array  $productsData
     * @param string $storeId
     *
     * @return ActionInterface
     */
    public function add($quoteId, $productsData, $storeId = null)
    {
        return $this->__createAction('cart_product.add', func_get_args());
    }

    /**
     * Allows you to retrieve the list of products in the shopping cart (quote).
     *
     * @param int    $quoteId
     * @param string $store
     *
     * @return ActionInterface
     */
    public function getList($quoteId, $store = null)
    {
        return $this->__createAction('cart_product.list', func_get_args());
    }

    /**
     * Allows you to move products from the current quote to a customer quote.
     *
     * @param int    $quoteId
     * @param array  $productsData
     * @param string $store
     *
     * @return ActionInterface
     */
    public function moveToCustomerQuote($quoteId, $productsData, $store = null)
    {
        return $this->__createAction('cart_product.moveToCustomerQuote', func_get_args());
    }

    /**
     * Allows you to remove one or several products from a shopping cart (quote).
     *
     * @param int    $quoteId
     * @param array  $productsData
     * @param string $store
     *
     * @return ActionInterface
     */
    public function remove($quoteId, $productsData, $store = null)
    {
        return $this->__createAction('cart_product.remove', func_get_args());
    }

    /**
     * Allows you to update one or several products in the shopping cart (quote).
     *
     * @param int    $quoteId
     * @param array  $productsData
     * @param string $store
     *
     * @return ActionInterface
     */
    public function update($quoteId, $productsData, $store = null)
    {
        return $this->__createAction('cart_product.update', func_get_args());
    }
}
