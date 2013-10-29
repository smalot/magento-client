# Magento API Client

This library implements the [Magento](http://www.magentocommerce.com/) SOAP v2 (standard) API.
It allows wrappers for each call, dependencies injections (eg: used in [Symfony 2.x](http://symfony.com/)) and code completion.

[![Build Status](https://travis-ci.org/smalot/magento-client.png?branch=master)](https://travis-ci.org/smalot/magento-client)
[![Total Downloads](https://poser.pugx.org/smalot/magento-client/downloads.png)](https://packagist.org/packages/smalot/magento-client)
[![Current Version](https://poser.pugx.org/smalot/magento-client/v/stable.png)](https://packagist.org/packages/smalot/magento-client)

# Documentation

This API is fully modeled on top of [Magento SOAP API](http://www.magentocommerce.com/api/soap/introduction.html).

Supported modules are :
* Mage_Catalog
* Mage_CatalogInventory
* Mage_Checkout
* Mage_Customer
* Mage_Directory
* Mage_Sales
* Enterprise_CustomerBalance
* Enterprise_CustomerGiftCard
* Mage_GiftMessage
* Mage_Core
* Store View

Module's names has been standardized to be more clean :
* Catalog
* CatalogInventory
* Cart
* Customer
* Directory
* Order
* CustomerBalance
* GiftCard (todo)
* GiftMessage
* Core
* Store

Note : `login` and `logout` calls are made only if needed.

# Installation



# License

This library is provided under GPLv2 license. See the complete license :

    Resources/meta/LICENSE

# Implementation


Here is a sample code to load tree of categories of the `default` website.

```php
<?php

include 'vendor/autoload.php';

$wsdl    = 'http://domainname.tld/index.php/api/v2_soap/?wsdl';
$apiUser = 'username';
$apiKey  = 'xxxxxxxxxxxxxxxxxxx';

$adapter  = new \Smalot\Magento\RemoteAdapter($wsdl, $apiUser, $apiKey);
$category = new \Smalot\Magento\Catalog\Category($adapter);
$tree    = $catalogCategory->getTree();

var_dump($tree);

?>
```
