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

namespace Smalot\Magento\CustomerBalance;

use Smalot\Magento\MagentoModuleAbstract;

class StoreCredit extends MagentoModuleAbstract
{
    /**
     * @param string $customerId
     * @param string $websiteId
     *
     * @return string
     */
    public function getBalance($customerId, $websiteId)
    {
        return $this->remoteAdapter->enterpriseCustomerbalanceBalance($customerId, $websiteId);
    }

    /**
     * @param string $customerId
     * @param string $websiteId
     *
     * @return array
     */
    public function getHistory($customerId, $websiteId = null)
    {
        return $this->remoteAdapter->enterpriseCustomerbalanceHistory($customerId, $websiteId);
    }
}
