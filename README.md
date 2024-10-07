# Inveteratus/Acme
> Laravel Blade Component Suite

`Acme` is a small blade component suite for Laravel which uses
[Tailwind CSS](https://tailwindcss.com/), [AlpineJS](https://alpinejs.dev/) and
[Livewire](https://livewire.laravel.com/).

## Installation

```
composer require inveteratus/acme
```

Optionally, you can publish the css and js files with: `php artisan vender:publish --tag=acme-assets`
and publish the views with `php artisan vendor::publish --tag=acme-views`.

Now you will need to [Install Tailwind CSS for Laravel](https://tailwindcss.com/docs/guides/laravel),
and adjust/create the following files:

### resources/css/app.css

```
@import "tailwindcss/base";
@import "tailwindcss/utilities";
@import "tailwindcss/components";
@import "../../vendor/inveteratus/acme/resources/css/acme.css";
```

### resources/js/app.js

```
import './bootstrap';
import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';
import { Acme } from '../../vendor/inveteratus/acme/resources/js/acme.js';

Acme.init(Alpine);
Livewire.start();
```

## Usage

Acme provides a number of components:

```
<x-acme::form>
<x-acme::form.button.cancel>
<x-acme::form.button.submit>
<x-acme::form.input.email>
<x-acme::form.input.password>
<x-acme::form.input.text>
<x-acme::form.input.toggle>
<x-acme::gravatar>
<x-acme::html>
```

