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
 * Class CustomerAddress
 *
 * @package Smalot\Magento\Customer
 */
class CustomerAddress extends MagentoModuleAbstract
{
    /**
     * Create a new address for the customer.
     *
     * @param int $customerId
     * @param array $addressData
     *
     * @return mixed
     */
    public function create($customerId, $addressData)
    {
        return $this->remoteAdapter->customerAddressCreate($customerId, $addressData);
    }

    /**
     * Delete the required customer address.
     *
     * @param int $addressId
     *
     * @return mixed
     */
    public function delete($addressId)
    {
        return $this->remoteAdapter->customerAddressDelete($addressId);
    }

    /**
     * Retrieve information about the required customer address.
     *
     * @param int $addressId
     *
     * @return mixed
     */
    public function getInfo($addressId)
    {
        return $this->remoteAdapter->customerAddressInfo($addressId);
    }

    /**
     * Retrieve the list of customer addresses.
     *
     * @param int $customerId
     *
     * @return mixed
     */
    public function getList($customerId)
    {
        return $this->remoteAdapter->customerAddressList($customerId);
    }

    /**
     * Update address data of the required customer.
     *
     * @param int $addressId
     * @param array $addressData
     *
     * @return mixed
     */
    public function update($addressId, $addressData)
    {
        return $this->remoteAdapter->customerAddressUpdate($addressId, $addressData);
    }
}
