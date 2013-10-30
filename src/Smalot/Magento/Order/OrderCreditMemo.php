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
 * Class OrderCreditMemo
 *
 * @package Smalot\Magento\Order
 */
class OrderCreditMemo extends MagentoModuleAbstract
{
    /**
     * Allows you to add a new comment to an existing credit memo.
     * Email notification can be sent to the user email.
     *
     * @param string $creditmemoIncrementId
     * @param string $comment
     * @param string $notifyCustomer
     * @param string $includeComment
     *
     * @return int
     */
    public function addComment($creditmemoIncrementId, $comment = null, $notifyCustomer = null, $includeComment = null)
    {
        return $this->remoteAdapter->salesOrderCreditmemoAddComment(
            $creditmemoIncrementId,
            $comment,
            $notifyCustomer,
            $includeComment
        );
    }

    /**
     * Allows you to cancel an existing credit memo.
     *
     * @param string $creditmemoIncrementId
     *
     * @return int
     */
    public function cancel($creditmemoIncrementId)
    {
        return $this->remoteAdapter->call('salesOrderCreditmemoCancel', array($creditmemoIncrementId));
    }

    /**
     * Allows you to create a new credit memo for the invoiced order.
     * Comments can be added and an email notification can be sent to the user email.
     *
     * @param string $orderIncrementId
     * @param array  $creditmemoData
     * @param string $comment
     * @param int    $notifyCustomer
     * @param int    $includeComment
     * @param string $refundToStoreCreditAmount
     *
     * @return string
     */
    public function create(
        $orderIncrementId,
        $creditmemoData = null,
        $comment = null,
        $notifyCustomer = null,
        $includeComment = null,
        $refundToStoreCreditAmount = null
    ) {
        return $this->remoteAdapter->salesOrderCreditmemoCreate(
            $orderIncrementId,
            $creditmemoData,
            $comment,
            $notifyCustomer,
            $includeComment,
            $refundToStoreCreditAmount
        );
    }

    /**
     * Allows you to retrieve full information about the specified credit memo.
     *
     * @param string $creditmemoIncrementId
     *
     * @return array
     */
    public function getInfo($creditmemoIncrementId)
    {
        return $this->remoteAdapter->call('salesOrderCreditmemoInfo', array($creditmemoIncrementId));
    }

    /**
     * Allows you to retrieve the list of credit memos by filters.
     *
     * @param array $filters
     *
     * @return array
     */
    public function getList($filters)
    {
        return $this->remoteAdapter->call('salesOrderCreditmemoList', array($filters));
    }
}
