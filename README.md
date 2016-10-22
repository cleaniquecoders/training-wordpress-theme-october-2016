# WordPress Theme Development

## Stucture

`inc` - Common files and [WP Bootstrap Navwalker](https://github.com/twittem/wp-bootstrap-navwalker) - for generate menus using Bootstrap framework.
`template_parts` - Content based on post type - none, page, search.

## Include Js / Css

Inlclude Js - `wp_enqueue_script('name',get_template_directory_uri() . '/to/script.js',$dependencies,$version,$scriptAtBottom);`

Include Css - `wp_enqueue_style('name', get_template_directory_uri() . '/to/style.css');`

## Slice Plain HTML to WordPress Theme

### Header

`header.php`, `get_header();`

### Content

Based on content type - `index.php`, `home.php`, `search.php`, `page.php`.

### Footer

`footer.php`, `get_footer();`