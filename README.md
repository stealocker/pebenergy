# pebenergy --- Personal Custom Base WP Theme

A lightweight, opinionated base theme for WordPress projects. Provides a
clean starter layout, essential page templates, asset bundling (SCSS /
JS), and translation-ready structure so you can build on a solid
foundation.

## Table of Contents

-   [Features](#features)
-   [Getting Started](#getting-started)
    -   [Prerequisites](#prerequisites)
    -   [Installation](#installation)
-   [Usage](#usage)
-   [Theme Structure](#theme-structure)
-   [Customization & Extending](#customization--extending)
-   [Translatables / Internationalization
    (i18n)](#translatables--internationalization-i18n)
-   [Contributing](#contributing)
-   [License](#license)

## Features

-   Clean base layout: header, content container, footer --- no sidebar
    by default.
-   Essential page templates: index, page, single post, archives, 404,
    search.
-   Organized assets: SCSS, compiled CSS, JS, images/icons.
-   Template parts for modular markup.
-   Translation-ready strings using WordPress gettext.
-   Easy to extend structure.

## Getting Started

### Prerequisites

-   WordPress (latest recommended)
-   SCSS compiler if using SCSS

### Installation

``` bash
git clone https://github.com/stealocker/pebenergy.git pebenergy
```

(Optional) Compile SCSS:

``` bash
sass assets/scss/style.scss assets/css/style.css
```

## Usage

Activate the theme in WordPress admin, extend templates, SCSS, JS or
template parts as needed.

## Theme Structure

    pebenergy/
    ├── assets/
    │   ├── scss/
    │   ├── css/
    │   ├── js/
    │   └── images/
    ├── template-parts/
    ├── 404.php
    ├── archive.php
    ├── footer.php
    ├── header.php
    ├── page.php
    ├── search.php
    ├── single.php
    ├── index.php
    ├── style.css
    ├── functions.php
    └── README.md

## Customization & Extending

Extend SCSS, add templates, use template parts, modify JS, etc.

## Translatables / Internationalization (i18n)

Example:

``` php
<?php echo __('STRING', 'pebenergy'); ?>
```

## Contributing

Fork the repo and submit pull requests.

## License

Specify your license here.
