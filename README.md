# Africa in Gold Website

This website uses standard Laravel Blade pages. There is no frontend build step
required for normal content, HTML, CSS, or JavaScript changes.

## Where to edit

| Website page | File |
| --- | --- |
| Home | `resources/views/frontEnd/home.blade.php` |
| About Us | `resources/views/frontEnd/aboutUs.blade.php` |
| Programs | `resources/views/frontEnd/programs.blade.php` |
| Team | `resources/views/frontEnd/team.blade.php` |
| Impact | `resources/views/frontEnd/impact.blade.php` |
| Gallery | `resources/views/frontEnd/gallery.blade.php` |
| Contact Us | `resources/views/frontEnd/contactUs.blade.php` |
| Shared header | `resources/views/frontEnd/header.blade.php` |
| Shared footer | `resources/views/frontEnd/footer.blade.php` |
| Shared page styles/scripts | `resources/views/welcome.blade.php` |
| English text | `resources/lang/en/messages.php` |
| Swahili text | `resources/lang/sw/messages.php` |
| Images | `public/` |

Save the Blade file and refresh the browser. `npm run build` is not needed.

If Laravel ever shows an old compiled view, clear its caches:

```bash
php artisan optimize:clear
```
