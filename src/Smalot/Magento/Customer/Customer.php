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
     * @return ActionInterface
     */
    public function create($customerData)
    {
        return $this->__createAction('customer.create', func_get_args());
    }

    /**
     * Delete the required customer.
     *
     * @param int $customerId
     *
     * @return ActionInterface
     */
    public function delete($customerId)
    {
        return $this->__createAction('customer.delete', func_get_args());
    }

    /**
     * Retrieve information about the specified customer.
     *
     * @param int   $customerId
     * @param array $attributes
     *
     * @return ActionInterface
     */
    public function getInfo($customerId, $attributes)
    {
        return $this->__createAction('customer.info', func_get_args());
    }

    /**
     * Allows you to retrieve the list of customers.
     *
     * @param array $filters
     *
     * @return ActionInterface
     */
    public function getList($filters)
    {
        return $this->__createAction('customer.list', func_get_args());
    }

    /**
     * Update information about the required customer.
     * Note that you need to pass only those arguments which you want to be updated.
     *
     * @param int   $customerId
     * @param array $customerData
     *
     * @return ActionInterface
     */
    public function update($customerId, $customerData)
    {
        return $this->__createAction('customer.update', func_get_args());
    }
}
