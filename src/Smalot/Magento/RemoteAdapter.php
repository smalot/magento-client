<?php

/**
 * @file
 *          Magento API Client (SOAP v1).
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
        $options = array_merge(self::$defaultOptions, $options);

        $this->wsdl      = rtrim($path, '/') . '/index.php/api/soap/?wsdl';
        $this->apiUser   = $apiUser;
        $this->apiKey    = $apiKey;
        $this->options   = $options;
        $this->autoLogin = $autoLogin;

        $this->init();
    }

    /**
     *
     */
    public function init()
    {
        $this->soapClient = new \SoapClient($this->wsdl, $this->options);
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
        if (is_null($apiUser)) {
            $apiUser = $this->apiUser;
        }

        if (is_null($apiKey)) {
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
        $info = $this->call('core_magento.info', array(), true);

        return (is_object($info) || is_array($info));
    }

    /**
     * @return bool
     */
    public function logout()
    {
        if (!is_null($this->sessionId)) {
            $this->call('logout', array(), true);
            $this->sessionId = null;

            return true;
        }

        return false;
    }

    /**
     * @param ActionInterface $action
     * @param bool            $throwsException
     *
     * @return array|null
     * @throws \Exception
     */
    public function call(ActionInterface $action, $throwsException = true)
    {
        try {
            if (is_null($this->sessionId) && $this->autoLogin) {
                $this->login();
            }

            if (is_null($this->sessionId)) {
                throw new \Exception('Not connected.');
            }

            $result = $this->soapClient->call($this->sessionId, $action->getMethod(), $action->getArguments());

            return $result;

        } catch (\Exception $e) {
            if ($throwsException) {
                throw $e;
            }

            return null;
        }
    }

    /**
     * @param array $calls
     * @param bool  $throwsException
     *
     * @return array
     * @throws \Exception
     */
    public function multiCall(MultiCallQueueInterface $queue, $throwsException = false)
    {
        try {
            if (is_null($this->sessionId) && $this->autoLogin) {
                $this->login();
            }

            if (is_null($this->sessionId)) {
                throw new \Exception('Not connected.');
            }

            $actions = array();

            /** @var $action ActionInterface */
            foreach ($queue as $action) {
                $actions[] = array(
                    $action->getMethod(),
                    $action->getArguments(),
                );
            }

            $results = $this->soapClient->multiCall($this->sessionId, $actions);

            return $results;

        } catch (\Exception $e) {
            return array();
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
