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
     * @return ActionInterface
     */
    public function addComment($orderIncrementId, $status, $comment = null, $notify = null)
    {
        return $this->__createAction('order.addComment', func_get_args());
    }

    /**
     * Allows you to cancel the required order.
     *
     * @param string $orderIncrementId
     *
     * @return ActionInterface
     */
    public function cancel($orderIncrementId)
    {
        return $this->__createAction('order.cancel', func_get_args());
    }

    /**
     * Allows you to place the required order on hold.
     *
     * @param string $orderIncrementId
     *
     * @return ActionInterface
     */
    public function hold($orderIncrementId)
    {
        return $this->__createAction('order.hold', func_get_args());
    }

    /**
     * Allows you to retrieve the required order information.
     *
     * @param string $orderIncrementId
     *
     * @return ActionInterface
     */
    public function getInfo($orderIncrementId)
    {
        return $this->__createAction('order.info', func_get_args());
    }

    /**
     * Allows you to retrieve the list of orders. Additional filters can be applied.
     *
     * @param array $filters
     *
     * @return ActionInterface
     */
    public function getList($filters)
    {
        return $this->__createAction('order.list', func_get_args());
    }

    /**
     * Allows you to unhold the required order.
     *
     * @param string $orderIncrementId
     *
     * @return ActionInterface
     */
    public function unhold($orderIncrementId)
    {
        return $this->__createAction('order.unhold', func_get_args());
    }
}
