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
 * Class ProductType
 *
 * @package Smalot\Magento\Catalog
 */
class ProductType extends MagentoModuleAbstract
{
    /**
     * Allows you to retrieve the list of product types.
     *
     * @return array
     */
    public function getList()
    {
        return $this->remoteAdapter->call('catalogProductTypeList', array());
    }
}
