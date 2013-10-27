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

class SalesOrderCreditMemo extends MagentoModuleAbstract
{
    /**
     * @param string $creditmemoIncrementId
     * @param string $comment
     * @param int    $notifyCustomer
     * @param int    $includeComment
     *
     * @return bool
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
     * @param string $creditmemoIncrementId
     *
     * @return bool
     */
    public function cancel($creditmemoIncrementId)
    {
        return $this->remoteAdapter->salesOrderCreditmemoCancel($creditmemoIncrementId);
    }

    /**
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
     * @param string $creditmemoIncrementId
     *
     * @return array
     */
    public function getInfo($creditmemoIncrementId)
    {
        return $this->remoteAdapter->salesOrderCreditmemoInfo($creditmemoIncrementId);
    }

    /**
     * @param array $filters
     *
     * @return array
     */
    public function getList($filters)
    {
        return $this->remoteAdapter->salesOrderCreditmemoList($filters);
    }
}
