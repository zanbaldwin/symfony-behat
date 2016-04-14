# Using [Behat][behat] with [Symfony][symfony]

Behat is a testing library that uses Gherkin, a format for writing tests in natural language. This means they can be written in any language (English, Tagalog, etc) and understood by people who don't know PHP.

```bash
# Clone the repository.
$ git clone git@github.com:zanderbaldwin/symfony-behat.git
# Setup the project.
$ cd symfony-behat
$ composer install
# Run the functional tests.
$ bin/behat
```

## Important Files

- All `*.feature` files for the application inside [`tests/features/app`](tests/features/app).
- The application context class, [`AppContext`](tests/Context/AppContext.php).
- The Behat configuration file, [`behat.yml`](behat.yml).

Feature files consist of [steps][writingfeatures] that explain step by step how to test something. Once you have written steps inside your feature files, you then create methods inside the Context class(es) that define how those steps should be executed (these are called [step definitions][stepdefinitions]).

Another important file is the [`MinkContext`][minkcontext] - it contains lots of helper step definitions for you to use straight away. The [`AppContext`](tests/Context/AppContext.php) extends this class and therefore inherits all of its step definitions so you don't have to write them all again.
To list all step definitions that are defined, execute the command `bin/behat -d l` (which is a shortcut for the command `bin/behat --definitions=l`).

## Behat Defaults

By default (no custom configuration), Behat will look for:
- Feature files inside `features` instead of `tests/features`.
- Context classes inside `features/bootstrap` instead of `tests/Context`.

I changed the default location of these files (via the `behat.yml` configuration file) because of *personal preference*,
not because it is better.

Some people install Behat globally (to the computer) and use the `behat` command, instead of per-project and using the `bin/behat` command. Installing it globally means that the classes normally autoloaded by Composer won't get autoloaded.

[behat]: http://behat.org
[symfony]: https://symfony.com
[minkcontext]: https://github.com/Behat/MinkExtension/blob/master/src/Behat/MinkExtension/Context/MinkContext.php
[writingfeatures]: http://docs.behat.org/en/v3.0/guides/1.gherkin.html
[stepdefinitions]: http://docs.behat.org/en/v3.0/guides/2.definitions.html
