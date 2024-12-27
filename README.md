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
- [Add Reaction](#add-reaction)
- [Remove Reactions](#remove-reactions)
- [Get Reactions](#get-reactions)
- [Reaction summary](#reaction-summary)
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

## Add Reaction

use the react method to save the reaction

```php
<?php

$thread->react($type, $name, $user = null, $value = null);

// React with current user
$thread->react('likes', 'like');

$thread->react('likes', 'unlike');

$thread->react('stars', 'star', null, 5);

// React by another user
$user = User::find(1);
$thread->react('likes', 'like', $user);
	
```

## Remove Reactions

```php
<?php

$thread->removeReaction($type, $name = null, $user = null);

// Remove reactions by type
$thread->removeReaction('likes');

// Remove reactions by type and name
$thread->removeReaction('likes', 'like');

$thread->removeReaction('likes', 'unlike');

// Remove reactions by user
$user = User::find(1);
$thread->react('likes', 'like', $user);
	
```

## Get Reactions

```php
<?php

$thread->getReactions($type, $name = null, $user = null);

// Get reactions by type
$thread->getReactions('likes');

// Get reactions by type and name
$thread->getReactions('likes', 'like');

$thread->getReactions('likes', 'unlike');

// Get reactions by user
$user = User::find(1);
$thread->getReactions('likes', null, $user);
$thread->getReactions('likes', 'like', $user);
	
```

## Reaction summary

```php
<?php

$thread->reactionSummary($type);

// example
$article->reactionSummary('likes')->toArray();
// output
/*
[
    "like" => 8,
    "unlike" => -2,
]
*/
	
```

## Check if user reacted

```php
<?php
// check for current user
$thread->isReactBy('likes');

// check for other user
$user = User::find(1);
$thread->isReactBy('likes', $user);
	
```



## Demo
The "[Basic Laravel Admin Penel](https://github.com/balajidharma/basic-laravel-admin-panel)" starter kit come with Laravel Reaction
