# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project overview

This is a static one-page personal portfolio site for Gimantha Dissanayake, hosted on GitHub Pages (`gimanthadissanayake.github.io`). It is a classic pre-bundler jQuery/Bootstrap template site: there is no build step, package manager, bundler, or test suite. Files are served as-is.

## Development workflow

There is no build/lint/test tooling in this repo. To work on the site:

- Open `index.html` directly in a browser, or serve the directory with any static file server (e.g. `python3 -m http.server`) to test relative asset paths and the AJAX contact form.
- Changes are deployed automatically by GitHub Pages whenever `master` is pushed — there is no separate deploy step.
- The contact form posts to `mail.php` via AJAX (see `js/main.js`), which requires a PHP-capable host (e.g. `php -S localhost:8000`) to test end-to-end; it will not work on GitHub Pages itself or a plain static server.

## Architecture

- **`index.html`**: the entire site. It's a single page split into anchor-linked sections (`#home`, `#about`, `#portfolio`, `#education`, `#contact`), navigated via smooth-scroll rather than separate routes/pages. All content edits (bio, portfolio items, education entries) happen directly in this file.
- **`css/`**: vendored third-party stylesheets (Bootstrap, animate.css, owl.carousel, magnific-popup, superslides, essential-icons, reset) plus `style.css`, the site's own overrides/customizations. When changing visual styling, edit `style.css`; treat the other files as vendored dependencies.
- **`js/`**: vendored plugin scripts (jQuery, Bootstrap, isotope, owl.carousel, superslides, magnific-popup, wow.js, typed.js, smoothscroll, YTPlayer) plus `main.js`, which wires all of them together: portfolio filtering (isotope), the sliding nav/scrollspy behavior, the owl carousel, and the contact form's AJAX submission/validation. Site-specific behavior changes belong in `main.js`; the rest are unmodified third-party libraries.
- **`mail.php`**: backend handler for the contact form. Reads `con_name`/`con_email`/`con_message` POST fields and sends an email via PHP's `mail()`. Requires a PHP runtime; not used by GitHub Pages hosting itself (form testing needs a separate PHP-enabled host).
- **`images/`, `icon-fonts/`, `favicon.ico`**: static assets referenced from `index.html`/`style.css`.
- **`sitemap.xml`**, **`google91f2259391f6d791.html`**: SEO/Search Console artifacts; the latter is a Google site-verification file and must keep its exact filename/content.

## Writing style

- Never use an em dash (—) in prose, commit messages, or documentation written for this repo. Use a comma, colon, semicolon, or a separate sentence instead.

## Notes

- Because this is a vendored template, prefer minimal, targeted edits in `index.html`, `style.css`, and `main.js` over restructuring. The CSS/JS vendor files are third-party and shouldn't be modified.
- There are no npm/composer manifests; don't introduce a build step or package manager unless explicitly asked.
