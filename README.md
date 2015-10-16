# Magento API Client

This library implements the [Magento](http://www.magentocommerce.com/) SOAP v1 (standard) API.

[![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/smalot/magento-client/badges/quality-score.png?s=c95f997f16707af6966dc56f82ac2361778c3b4a)](https://scrutinizer-ci.com/g/smalot/magento-client/)
[![Total Downloads](https://poser.pugx.org/smalot/magento-client/downloads.png)](https://packagist.org/packages/smalot/magento-client)
[![Current Version](https://poser.pugx.org/smalot/magento-client/v/stable.png)](https://packagist.org/packages/smalot/magento-client)
[![License](https://poser.pugx.org/smalot/magento-client/license.png)](https://packagist.org/packages/smalot/magento-client)

Features:

- allows wrappers
- allows dependencies injections
- allows code completion
- auto-updated via [composer](http://www.getcomposer.org) packaging ([packagist.org](http://www.packagist.org))

**Note:** This library is not related to [Magento Company](http://magento.com/).

# Documentation

This API is designed on top of [Magento SOAP API V1](http://www.magentocommerce.com/api/soap/introduction.html).

Supported modules are :
- Mage_Catalog
- Mage_CatalogInventory
- Mage_Checkout
- Mage_Customer
- Mage_Directory
- Mage_Sales
- Enterprise_CustomerBalance
- Enterprise_CustomerGiftCard
- Mage_GiftMessage
- Mage_Core
- Store View

Module's names has been standardized to be more clean :
- Catalog
- CatalogInventory
- Cart
- Customer
- Directory
- Order
- CustomerBalance
- GiftCard
- GiftMessage
- Core
- Store

**Note :** `login` and `logout` calls are made only if needed.

# Installation

Download using [composer](http://getcomposer.org/):

```js
{
    "require": {
        "smalot/magento-client": "*"
    }
}
```

Now tell composer to download the bundle by running the command:

``` bash
$ php composer.phar update smalot/magento-client
```

Composer will install the bundle to your project's `vendor/smalot` directory and `create`/`update` an autoload file.

# License

This library is provided under MIT license (since v0.5.0 release). See the complete license :

    LICENSE

# Implementation

Each `module manager`, which heritate from `MagentoModuleAbstract`, will generate an `action`.

Actions can be either directly executed or added to a `queue`.

If it is directly executed, it will generate a `single call`, if not, that's a `multi call`.

## Single Call

Here is a sample code to load tree of categories of the `default` website in a single call.

```php
<?php

// Include composer's autoloader mecanism
include 'vendor/autoload.php';

// Init config
$path    = 'http://domainname.tld/shop-folder/';
$apiUser = 'username';
$apiKey  = 'xxxxxxxxxxxxxxxxxxx';

// Create remote adapter which wrap soapclient
$adapter  = new \Smalot\Magento\RemoteAdapter($path, $apiUser, $apiKey);

// Call any module's class
$categoryManager = new \Smalot\Magento\Catalog\Category($adapter);
$tree            = $categoryManager->getTree()->execute();

var_dump($tree);

```

## Multi Call

Multi call is only available on `Magento Soap v1`.

That's why this library is built on top of `Magento Soap v1`.

This function allows to group multiple soap calls into only one http request, which can be a very great optimization practice.

It removes `network latency` and reduce magento bootstrap processes.

Tipically, it can be used to synchronize a whole product catalog into very few number of calls.

```php
<?php

// Include composer's autoloader mecanism
include 'vendor/autoload.php';

// Init config
$path    = 'http://domainname.tld/shop-folder/';
$apiUser = 'username';
$apiKey  = 'xxxxxxxxxxxxxxxxxxx';

// Create remote adapter which wrap soapclient
$adapter  = new \Smalot\Magento\RemoteAdapter($path, $apiUser, $apiKey);

// Build the queue for multicall
$queue = new \Smalot\Magento\MultiCallQueue($adapter);

// Call any module's class
$productManager = new \Smalot\Magento\Catalog\Product($adapter);
$productManager->getInfo(10)->addToQueue($queue);
$productManager->getInfo(11)->addToQueue($queue);
$productManager->getInfo(12)->addToQueue($queue);

// Request in one multicall information of 3 products (#10, #11, #12)
$products = $queue->execute();

var_dump($products);

```

### Callback support for multicall

```php
<?php

// Include composer's autoloader mecanism
include 'vendor/autoload.php';

// Init config
$path    = 'http://domainname.tld/shop-folder/';
$apiUser = 'username';
$apiKey  = 'xxxxxxxxxxxxxxxxxxx';

// Create remote adapter which wrap soapclient
$adapter  = new \Smalot\Magento\RemoteAdapter($path, $apiUser, $apiKey);

// Build the queue for multicall
$queue = new \Smalot\Magento\MultiCallQueue($adapter);

// Local catalog adapter
$localAdapter = new LocalAdapter(....);

// Store categories
$categoryManager = new \Smalot\Magento\Catalog\Category($adapter);
$categoryManager->getTree()->addToQueue($queue, array($localAdapter, 'updateCategories'));

// Store products into local catalog
$productManager = new \Smalot\Magento\Catalog\Product($adapter);
$productManager->getInfo(10)->addToQueue($queue, array($localAdapter, 'updateProduct'));
$productManager->getInfo(11)->addToQueue($queue, array($localAdapter, 'updateProduct'));
$productManager->getInfo(12)->addToQueue($queue, array($localAdapter, 'updateProduct'));

// Update local catalog
$products = $queue->execute();

```
