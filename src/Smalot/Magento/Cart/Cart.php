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
 * Class Cart
 *
 * @package Smalot\Magento\Cart
 */
class Cart extends MagentoModuleAbstract
{
    /**
     * Allows you to create an empty shopping cart.
     *
     * @param string $storeId
     *
     * @return ActionInterface
     */
    public function create($storeId = null)
    {
        return $this->__createAction('cart.create', func_get_args());
    }

    /**
     * Allows you to retrieve full information about the shopping cart (quote).
     *
     * @param int    $quoteId
     * @param string $store
     *
     * @return ActionInterface
     */
    public function getInfo($quoteId, $store = null)
    {
        return $this->__createAction('cart.info', func_get_args());
    }

    /**
     * Allows you to retrieve the website license agreement for the quote according to the website (store).
     *
     * @param int    $quoteId
     * @param string $store
     *
     * @return ActionInterface
     */
    public function getLicense($quoteId, $store = null)
    {
        return $this->__createAction('cart.license', func_get_args());
    }

    /**
     * Allows you to create an order from a shopping cart (quote).
     * Before placing the order, you need to add the customer, customer address, shipping and payment methods.
     *
     * @param int    $quoteId
     * @param string $store
     * @param array  $agreements
     *
     * @return ActionInterface
     */
    public function order($quoteId, $store = null, $agreements = null)
    {
        return $this->__createAction('cart.order', func_get_args());
    }

    /**
     * Allows you to retrieve total prices for a shopping cart (quote).
     *
     * @param int    $quoteId
     * @param string $store
     *
     * @return ActionInterface
     */
    public function getTotals($quoteId, $store = null)
    {
        return $this->__createAction('cart.totals', func_get_args());
    }
}
