# Ninjas

A tiny PHP framework I started building for the boilerplate bits of a site, mostly because I wanted something with zero overhead. I think I mostly made it so I could give all the classes ninja names.

Status: archived. Written in 2010 and pushed in 2011. Not maintained.

## Running it

Fill in `Config.php`, then include the framework in your page:

```php
<?php
include('../ninjas/Ninjas.php');
$n = new Ninjas();

$n->wind->connect();
if ($n->wind->getConnected()):
  $result = mysql_query("SELECT * FROM AWESOME");
  $n->wind->disconnect();
endif;
?>
```

It uses the old `mysql_*` functions, which were removed in PHP 7, so it needs PHP 5.

## How it works

`Ninjas.php` creates one object for each class in `core/`:

- `Dojo` handles page details like the title and description.
- `Wind` connects to a MySQL database.
- `Forest` embeds social media widgets.
- `Medic` sends logs by email.
- `Sky` sets up magic getters and setters.
- `Training` turns error reporting on and off.
