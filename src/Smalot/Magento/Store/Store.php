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

namespace Smalot\Magento\Store;

use Smalot\Magento\ActionInterface;
use Smalot\Magento\MagentoModuleAbstract;

/**
 * Class Store
 *
 * @package Smalot\Magento\StoreView
 */
class Store extends MagentoModuleAbstract
{
    /**
     * Allows you to retrieve the list of store views.
     *
     * @return ActionInterface
     */
    public function getList()
    {
        return $this->__createAction('store.list', func_get_args());
    }

    /**
     * Allows you to retrieve information about the required store view.
     *
     * @param string $storeId
     *
     * @return ActionInterface
     */
    public function getInfo($storeId = null)
    {
        return $this->__createAction('store.info', func_get_args());
    }
}
