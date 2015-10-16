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

namespace Smalot\Magento\Catalog;

use Smalot\Magento\ActionInterface;
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
     * @return ActionInterface
     */
    public function getList()
    {
        return $this->__createAction('catalog_product_type.list', func_get_args());
    }
}
