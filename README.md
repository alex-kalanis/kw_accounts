# kw_accounts

[![Build Status](https://app.travis-ci.com/alex-kalanis/kw_accounts.svg?branch=master)](https://app.travis-ci.com/github/alex-kalanis/kw_accounts)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/alex-kalanis/kw_accounts/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/alex-kalanis/kw_accounts/?branch=master)
[![Latest Stable Version](https://poser.pugx.org/alex-kalanis/kw_accounts/v/stable.svg?v=1)](https://packagist.org/packages/alex-kalanis/kw_accounts)
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.3-8892BF.svg)](https://php.net/)
[![Downloads](https://img.shields.io/packagist/dt/alex-kalanis/kw_accounts.svg?v1)](https://packagist.org/packages/alex-kalanis/kw_accounts)
[![License](https://poser.pugx.org/alex-kalanis/kw_accounts/license.svg?v=1)](https://packagist.org/packages/alex-kalanis/kw_accounts)
[![Code Coverage](https://scrutinizer-ci.com/g/alex-kalanis/kw_accounts/badges/coverage.png?b=master&v=1)](https://scrutinizer-ci.com/g/alex-kalanis/kw_accounts/?branch=master)

Authentication to site - format of accounts and their basic implementation

These libraries represent internal getters and setters to access accounts data on
target site. You need to use them with appropriate fillers.

Your system probably do not need the same things as mine. So some things can be
ignored and another can be available under "extra".

## PHP Installation

```
{
    "require": {
        "alex-kalanis/kw_accounts": "1.0"
    }
}
```

(Refer to [Composer Documentation](https://github.com/composer/composer/blob/master/doc/00-intro.md#introduction) if you are not
familiar with composer)


## PHP Usage

1.) Use your autoloader (if not already done via Composer autoloader)

2.) Add some external packages with connection to the local or remote accounts storage.

3.) Connect that package with this one as its dependency.

## Caveats

It contains only basics, it needs something to fill and use.
