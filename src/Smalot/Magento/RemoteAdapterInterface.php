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
 * Interface RemoteAdapterInterface
 *
 * @package Smalot\Magento
 */
interface RemoteAdapterInterface
{
    /**
     * @param ActionInterface $action
     * @param bool            $throwsException
     *
     * @return array
     * @throws \Exception
     */
    public function call(ActionInterface $action, $throwsException = true);

    /**
     * @param MultiCallQueueInterface $queue
     * @param bool                    $throwsException
     *
     * @return array
     * @throws \Exception
     */
    public function multiCall(MultiCallQueueInterface $queue, $throwsException = false);

    /**
     * @return bool
     */
    public function ping();
}
