# Product

This documentation file refers to `Catalog/Product` module.

## Methods

### create
### setCurrentStore
### delete
### getSpecialPrice
### getInfo
### getList
### getListOfAdditionalAttributes
### setSpecialPrice
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

### List of available conditions

| Key to use  | Equivalent | Meaning |
| ----------- |:----------:| ------- |
| eq          | = | equals |
| neq         | <> | not equals |
| like        | LIKE |   |
| nlike       | NOT LIKE |  |
| in          | IN () | in |
| nin         | NOT IN () | not in |
| notnull     | NOT NULL |  |
| null        | NULL |  |
| gt          | > | greater than |
| lt          | < | lower than |
| gteq        | >= | greater or equal to  |
| lteq        | <= | lower or equal to  |
| finset      | FIND_IN_SET() |  |
| regexp      | REGEXP |  |
| from        | >= |  |
| to          | <= |  |
| seq         |  |  |
| sneq        |  |  |
