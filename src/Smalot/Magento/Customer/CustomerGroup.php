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

namespace Smalot\Magento\Customer;

use Smalot\Magento\MagentoModuleAbstract;

/**
 * Class CustomerGroup
 *
 * @package Smalot\Magento\Customer
 */
class CustomerGroup extends MagentoModuleAbstract
{
    /**
     * Retrieve the list of customer groups.
     *
     * @return mixed
     */
    public function getGroupList()
    {
        return $this->remoteAdapter->customerGroupList();
    }
}
