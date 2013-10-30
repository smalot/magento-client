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
 * Class CartPayment
 *
 * @package Smalot\Magento\Cart
 */
class CartPayment extends MagentoModuleAbstract
{
    /**
     * Allows you to retrieve a list of available payment methods for a shopping cart (quote).
     *
     * @param int    $quoteId
     * @param string $store
     *
     * @return mixed
     */
    public function getList($quoteId, $store = null)
    {
        return $this->remoteAdapter->call('shoppingCartPaymentList', array($quoteId, $store));
    }

    /**
     * Allows you to set a payment method for a shopping cart (quote).
     *
     * @param int    $quoteId
     * @param array  $paymentData
     * @param string $store
     *
     * @return mixed
     */
    public function getMethod($quoteId, $paymentData, $store = null)
    {
        return $this->remoteAdapter->call('shoppingCartPaymentMethod', array($quoteId, $paymentData, $store));
    }
}
