# AdminLte 

for Laravel

**WIP: Made by a Noob ... don't use it**

This package provides a simple way to generate a closed area for admins.
Route, Middleware, 

## Installation

Add these two lines to the composer.json file of your laravel installation to use the dev version of this package

```
"minimum-stability": "dev",
"prefer-stable" : true,
```

**Require the package**

```
composer require ridrog/adminlte
```

**Include the ServiceProvider**
 
to the providers array @ config/app.php
```
'providers' => [
    ...
    Ridrog\Adminarea\AdminLteServiceProvider::class,
    ...
 ],
```