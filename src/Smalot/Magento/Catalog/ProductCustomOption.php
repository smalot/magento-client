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
 * Class ProductCustomOption
 *
 * @package Smalot\Magento\Catalog
 */
class ProductCustomOption extends MagentoModuleAbstract
{
    /**
     * Allows you to add a new custom option for a product.
     *
     * @param string $productId
     * @param array  $data
     * @param string $store
     *
     * @return mixed
     */
    public function add($productId, $data, $store = null)
    {
        return $this->remoteAdapter->catalogProductCustomOptionAdd($productId, $data, $store);
    }

    /**
     * Allows you to retrieve full information about the custom option in a product.
     *
     * @param string $optionId
     * @param string $store
     *
     * @return mixed
     */
    public function getInfo($optionId, $store = null)
    {
        return $this->remoteAdapter->catalogProductCustomOptionInfo($optionId, $store);
    }

    /**
     * Allows you to retrieve the list of custom options for a specific product.
     *
     * @param string $productId
     * @param string $store
     *
     * @return array
     */
    public function getList($productId, $store = null)
    {
        return $this->remoteAdapter->catalogProductCustomOptionList($productId, $store);
    }

    /**
     * Allows you to remove a custom option from the product.
     *
     * @param string $optionId
     *
     * @return boolean
     */
    public function remove($optionId)
    {
        return $this->remoteAdapter->catalogProductCustomOptionRemove($optionId);

    }

    /**
     * Allows you to retrieve the list of available custom option types.
     *
     * @return array
     */
    public function getTypes()
    {
        return $this->remoteAdapter->catalogProductCustomOptionTypes();
    }

    /**
     * Allows you to update the required product custom option.
     *
     * @param string $optionId
     * @param array  $data
     * @param string $store
     *
     * @return int
     */
    public function update($optionId, $data, $store = null)
    {
        return $this->remoteAdapter->catalogProductCustomOptionUpdate($optionId, $data, $store);
    }
}
