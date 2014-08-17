# Slim Framework Application Skeleton

1. Clone or download this repository
2. Open composer.json in your favorite editor.
3. Replace `%package%` with your package name. Eg. `Schneenet\\Application` '''Note:''' Make sure to escape your backslashes!
4. Replace `%appname%` with your application name. Eg. `Application`
5. Create application folders: `app/models`, `app/logs`, `app/views`, `app/db` and `data`. (You may only use some of these. Use your descretion.)
6. Run `composer` to automatically download third-party libraries.
7. Build your application.

## Locations

- Eloquent models go in `app/models`, use your application's namespace with `Models` appended. Eg: `Schneenet\Application\Models`
- Logs will go to `app/logs` by default.
- A good place to store database migrations (although there is no automatic migration management) is `app/db`.
- Twig views will be loaded from `app/views` by default.
- If you have static data, or SQLite databases, the `data` folder might suit your needs.
