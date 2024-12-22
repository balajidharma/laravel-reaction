<h1 align="center">Laravel Reaction</h1>
<h3 align="center">Reaction management system for Laravel models.</h3>
<p align="center">
<a href="https://packagist.org/packages/balajidharma/laravel-reaction"><img src="https://poser.pugx.org/balajidharma/laravel-reaction/downloads" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/balajidharma/laravel-reaction"><img src="https://poser.pugx.org/balajidharma/laravel-reaction/v/stable" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/balajidharma/laravel-reaction"><img src="https://poser.pugx.org/balajidharma/laravel-reaction/license" alt="License"></a>
</p>

## Overview
Laravel Reaction allows you to add reaction to your Laravel models with support for different reaction types.

## Table of Contents

- [Installation](#installation)
- [Demo](#demo)

## Installation
- Install the package via composer
```bash
composer require balajidharma/laravel-reaction
```

- Publish the migration with
```bash
php artisan vendor:publish --provider="BalajiDharma\LaravelReaction\ReactionServiceProvider" --tag="migrations"
```

- Run the migration
```bash
php artisan migrate
```

- To Publish the config/reaction.php config file with
```bash
php artisan vendor:publish --provider="BalajiDharma\LaravelReaction\ReactionServiceProvider" --tag="config"
```

- Preparing your model

To associate reactor with a model, the model must implement the HasReactor trait:
```php
<?php
namespace App\Models;

use BalajiDharma\LaravelReaction\Traits\HasReactor;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends extends Authenticatable
{
    use HasReactor;
	
```


To associate reaction with a model, the model must implement the HasReaction trait:
```php
<?php
namespace BalajiDharma\LaravelForum\Models;

use BalajiDharma\LaravelReaction\Traits\HasReaction;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasReaction;
	
```

## Demo
The "[Basic Laravel Admin Penel](https://github.com/balajidharma/basic-laravel-admin-panel)" starter kit come with Laravel Reaction
