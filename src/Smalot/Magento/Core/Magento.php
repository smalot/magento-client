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

namespace Smalot\Magento\Core;

use Smalot\Magento\ActionInterface;
use Smalot\Magento\MagentoModuleAbstract;

/**
 * Class Magento
 *
 * @package Smalot\Magento\Core
 */
class Magento extends MagentoModuleAbstract
{
    /**
     * Allows you to retrieve information about Magento version and edition.
     *
     * @return ActionInterface
     */
    public function getInfo()
    {
        return $this->__createAction('core_magento.info', func_get_args());
    }
}
