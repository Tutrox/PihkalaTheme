# PihkalaTheme

**ARCHIVED:** This project is not used anymore and is therefore archived since March 2022

---

This is a WordPress theme for [Pihkala.info](http://pihkala.info) (in Finnish).

## Development

The CSS is created in [PihkalaStyles](https://github.com/Tutrox/PihkalaTheme). If you need to test the CSS you can enqueue the CSS temporarily locally using:

```php
wp_enqueue_style('pihkala-style', get_template_directory_uri() . '/pihkala.dev.css', array(), null);
```

## Fonts

We use Typekit, so the font URL can't sadly be published in the repository. It should be changed manually before activating the theme.
