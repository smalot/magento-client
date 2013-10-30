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

namespace Smalot\Magento\Catalog;

use Smalot\Magento\MagentoModuleAbstract;

/**
 * Class ProductCustomOptionValue
 *
 * @package Smalot\Magento\Catalog
 */
class ProductCustomOptionValue extends MagentoModuleAbstract
{
    /**
     * Allows you to add a new custom option value to a custom option.
     * Note that the custom option value can be added only to the option with the Select Input Type.
     *
     * @param string $optionId
     * @param array  $data
     * @param string $store
     *
     * @return bool
     */
    public function add($optionId, $data, $store = null)
    {
        return $this->remoteAdapter->call('catalogProductCustomOptionValueAdd', array($optionId, $data, $store));
    }

    /**
     * Allows you to retrieve full information about the specified product custom option value.
     *
     * @param string $valueId
     * @param string $store
     *
     * @return mixed
     */
    public function getInfo($valueId, $store = null)
    {
        return $this->remoteAdapter->call('catalogProductCustomOptionValueInfo', array($valueId, $store));
    }

    /**
     * Allows you to retrieve the list of product custom option values.
     * Note that the method is available only for the option Select Input Type.
     *
     * @param string $optionId
     * @param string $store
     *
     * @return array
     */
    public function getList($optionId, $store = null)
    {
        return $this->remoteAdapter->call('catalogProductCustomOptionValueList', array($optionId, $store));
    }

    /**
     * Allows you to remove the custom option value from a product.
     *
     * @param string $valueId
     *
     * @return mixed
     */
    public function remove($valueId)
    {
        return $this->remoteAdapter->call('catalogProductCustomOptionValueRemove', array($valueId));
    }

    /**
     * Allows you to update the product custom option value.
     *
     * @param string $valueId
     * @param array  $data
     * @param string $store
     *
     * @return mixed
     */
    public function update($valueId, $data, $store = null)
    {
        return $this->remoteAdapter->call('catalogProductCustomOptionValueUpdate', array($valueId, $data, $store));
    }
}
