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
 * Class Action
 *
 * @package Smalot\Magento
 */
class Action implements ActionInterface
{
    /**
     * @var string
     */
    protected $method = null;

    /**
     * @var array
     */
    protected $arguments = null;

    /**
     * @var RemoteAdapterInterface
     */
    protected $remoteAdapter = null;

    /**
     * @param string                 $method
     * @param array                  $arguments
     * @param RemoteAdapterInterface $remoteAdapter
     */
    public function __construct($method, array $arguments = array(), RemoteAdapterInterface $remoteAdapter = null)
    {
        $this->method        = $method;
        $this->arguments     = $arguments;
        $this->remoteAdapter = $remoteAdapter;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @return array
     */
    public function getArguments()
    {
        return $this->arguments;
    }

    /**
     * @return array
     */
    public function execute()
    {
        return $this->remoteAdapter->call($this);
    }

    /**
     * @param MultiCallQueueInterface $queue
     * @param callable                $callback
     *
     * @return mixed|void
     */
    public function addToQueue(MultiCallQueueInterface $queue, $callback = null)
    {
        $queue->addAction($this, $callback);
    }
}
