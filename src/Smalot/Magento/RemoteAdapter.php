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
 * Class RemoteAdapter
 *
 * @package Smalot\Magento
 */
class RemoteAdapter implements RemoteAdapterInterface
{
    /**
     * @var array
     */
    protected static $defaultOptions = array(
        'exceptions'         => true,
        'connection_timeout' => 15,
        'keep_alive'         => true,
        'compression'        => true,
        'features'           => SOAP_SINGLE_ELEMENT_ARRAYS,
    );

    /**
     * @var string
     */
    protected $wsdl = null;

    /**
     * @var string
     */
    protected $apiUser = null;

    /**
     * @var string
     */
    protected $apiKey = null;

    /**
     * @var array
     */
    protected $options = null;

    /**
     * @var boolean
     */
    protected $autoLogin = null;

    /**
     * @var string
     */
    protected $sessionId = null;

    /**
     * @var \SoapClient
     */
    protected $soapClient = null;

    /**
     * @param string $path
     * @param string $apiUser
     * @param string $apiKey
     * @param array  $options
     * @param bool   $autoLogin
     */
    public function __construct($path, $apiUser, $apiKey, $options = array(), $autoLogin = true)
    {
        $this->wsdl      = rtrim($path, '/') . '/index.php/api/soap/?wsdl';
        $this->apiUser   = $apiUser;
        $this->apiKey    = $apiKey;
        $this->autoLogin = $autoLogin;

        $this->setOptions($options);
        @$this->soapClient = new \SoapClient($this->wsdl, $this->getOptions());
    }

    /**
     *
     */
    public function __destruct()
    {
        $this->logout();

        unset($this->options);
        unset($this->sessionId);
        unset($this->soapClient);
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param $options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->options = array_merge(self::$defaultOptions, $options);

        return $this;
    }

    /**
     * @return array
     */
    public static function getDefaultOptions()
    {
        return self::$defaultOptions;
    }

    /**
     * @param array $options
     */
    public static function setDefaultOptions($options = array())
    {
        self::$defaultOptions = $options;
    }

    /**
     * @param string $apiUser
     * @param string $apiKey
     *
     * @return bool
     * @throws \Exception
     */
    public function login($apiUser = null, $apiKey = null)
    {
        if (null === $apiUser) {
            $apiUser = $this->apiUser;
        }

        if (null === $apiKey) {
            $apiKey = $this->apiKey;
        }

        if ($this->sessionId = $this->soapClient->login($apiUser, $apiKey)) {
            return true;
        }

        return false;
    }

    /**
     * @return bool
     */
    public function ping()
    {
        $info = $this->call(new Action('core_magento.info'), false);

        return (is_object($info) || is_array($info));
    }

    /**
     * @return bool
     */
    public function logout()
    {
        if (null !== $this->sessionId) {
            $this->soapClient->endSession($this->sessionId);
            $this->sessionId = null;

            return true;
        }

        return false;
    }

    /**
     * @throws RemoteAdapterException
     */
    protected function checkSecurity()
    {
        if (null === $this->sessionId && $this->autoLogin) {
            $this->login();
        }

        if (null === $this->sessionId) {
            throw new RemoteAdapterException('Not connected.');
        }
    }

    /**
     * @param ActionInterface $action
     * @param bool            $throwsException
     *
     * @return array|false
     * @throws \Exception
     */
    public function call(ActionInterface $action, $throwsException = true)
    {
        try {
            $this->checkSecurity();

            $result = $this->soapClient->call($this->sessionId, $action->getMethod(), $action->getArguments());

            return $result;

        } catch (\Exception $e) {
            if ($throwsException) {
                throw $e;
            }

            return false;
        }
    }

    /**
     * @param MultiCallQueueInterface $queue
     * @param bool                    $throwsException
     *
     * @return array|false
     * @throws \Exception
     */
    public function multiCall(MultiCallQueueInterface $queue, $throwsException = true)
    {
        try {
            $this->checkSecurity();

            $actions = $this->getActions($queue);
            $results = $this->soapClient->multiCall($this->sessionId, $actions);

            $this->handleCallbacks($queue, $results);

            return $results;

        } catch (\Exception $e) {
            if ($throwsException) {
                throw $e;
            }

            return false;
        }
    }

    /**
     * @param MultiCallQueueInterface $queue
     *
     * @return array
     */
    protected function getActions(MultiCallQueueInterface $queue)
    {
        $actions = array();

        foreach ($queue as $item) {
            $action = $item['action'];

            /** @var $action ActionInterface */
            $actions[] = array(
                $action->getMethod(),
                $action->getArguments(),
            );
        }

        return $actions;
    }

    /**
     * @param MultiCallQueueInterface $queue
     * @param array                   $results
     */
    protected function handleCallbacks(MultiCallQueueInterface $queue, $results)
    {
        foreach ($queue as $position => $item) {
            $callback = $item['callback'];

            if (is_callable($callback)) {
                call_user_func($callback, $results[$position]);
            }
        }
    }

    /**
     * @return string
     */
    public function getLastRequestHeaders()
    {
        return $this->soapClient->__getLastRequestHeaders();
    }

    /**
     * @return string
     */
    public function getLastRequest()
    {
        return $this->soapClient->__getLastRequest();
    }

    /**
     * @return string
     */
    public function getLastResponseHeaders()
    {
        return $this->soapClient->__getLastResponseHeaders();
    }

    /**
     * @return string
     */
    public function getLastResponse()
    {
        return $this->soapClient->__getLastResponse();
    }
}
