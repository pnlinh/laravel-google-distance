# Google Distance in Laravel
[![StyleCI](https://github.styleci.io/repos/155349271/shield?branch=master)](https://github.styleci.io/repos/155349271)

## Requirements

- PHP >= 7.1.3
- Laravel >= 5.5.*

## Installation

Require this package with composer.

```bash
composer require pnlinh/laravel-google-distance:dev-master
```

To publishes config `config/distance.php`, use command:

```bash
php artisan vendor:publish --tag="distance-config"
```

To change YOUR_GOOGLE_API_KEY, you set it in `config/distance.php`

## Usage

```php
// Use Facades
use Pnlinh\GoogleDistance\Facades\GoogleDistance;

$distance = GoogleDistance::calculate('FromAddress', 'To Address');

// Use Helper Function
$distance = google_distance('From Address', 'To Address');
```

## Credits

- [Pham Ngoc Linh](https://github.com/pnlinh)

For more info, please visit https://developers.google.com/maps/documentation/distance-matrix/
