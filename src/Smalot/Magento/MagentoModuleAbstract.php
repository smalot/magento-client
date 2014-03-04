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

namespace Smalot\Magento;

use Smalot\Magento\RemoteAdapterInterface;

/**
 * Class MagentoModuleAbstract
 *
 * @package Smalot\Magento
 */
abstract class MagentoModuleAbstract
{
    /**
     * @var RemoteAdapterInterface
     */
    protected $remoteAdapter;

    /**
     * @param RemoteAdapterInterface $remoteAdapter
     */
    public function __construct(RemoteAdapterInterface $remoteAdapter)
    {
        $this->remoteAdapter = $remoteAdapter;
    }

    /**
     * @param string $method
     * @param array  $arguments
     *
     * @return ActionInterface
     */
    protected function __createAction($method, $arguments = array())
    {
        return new Action($method, $arguments, $this->remoteAdapter);
    }
}
