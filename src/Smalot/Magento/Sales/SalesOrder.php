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

namespace Smalot\Magento\Sales;

use Smalot\Magento\MagentoModuleAbstract;

class SalesOrder extends MagentoModuleAbstract
{
    /**
     * @param string $orderIncrementId
     * @param string $status
     * @param string $comment
     * @param string $notify
     *
     * @return bool
     */
    public function addComment($orderIncrementId, $status, $comment = null, $notify = null)
    {
        return $this->remoteAdapter->salesOrderAddComment($orderIncrementId, $status, $comment, $notify);
    }

    /**
     * @param string $orderIncrementId
     *
     * @return bool
     */
    public function cancel($orderIncrementId)
    {
        return $this->remoteAdapter->salesOrderCancel($orderIncrementId);
    }

    /**
     * @param string $orderIncrementId
     *
     * @return bool
     */
    public function hold($orderIncrementId)
    {
        return $this->remoteAdapter->salesOrderHold($orderIncrementId);
    }

    /**
     * @param string $orderIncrementId
     *
     * @return array
     */
    public function getInfo($orderIncrementId)
    {
        return $this->remoteAdapter->salesOrderInfo($orderIncrementId);
    }

    /**
     * @param array $filters
     *
     * @return array
     */
    public function getList($filters)
    {
        return $this->remoteAdapter->salesOrderList($orderIncrementId);
    }

    /**
     * @param string $orderIncrementId
     *
     * @return bool
     */
    public function unhold($orderIncrementId)
    {
        return $this->remoteAdapter->salesOrderUnhold($orderIncrementId);
    }
}
