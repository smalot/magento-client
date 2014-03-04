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
 * Class CartCoupon
 *
 * @package Smalot\Magento\Cart
 */
class CartCoupon extends MagentoModuleAbstract
{
    /**
     * Allows you to add a coupon code for a shopping cart (quote).
     * The shopping cart must not be empty.
     *
     * @param int    $quoteId
     * @param string $couponCode
     * @param string $store
     *
     * @return ActionInterface
     */
    public function add($quoteId, $couponCode, $store = null)
    {
        return $this->__createAction('cart_coupon.add', func_get_args());
    }

    /**
     * Allows you to remove a coupon code from a shopping cart (quote).
     *
     * @param int    $quoteId
     * @param string $store
     *
     * @return ActionInterface
     */
    public function remove($quoteId, $store = null)
    {
        return $this->__createAction('cart_coupon.remove', func_get_args());
    }
}
