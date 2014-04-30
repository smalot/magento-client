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

namespace Smalot\Magento\Customer;

use Smalot\Magento\ActionInterface;
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
     * @return ActionInterface
     */
    public function getGroupList()
    {
        return $this->__createAction('customer_group.list', func_get_args());
    }
}
