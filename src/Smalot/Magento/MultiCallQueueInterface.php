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

/**
 * Interface MultiCallQueueInterface
 *
 * @package Smalot\Magento
 */
interface MultiCallQueueInterface extends \ArrayAccess, \Iterator, \Countable
{
    /**
     * @param ActionInterface $action
     * @param callable        $callback
     *
     * @return MultiCallQueueInterface
     */
    public function addAction(ActionInterface $action, $callback = null);

    /**
     * @return $this
     */
    public function flush();

    /**
     * @return array
     */
    public function execute();
}
