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
 * Class Order
 *
 * @package Smalot\Magento\Order
 */
class Order extends MagentoModuleAbstract
{
    /**
     * Allows you to add a new comment to the order.
     *
     * @param string $orderIncrementId
     * @param string $status
     * @param string $comment
     * @param string $notify
     *
     * @return bool
     */
    public function addComment($orderIncrementId, $status, $comment = null, $notify = null)
    {
        return $this->remoteAdapter->call('salesOrderAddComment', array($orderIncrementId, $status, $comment, $notify));
    }

    /**
     * Allows you to cancel the required order.
     *
     * @param string $orderIncrementId
     *
     * @return bool
     */
    public function cancel($orderIncrementId)
    {
        return $this->remoteAdapter->call('salesOrderCancel', array($orderIncrementId));
    }

    /**
     * Allows you to place the required order on hold.
     *
     * @param string $orderIncrementId
     *
     * @return bool
     */
    public function hold($orderIncrementId)
    {
        return $this->remoteAdapter->call('salesOrderHold', array($orderIncrementId));
    }

    /**
     * Allows you to retrieve the required order information.
     *
     * @param string $orderIncrementId
     *
     * @return array
     */
    public function getInfo($orderIncrementId)
    {
        return $this->remoteAdapter->call('salesOrderInfo', array($orderIncrementId));
    }

    /**
     * Allows you to retrieve the list of orders. Additional filters can be applied.
     *
     * @param array $filters
     *
     * @return array
     */
    public function getList($filters)
    {
        return $this->remoteAdapter->call('salesOrderList', array($filters));
    }

    /**
     * Allows you to unhold the required order.
     *
     * @param string $orderIncrementId
     *
     * @return bool
     */
    public function unhold($orderIncrementId)
    {
        return $this->remoteAdapter->call('salesOrderUnhold', array($orderIncrementId));
    }
}
