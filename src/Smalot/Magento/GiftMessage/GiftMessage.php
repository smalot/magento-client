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

namespace Smalot\Magento\GiftMessage;

use Smalot\Magento\ActionInterface;
use Smalot\Magento\MagentoModuleAbstract;

/**
 * Class GiftMessage
 *
 * @package Smalot\Magento\GiftMessage
 */
class GiftMessage extends MagentoModuleAbstract
{
    /**
     * Allows you to set a global gift message for the shopping cart (quote).
     *
     * @param string $quoteId
     * @param array  $giftMessage
     * @param string $store
     *
     * @return ActionInterface
     */
    public function setForQuote($quoteId, $giftMessage, $store)
    {
        return $this->__createAction('giftmessage.setForQuote', func_get_args());
    }

    /**
     * Allows you to set a gift message for an item in the shopping cart (quote).
     *
     * @param string $quoteItemId
     * @param array  $giftMessage
     * @param string $store
     *
     * @return ActionInterface
     */
    public function setForQuoteItem($quoteItemId, $giftMessage, $store)
    {
        return $this->__createAction('giftmessage.setForQuoteItem', func_get_args());
    }

    /**
     * Allows you to set a gift message for a product in the shopping cart (quote).
     *
     * @param string $quoteId
     * @param array  $productsAndMessages
     * @param string $store
     *
     * @return ActionInterface
     */
    public function setForQuoteProduct($quoteId, $productsAndMessages, $store)
    {
        return $this->__createAction('giftmessage.setForQuoteProduct', func_get_args());
    }
}
