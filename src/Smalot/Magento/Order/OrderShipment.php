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
 * Class OrderShipment
 *
 * @package Smalot\Magento\Order
 */
class OrderShipment extends MagentoModuleAbstract
{
    /**
     * Allows you to add a new comment to the order shipment.
     *
     * @param string $shipmentIncrementId
     * @param string $comment
     * @param string $email
     * @param string $includeInEmail
     *
     * @return ActionInterface
     */
    public function addComment($shipmentIncrementId, $comment = null, $email = null, $includeInEmail = null)
    {
        return $this->__createAction('order_shipment.addComment', func_get_args());
    }

    /**
     * Allows you to add a new tracking number to the order shipment.
     *
     * @param string $shipmentIncrementId
     * @param string $carrier
     * @param string $title
     * @param string $trackNumber
     *
     * @return ActionInterface
     */
    public function addTrack($shipmentIncrementId, $carrier, $title, $trackNumber)
    {
        return $this->__createAction('order_shipment.addTrack', func_get_args());
    }

    /**
     * Allows you to create a new shipment for an order.
     *
     * @param string $orderIncrementId
     * @param string $itemsQty
     * @param string $comment
     * @param int    $email
     * @param int    $includeComment
     *
     * @return ActionInterface
     */
    public function create($orderIncrementId, $itemsQty = null, $comment = null, $email = null, $includeComment = null)
    {
        return $this->__createAction('order_shipment.create', func_get_args());
    }

    /**
     * Allows you to retrieve the list of allowed carriers for an order.
     *
     * @param string $orderIncrementId
     *
     * @return ActionInterface
     */
    public function getCarriers($orderIncrementId)
    {
        return $this->__createAction('order_shipment.getCarriers', func_get_args());
    }

    /**
     * Allows you to retrieve the shipment information.
     *
     * @param $shipmentIncrementId
     *
     * @return ActionInterface
     */
    public function getInfo($shipmentIncrementId)
    {
        return $this->__createAction('order_shipment.info', func_get_args());
    }

    /**
     * Allows you to retrieve the list of order shipments.
     * Additional filters can be applied.
     *
     * @param array $filters
     *
     * @return ActionInterface
     */
    public function getList($filters)
    {
        return $this->__createAction('order_shipment.list', func_get_args());
    }

    /**
     * Allows you to remove a tracking number from the order shipment.
     *
     * @param string $shipmentIncrementId
     * @param string $trackId
     *
     * @return ActionInterface
     */
    public function removeTrack($shipmentIncrementId, $trackId)
    {
        return $this->__createAction('order_shipment.removeTrack', func_get_args());
    }
}
