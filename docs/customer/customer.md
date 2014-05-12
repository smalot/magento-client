# Customer

This documentation file refers to `Customer/Customer` module.

## Methods

### create
### delete
### getInfo
### getList

Search for customers by `email`:

````
  ...
  
  $filters = array(
    'email' => 'test@domain.local',
  );
  
  $manager   = new \Smalot\Magento\Customer\Customer($connexion);
  $customers = $manager->getList($filters)->execute();

````

### update

## Complex filters structure

The following filter will select all products updated after '2013-11-19 10:00:00'.

````
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
````
