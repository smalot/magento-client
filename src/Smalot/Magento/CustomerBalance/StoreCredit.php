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

namespace Smalot\Magento\CustomerBalance;

use Smalot\Magento\ActionInterface;
use Smalot\Magento\MagentoModuleAbstract;

/**
 * Class StoreCredit
 *
 * @package Smalot\Magento\CustomerBalance
 */
class StoreCredit extends MagentoModuleAbstract
{
    /**
     * Allows you to retrieve the customer store credit balance amount.
     *
     * @param string $customerId
     * @param string $websiteId
     *
     * @return ActionInterface
     */
    public function getBalance($customerId, $websiteId)
    {
        return $this->__createAction('storecredit.balance', func_get_args());
    }

    /**
     * Allows you to retrieve the customer store credit history information.
     *
     * @param string $customerId
     * @param string $websiteId
     *
     * @return ActionInterface
     */
    public function getHistory($customerId, $websiteId = null)
    {
        return $this->__createAction('storecredit.history', func_get_args());
    }
}
