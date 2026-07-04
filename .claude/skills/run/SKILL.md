---
name: run
description: Serve and smoke-test this static portfolio site locally. Use when asked to run, start, preview, or verify the site works after a change (especially dependency/vendor-file upgrades).
---

# Running this site

This is a static, no-build site. There is no dev server process to manage, just a file server.

## Serve it

```bash
python3 -m http.server 8000
```

Open http://localhost:8000. Stop with `Ctrl+C`.

To test the contact form end-to-end (it posts to `mail.php` via AJAX and needs a PHP runtime), serve with PHP instead:

```bash
php -S localhost:8000
```

## Smoke-test checklist

Open the browser console (would show JS errors) and check:

1. **No console errors** on load or reload.
2. **Preloader** (`#preloader`) fades out shortly after load instead of staying stuck.
3. **Portfolio filter** (Isotope): in the Portfolio section, click a filter category, items should animate/filter.
4. **Scroll animations** (WOW.js): scroll through About/Portfolio/Education, elements should fade/slide in as they enter the viewport.
5. **Hero typed text** (Typed.js): the Home heading should type out and loop between strings.
6. **Lightbox** (Magnific Popup): clicking a portfolio thumbnail should open a popup that can be closed.
7. **Nav smooth-scroll**: clicking a nav link smooth-scrolls to that section and updates the active nav highlight while scrolling.
8. **Mobile menu**: at mobile width, the hamburger icon toggles the nav menu.
9. **Contact form** (only with the PHP server): submitting should hit `mail.php` via AJAX with no console errors.

This checklist matters most after upgrading any vendored library in `js/`/`css/` (jQuery, Bootstrap, Isotope, WOW.js, Typed.js, Magnific Popup, etc.), since a major-version bump can silently break the plugins that depend on it.
