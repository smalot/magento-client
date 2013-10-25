<?php

namespace Smalot\Magento;

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
     * @param string $wsdl
     * @param string $apiUser
     * @param string $apiKey
     * @param array  $options
     * @param bool   $autoLogin
     */
    public function __construct($wsdl, $apiUser, $apiKey, $options = array(), $autoLogin = true)
    {
        $options = array_merge(self::$defaultOptions, $options);

        $this->wsdl      = $wsdl;
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

        if ($this->sessionId = $this->soapClient->__soapCall('login', array($apiUser, $apiKey))) {
            return true;
        }

        return false;
    }

    /**
     * @return bool
     */
    public function ping()
    {
        $info = $this->call('magentoInfo', array(), false);

        return (is_object($info) || is_array($info));
    }

    /**
     * @return bool
     */
    public function logout()
    {
        if (!is_null($this->sessionId)) {
            $this->call('logout', array(), false);
            $this->sessionId = null;

            return true;
        }

        return false;
    }

    /**
     * @param string $method
     * @param array  $params
     * @param bool   $throwsException
     *
     * @return mixed
     * @throws \Exception
     */
    public function call($method, $params = array(), $throwsException = false)
    {
        try {
            if (is_null($this->sessionId)) {
                throw new \Exception('Not connected.');
            }

            array_unshift($params, $this->sessionId);

            $result = $this->soapClient->__soapCall($method, $params);

            return $result;

        } catch (\Exception $e) {
            if ($throwsException) {
                throw $e;
            }

            return null;
        }
    }

    /**
     * @param string $method
     * @param array  $params
     *
     * @return mixed
     */
    public function __call($method, $params = array())
    {
        if (is_null($this->sessionId) && $this->autoLogin) {
            $this->login();
        }

        return $this->call($method, $params, true);
    }
}