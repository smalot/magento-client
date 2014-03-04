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

namespace Smalot\Magento\Order;

use Smalot\Magento\ActionInterface;
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
     * @return ActionInterface
     */
    public function addComment($creditmemoIncrementId, $comment = null, $notifyCustomer = null, $includeComment = null)
    {
        return $this->__createAction('order_creditmemo.addComment', func_get_args());
    }

    /**
     * Allows you to cancel an existing credit memo.
     *
     * @param string $creditmemoIncrementId
     *
     * @return ActionInterface
     */
    public function cancel($creditmemoIncrementId)
    {
        return $this->__createAction('order_creditmemo.cancel', func_get_args());
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
     * @return ActionInterface
     */
    public function create(
        $orderIncrementId,
        $creditmemoData = null,
        $comment = null,
        $notifyCustomer = null,
        $includeComment = null,
        $refundToStoreCreditAmount = null
    ) {
        return $this->__createAction('order_creditmemo.create', func_get_args());
    }

    /**
     * Allows you to retrieve full information about the specified credit memo.
     *
     * @param string $creditmemoIncrementId
     *
     * @return ActionInterface
     */
    public function getInfo($creditmemoIncrementId)
    {
        return $this->__createAction('order_creditmemo.info', func_get_args());
    }

    /**
     * Allows you to retrieve the list of credit memos by filters.
     *
     * @param array $filters
     *
     * @return ActionInterface
     */
    public function getList($filters)
    {
        return $this->__createAction('order_creditmemo.list', func_get_args());
    }
}
