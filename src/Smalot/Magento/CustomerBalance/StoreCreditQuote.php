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

namespace Smalot\Magento\CustomerBalance;

use Smalot\Magento\ActionInterface;
use Smalot\Magento\MagentoModuleAbstract;

/**
 * Class StoreCreditQuote
 *
 * @package Smalot\Magento\CustomerBalance
 */
class StoreCreditQuote extends MagentoModuleAbstract
{
    /**
     * Allows you to remove store credit amount from the shopping cart (quote) and increase the customer store credit.
     *
     * @param string $quoteId
     * @param string $store
     *
     * @return ActionInterface
     */
    public function removeAmount($quoteId, $store = null)
    {
        return $this->__createAction('storecredit_quote.removeAmount', func_get_args());
    }

    /**
     * Allows you to set amount from the customer store credit to the shopping cart.
     *
     * @param string $quoteId
     * @param string $store
     *
     * @return ActionInterface
     */
    public function setAmount($quoteId, $store = null)
    {
        return $this->__createAction('storecredit_quote.setAmount', func_get_args());
    }
}
