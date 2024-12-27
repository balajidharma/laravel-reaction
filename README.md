<h1 align="center">Laravel Reaction</h1>
<h3 align="center">Reaction management system for Laravel models.</h3>
<p align="center">
<a href="https://packagist.org/packages/balajidharma/laravel-reaction"><img src="https://poser.pugx.org/balajidharma/laravel-reaction/downloads" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/balajidharma/laravel-reaction"><img src="https://poser.pugx.org/balajidharma/laravel-reaction/v/stable" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/balajidharma/laravel-reaction"><img src="https://poser.pugx.org/balajidharma/laravel-reaction/license" alt="License"></a>
</p>

## Overview
Laravel Reaction allows you to add reaction to your Laravel models with support for different reaction types.

Likes <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M1 21h4V9H1v12zm22-11c0-1.1-.9-2-2-2h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 1 7.59 7.59C7.22 7.95 7 8.45 7 9v10c0 1.1.9 2 2 2h9c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73v-2z"/></svg>  <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M15 3H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 23l6.59-6.59c.36-.36.58-.86.58-1.41V5c0-1.1-.9-2-2-2zm4 0v12h4V3h-4z"/></svg>

Clap <svg class="clap-icon" width="24" height="24" viewBox="0 0 297.221 297.221" fill="currentColor">
    <g>
      <path d="M283.762,32.835c2.705-1.913,3.346-5.658,1.432-8.363c-1.914-2.705-5.657-3.347-8.363-1.432l-14.984,10.602 
        c-2.705,1.913-3.346,5.658-1.432,8.363c1.169,1.652,3.022,2.535,4.902,2.535c1.198,0,2.408-0.358,3.461-1.104L283.762,32.835z"/>
      <path d="M244.064,29.387c0.695,0.262,1.409,0.386,2.11,0.386c2.428,0,4.713-1.484,5.617-3.891l6.46-17.182 
        c1.166-3.101-0.403-6.561-3.505-7.727c-3.101-1.167-6.562,0.404-7.728,3.505l-6.46,17.182 
        C239.393,24.761,240.962,28.221,244.064,29.387z"/>
      <path d="M291.223,55.611c-0.041,0-0.082,0-0.124,0l-18.351,0.154c-3.313,0.067-5.944,2.605-5.877,5.918 
        c0.066,3.271,2.739,5.928,5.997,5.928c0.041,0,0.082,0,0.124,0l18.351-0.313c3.313-0.068,5.944-2.732,5.877-6.045 
        C297.154,57.982,294.481,55.611,291.223,55.611z"/>
      <path d="M254.2,147.154c-3.073-2.433-6.711-4.089-10.557-4.867c0.254-0.46,0.491-0.928,0.715-1.403l2.408-2.408 
        c9.274-9.275,10.248-23.874,2.264-33.961c-3.769-4.761-9.001-7.925-14.812-9.106c0.415-0.764,0.783-1.545,1.117-2.338 
        c6.316-9.149,6.213-21.445-0.782-30.283c-3.77-4.764-9.004-7.938-14.818-9.117c4.8-8.826,4.187-19.826-2.225-27.925 
        c-4.848-6.125-12.109-9.639-19.923-9.639c-6.257,0-12.16,2.236-16.792,6.33c-0.701-3.979-2.363-7.822-5.012-11.169 
        c-4.849-6.125-12.11-9.638-19.924-9.639l0,0c-6.79,0-13.164,2.635-17.947,7.418l-60.84,60.84l-0.232-8.12 
        c-0.107-13.83-11.392-25.049-25.247-25.049c-13.604,0-24.729,10.815-25.229,24.298l-12.146,88.306l-9.983,11.604 
        c-5.983,6.957-5.582,17.481,0.915,23.962L19.987,199.7c-4.574,6.881-3.773,16.266,2.206,22.23l69.667,69.557 
        c3.329,3.321,7.748,5.148,12.446,5.148c3.857,0,7.668-1.295,10.729-3.645l14.544-11.168c13.991-3.305,29.416-10.813,45.874-22.33 
        c14.371-10.058,29.962-23.46,46.337-39.836l34.631-34.631c5.107-5.107,7.795-12.188,7.375-19.427 
        C263.376,158.371,259.879,151.649,254.2,147.154z"/>
    </g>
  </svg>

Stars <svg class="star" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
    <path d="M12 2l2.4 7.4h7.6l-6 4.6 2.3 7-6.3-4.6-6.3 4.6 2.3-7-6-4.6h7.6z"/>
  </svg><svg class="star" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
    <path d="M12 2l2.4 7.4h7.6l-6 4.6 2.3 7-6.3-4.6-6.3 4.6 2.3-7-6-4.6h7.6z"/>
  </svg><svg class="star" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
    <path d="M12 2l2.4 7.4h7.6l-6 4.6 2.3 7-6.3-4.6-6.3 4.6 2.3-7-6-4.6h7.6z"/>
  </svg><svg class="star" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
    <path d="M12 2l2.4 7.4h7.6l-6 4.6 2.3 7-6.3-4.6-6.3 4.6 2.3-7-6-4.6h7.6z"/>
  </svg><svg class="star" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
    <path d="M12 2l2.4 7.4h7.6l-6 4.6 2.3 7-6.3-4.6-6.3 4.6 2.3-7-6-4.6h7.6z"/>
  </svg>

Comment Reactions <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M1 21h4V9H1v12zm22-11c0-1.1-.9-2-2-2h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 1 7.59 7.59C7.22 7.95 7 8.45 7 9v10c0 1.1.9 2 2 2h9c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73v-2z"/></svg>  <svg fill="currentColor" width="24px" height="24px" viewBox="0 0 100.353 100.353" id="Layer_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M69.294,11.442c-6.788-5.594-15.724-7.82-24.512-6.109C32.951,7.636,23.449,17.623,21.675,29.62 c-1.447,9.79,2.031,19.567,9.304,26.155c3.277,2.968,5.254,7.243,5.568,12.039c0.006,0.087,0.023,0.171,0.042,0.254v15.039 c0,0.828,0.671,1.5,1.5,1.5h1.495c0.609,4.359,3.813,7.697,7.672,7.697h6.81c3.859,0,7.062-3.338,7.671-7.697h1.495 c0.828,0,1.5-0.672,1.5-1.5V67.828c0-0.003,0.001-0.006,0.001-0.01c0-4.462,2.026-8.771,5.706-12.133 c6.062-5.538,9.538-13.415,9.538-21.61C79.978,25.287,76.084,17.037,69.294,11.442z M45.357,39.91h-2.305 c-1.271,0-2.305-1.034-2.305-2.305s1.034-2.305,2.305-2.305s2.305,1.034,2.305,2.305V39.91z M55.966,37.605 c0-1.271,1.034-2.305,2.306-2.305c1.271,0,2.305,1.034,2.305,2.305s-1.034,2.305-2.305,2.305h-2.303L55.966,37.605z M55.063,69.211 h6.67v12.396H60.36c-0.003,0-0.006-0.001-0.01-0.001s-0.006,0.001-0.01,0.001H40.982c-0.003,0-0.006-0.001-0.01-0.001 s-0.006,0.001-0.01,0.001H39.59V69.211h14.366 M48.357,66.211V42.91h4.617l0.034,23.301H48.357z M54.066,89.304h-6.81 c-2.238,0-4.117-2.004-4.637-4.697h16.083C58.183,87.3,56.304,89.304,54.066,89.304z M68.416,53.471 c-3.872,3.537-6.164,8.013-6.593,12.74h-5.816L55.974,42.91h2.298c2.925,0,5.305-2.38,5.305-5.305c0-2.925-2.38-5.305-5.305-5.305 c-2.926,0-5.306,2.38-5.306,5.307l0.003,2.303h-4.612v-2.305c0-2.925-2.38-5.305-5.305-5.305c-2.925,0-5.305,2.38-5.305,5.305 c0,2.925,2.38,5.305,5.305,5.305h2.305v23.301h-5.972c-0.636-5.005-2.864-9.465-6.393-12.66c-6.528-5.914-9.65-14.696-8.35-23.493 c1.591-10.76,10.108-19.716,20.712-21.781c7.908-1.538,15.938,0.458,22.03,5.48c6.096,5.023,9.592,12.429,9.592,20.319 C76.978,41.43,73.857,48.5,68.416,53.471z"></path></g></svg> <svg width="24" height="24" viewBox="0 0 24 24" class="reaction-icon funny-icon" fill="currentColor"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm4.5-9c.83 0 1.5-.67 1.5-1.5S17.33 8 16.5 8 15 8.67 15 9.5s.67 1.5 1.5 1.5zm-9 0c.83 0 1.5-.67 1.5-1.5S8.33 8 7.5 8 6 8.67 6 9.5 6.67 11 7.5 11zm4.5 5.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z"/></svg>  <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M15 3H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 23l6.59-6.59c.36-.36.58-.86.58-1.41V5c0-1.1-.9-2-2-2zm4 0v12h4V3h-4z"/></svg>

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
