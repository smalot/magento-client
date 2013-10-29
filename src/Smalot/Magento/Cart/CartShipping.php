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

namespace Smalot\Magento\Cart;

use Smalot\Magento\MagentoModuleAbstract;

/**
 * Class CartShipping
 *
 * @package Smalot\Magento\Cart
 */
class CartShipping extends MagentoModuleAbstract
{
    /**
     * Allows you to retrieve the list of available shipping methods for a shopping cart (quote).
     *
     * @param int $quoteId
     * @param string $store
     *
     * @return mixed
     */
    public function getList($quoteId, $store = null)
    {
        return $this->remoteAdapter->shoppingCartShippingList($quoteId, $store);
    }

    /**
     * Allows you to set a shipping method for a shopping cart (quote).
     *
     * @param int     $quoteId
     * @param string     $shippingMethod
     * @param string $store
     *
     * @return mixed
     */
    public function getMethod($quoteId, $shippingMethod, $store = null)
    {
        return $this->remoteAdapter->shoppingCartShippingMethod($quoteId, $shippingMethod, $store);
    }
}
