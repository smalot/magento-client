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
     * @return mixed
     */
    public function addComment($shipmentIncrementId, $comment = null, $email = null, $includeInEmail = null)
    {
        return $this->remoteAdapter->salesOrderShipmentAddComment(
            $shipmentIncrementId,
            $comment,
            $email,
            $includeInEmail
        );
    }

    /**
     * Allows you to add a new tracking number to the order shipment.
     *
     * @param string $shipmentIncrementId
     * @param string $carrier
     * @param string $title
     * @param string $trackNumber
     *
     * @return mixed
     */
    public function addTrack($shipmentIncrementId, $carrier, $title, $trackNumber)
    {
        return $this->remoteAdapter->salesOrderShipmentAddTrack($shipmentIncrementId, $carrier, $title, $trackNumber);
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
     * @return mixed
     */
    public function create($orderIncrementId, $itemsQty = null, $comment = null, $email = null, $includeComment = null)
    {
        return $this->remoteAdapter->salesOrderShipmentCreate(
            $orderIncrementId,
            $itemsQty,
            $comment,
            $email,
            $includeComment
        );
    }

    /**
     * Allows you to retrieve the list of allowed carriers for an order.
     *
     * @param string $orderIncrementId
     *
     * @return mixed
     */
    public function getCarriers($orderIncrementId)
    {
        return $this->remoteAdapter->salesOrderShipmentGetCarriers($orderIncrementId);
    }

    /**
     * Allows you to retrieve the shipment information.
     *
     * @param $shipmentIncrementId
     *
     * @return mixed
     */
    public function getInfo($shipmentIncrementId)
    {
        return $this->remoteAdapter->salesOrderShipmentInfo($shipmentIncrementId);
    }

    /**
     * Allows you to retrieve the list of order shipments.
     * Additional filters can be applied.
     *
     * @param array $filters
     *
     * @return mixed
     */
    public function getList($filters)
    {
        return $this->remoteAdapter->salesOrderShipmentList($filters);
    }

    /**
     * Allows you to remove a tracking number from the order shipment.
     *
     * @param string $shipmentIncrementId
     * @param string $trackId
     *
     * @return mixed
     */
    public function removeTrack($shipmentIncrementId, $trackId)
    {
        return $this->remoteAdapter->salesOrderShipmentRemoveTrack($shipmentIncrementId, $trackId);
    }
}
