<?php

namespace Smalot\Magento\GiftMessage;

use Smalot\Magento\MagentoModuleAbstract;

class GiftMessage extends MagentoModuleAbstract
{
    /**
     * @param string $quoteId
     * @param array  $giftMessage
     * @param string $store
     *
     * @return array
     */
    public function setForQuote($quoteId, $giftMessage, $store)
    {
        return $this->remoteAdapter->giftMessageSetForQuote($quoteId, $giftMessage, $store);
    }

    /**
     * @param string $quoteItemId
     * @param array  $giftMessage
     * @param string $store
     *
     * @return array
     */
    public function setForQuoteItem($quoteItemId, $giftMessage, $store)
    {
        return $this->remoteAdapter->giftMessageSetForQuoteItem($quoteItemId, $giftMessage, $store);
    }

    /**
     * @param string $quoteId
     * @param array  $productsAndMessages
     * @param string $store
     *
     * @return array
     */
    public function setForQuoteProduct($quoteId, $productsAndMessages, $store)
    {
        return $this->remoteAdapter->giftMessageSetForQuoteProduct($quoteId, $productsAndMessages, $store);
    }
}
