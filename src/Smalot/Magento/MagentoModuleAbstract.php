<?php

namespace Smalot\Magento;

use Smalot\Magento\RemoteAdapterInterface;

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
}
