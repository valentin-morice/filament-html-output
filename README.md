# filament-html-output

A Filament form component that allows you to display HTML without creating views.

## Installation

You can install the package via composer:

```bash
composer require valentin-morice/filament-html-output
```

## Usage

```php
// To display HTML saved in a database column, use the make method
// This will generate a label corresponding to the name of the column
HtmlOutput::make('html');

// To display inline HTML, use the inline method
// No label will be generated if the make method is left empty
HtmlOutput::make()
    ->inline('<div>Hello World!</div>')
```

Using both the `make` and `inline` method at the same time will first display HTML from you database, and after that the inlined HTML. The label will correspond to the database column's name.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
