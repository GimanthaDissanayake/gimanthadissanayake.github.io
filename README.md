# gimanthadissanayake.github.io

Personal portfolio site for Gimantha Dissanayake, a software developer passionate about web development. Live at [gimanthadissanayake.github.io](https://gimanthadissanayake.github.io/).

## About

A single-page site covering:

- **Home**: intro
- **About**: bio and programming languages, frameworks, and tools
- **Portfolio**: project showcase
- **Education**: academic background
- **Contact**: a contact form

## Tech stack

Static HTML/CSS/JS built on the classic Bootstrap + jQuery template stack, with no build tools, bundlers, or package managers involved. Notable libraries used: Bootstrap, jQuery, Isotope (portfolio filtering), Owl Carousel, Magnific Popup, Superslides, WOW.js, and Typed.js.

The contact form (`mail.php`) is a PHP script that emails submissions using PHP's `mail()` function.

## Running locally

Since this is a static site, you can open `index.html` directly in a browser, or serve the directory with any static file server, e.g.:

```bash
python3 -m http.server
```

To test the contact form end-to-end, serve the site with a PHP-capable server instead, e.g.:

```bash
php -S localhost:8000
```

## Deployment

The site is hosted on GitHub Pages and deploys automatically from the `master` branch.
