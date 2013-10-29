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
 * Class Customer
 *
 * @package Smalot\Magento\Customer
 */
class Customer extends MagentoModuleAbstract
{
    /**
     * Create a new customer.
     *
     * @param array $customerData
     *
     * @return mixed
     */
    public function create($customerData)
    {
        return $this->remoteAdapter->customerCustomerCreate($customerData);
    }

    /**
     * Delete the required customer.
     *
     * @param int $customerId
     *
     * @return mixed
     */
    public function delete($customerId)
    {
        return $this->remoteAdapter->customerCustomerDelete($customerId);
    }

    /**
     * Retrieve information about the specified customer.
     *
     * @param int   $customerId
     * @param array $attributes
     *
     * @return mixed
     */
    public function getInfo($customerId, $attributes)
    {
        return $this->remoteAdapter->customerCustomerInfo($customerId, $attributes);
    }

    /**
     * Allows you to retrieve the list of customers.
     *
     * @param array $filters
     *
     * @return mixed
     */
    public function getList($filters)
    {
        return $this->remoteAdapter->customerCustomerList($filters);
    }

    /**
     * Update information about the required customer.
     * Note that you need to pass only those arguments which you want to be updated.
     *
     * @param int   $customerId
     * @param array $customerData
     *
     * @return mixed
     */
    public function update($customerId, $customerData)
    {
        return $this->remoteAdapter->customerCustomerUpdate($customerId, $customerData);
    }
}
