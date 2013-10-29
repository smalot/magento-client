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

namespace Smalot\Magento\Order;

use Smalot\Magento\MagentoModuleAbstract;

/**
 * Class OrderInvoice
 *
 * @package Smalot\Magento\Order
 */
class OrderInvoice extends MagentoModuleAbstract
{
    /**
     * Allows you to add a new comment to the order invoice.
     *
     * @param string $invoiceIncrementId
     * @param string $comment
     * @param int    $email
     * @param int    $includeComment
     *
     * @return mixed
     */
    public function addComment($invoiceIncrementId, $comment = null, $email = null, $includeComment = null)
    {
        return $this->remoteAdapter->salesOrderInvoiceAddComment(
            $invoiceIncrementId,
            $comment,
            $email,
            $includeComment
        );
    }

    /**
     * Allows you to cancel the required invoice.
     * Note that not all order invoices can be canceled.
     * Only some payment methods support canceling the order invoice
     * (e.g., Google Checkout, PayPal Pro, PayPal Express Checkout).
     *
     * @param string $invoiceIncrementId
     *
     * @return mixed
     */
    public function cancel($invoiceIncrementId)
    {
        return $this->remoteAdapter->salesOrderInvoiceCancel($invoiceIncrementId);
    }

    /**
     * Allows you to capture the required invoice.
     * Note that not all order invoices can be captured.
     * Only some payment methods support capturing the order invoice (e.g., PayPal Pro).
     *
     * @param string $invoiceIncrementId
     *
     * @return mixed
     */
    public function capture($invoiceIncrementId)
    {
        return $this->remoteAdapter->salesOrderInvoiceCapture($invoiceIncrementId);
    }

    /**
     * Allows you to create a new invoice for an order.
     *
     * @param string $orderIncrementId
     * @param array  $itemsQty
     * @param string $comment
     * @param string $email
     * @param string $includeComment
     *
     * @return mixed
     */
    public function create($orderIncrementId, $itemsQty, $comment, $email, $includeComment)
    {
        return $this->remoteAdapter->salesOrderInvoiceCreate(
            $orderIncrementId,
            $itemsQty,
            $comment,
            $email,
            $includeComment
        );
    }


}
