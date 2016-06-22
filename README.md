# Kirby Redirect 301

*Version 0.1*

Redirect internal uris to other internal uris with status 301.

## Installation

1. Add `redirect301` folder in `site/plugins/`.
1. See usage how to add redirects.

## Usage

It works like key value pairs, from one uri to another uri:

```php
c::set('plugin.redirect301', [
  'my/old/uri'   => 'my/new/cool/uri/',
  'another/one/' => 'another/new'
]);
```

- As you can see you can have an ending `/` in the uri if you want.
- The uri does not need to be existing pages.
- It does not work with full urls in this version, just uris.

## Requirements

Kirby 2.3

## Changelog

### 0.1

Initial release.