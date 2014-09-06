# Installation

## Step 1) Get the library

Installing the library is pretty easy and can be done through either Composer or as a Git submodule:


### Method a) As a Composer dependency

Add the following to your ``composer.json`` (see http://getcomposer.org/)
```json
"require":  {
    "cleentfaar/package_name_here": "~0.1"
}
```

### Method b) As a Git submodule

Run the following commands to bring in the library as a submodule.
```
git submodule add https://github.com/cleentfaar/package_name_here.git vendor/cleentfaar/package_name_here
```


## Step 2) Register the namespaces

If you installed the bundle by composer, the namespace will be registered automatically (jump to step 3).

Otherwise, add the following two namespace entries to the `registerNamespaces` call in your autoloader:
```php
<?php
// path/to/your/autoload.php
$loader->registerNamespaces(array(
    // ...
    'CL\package_name_here' => __DIR__.'/../vendor/cleentfaar/package_name_here',
    // ...
));
```


## Step 3) Ready?

Check out the [usage documentation](usage.md)!
