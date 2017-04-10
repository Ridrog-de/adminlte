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
    Ridrog\AdminLte\AdminLteServiceProvider::class,
    ...
 ],
```

**Use the view**

```
adminlte::dashboard
```

or extend the adminlte master template

``` 
@extends('adminlte::default')

@section('content-header')
    <h1>Hello World</h1>
@endsection

@section('content')
    <p>
        Some Content here ...
    </p>
@endsection

```

## Customize

**Publish the config**  
``` php artisan vendor:publish --tag=adminlte-config ```

And take a look, most should be clear.  
Switch skins, hide/display various sections  
....



## Sections

'meta', 'styles' and 'scripts'

'content' and 'content-header'

## Stacks

- top-nav
- top-nav-right
- footer
- sidebar-top
- sidebar-bottom


## Make a View

There is a command for creating your own view.
That view will extend the default adminlte layout and it will also include all possible sections and stacks.

Options:
- --basic  Creates a basic view 
- --force  Force overwriting

```
php artisan make:view:adminlte path.to.nameoftheview
```