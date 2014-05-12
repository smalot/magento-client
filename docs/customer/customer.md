# Customer

This documentation file refers to `Customer/Customer` module.

## Methods

### create
### delete
### getInfo
### getList

Search for customers by `email`:

``` php
<?php
  
  $filters = array(
    'email' => 'test@domain.local',
  );
  
  $manager   = new \Smalot\Magento\Customer\Customer($connexion);
  $customers = $manager->getList($filters)->execute();

```

Check a customer `password`:

``` php
<?php
  // Email used for login:
  $email    = 'test@domain.local';
  // Password to check:
  $password = 'secret';
  
  $filters = array(
    'email' => $email,
  );
  
  $manager   = new \Smalot\Magento\Customer\Customer($connexion);
  $customers = $manager->getList($filters)->execute();
  
  if (!empty($customers)) {
    $password_hash     = $customer[0]['password_hash'];
    list($hash, $salt) = explode(':', $password_hash);
    
    if (md5($salt . $password) === $hash) {
      echo 'Matching password';
    } else {
      echo 'Invalid password';
    }
  } else {
    echo 'Customer not found';
  }

```

### update

## Complex filters structure

The following filter will select all products updated after '2013-11-19 10:00:00'.

``` php
<?php
  $filters = array(
    'complex_filter' => array(
      (object) array(
        'key'   => 'updated_at',
        'value' => (object) array(
          'key'   => 'gt',
          'value' => '2013-11-19 10:00:00',
        ),
      ),
    ),
  );
```
