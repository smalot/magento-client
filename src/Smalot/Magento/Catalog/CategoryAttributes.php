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
 * Class CategoryAttributes
 *
 * @package Smalot\Magento\Catalog
 */
class CategoryAttributes extends MagentoModuleAbstract
{
    /**
     * Allows you to set/get the current store view.
     *
     * @param string $storeView
     *
     * @return ActionInterface
     */
    public function setCurrentStore($storeView)
    {
        return $this->__createAction('catalog_category_attribute.currentStore', func_get_args());
    }

    /**
     * Allows you to retrieve the list of category attributes.
     *
     * @return ActionInterface
     */
    public function getList()
    {
        return $this->__createAction('catalog_category_attribute.list', func_get_args());
    }

    /**
     * Allows you to retrieve the attribute options.
     *
     * @param string $attributeId
     * @param string $storeView
     *
     * @return ActionInterface
     */
    public function getOptions($attributeId, $storeView = null)
    {
        return $this->__createAction('catalog_category_attribute.options', func_get_args());
    }
}
