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
 * Class CustomerAddress
 *
 * @package Smalot\Magento\Customer
 */
class CustomerAddress extends MagentoModuleAbstract
{
    /**
     * Create a new address for the customer.
     *
     * @param int   $customerId
     * @param array $addressData
     *
     * @return ActionInterface
     */
    public function create($customerId, $addressData)
    {
        return $this->__createAction('customer_address.create', func_get_args());
    }

    /**
     * Delete the required customer address.
     *
     * @param int $addressId
     *
     * @return ActionInterface
     */
    public function delete($addressId)
    {
        return $this->__createAction('customer_address.delete', func_get_args());
    }

    /**
     * Retrieve information about the required customer address.
     *
     * @param int $addressId
     *
     * @return ActionInterface
     */
    public function getInfo($addressId)
    {
        return $this->__createAction('customer_address.info', func_get_args());
    }

    /**
     * Retrieve the list of customer addresses.
     *
     * @param int $customerId
     *
     * @return ActionInterface
     */
    public function getList($customerId)
    {
        return $this->__createAction('customer_address.list', func_get_args());
    }

    /**
     * Update address data of the required customer.
     *
     * @param int   $addressId
     * @param array $addressData
     *
     * @return ActionInterface
     */
    public function update($addressId, $addressData)
    {
        return $this->__createAction('customer_address.update', func_get_args());
    }
}
