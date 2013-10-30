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
     * @return mixed
     */
    public function setCurrentStore($storeView)
    {
        return $this->remoteAdapter->call('catalogCategoryCurrentStore', array($storeView));
    }

    /**
     * Allows you to retrieve the list of category attributes.
     *
     * @return mixed
     */
    public function getList()
    {
        return $this->remoteAdapter->call('catalogCategoryAttributeList', array());
    }

    /**
     * Allows you to retrieve the attribute options.
     *
     * @param string $attributeId
     * @param string $storeView
     *
     * @return mixed
     */
    public function getOptions($attributeId, $storeView = null)
    {
        return $this->remoteAdapter->call('catalogCategoryAttributeOptions', array($attributeId, $storeView));
    }
}
