# Render Database Settings

Use these values from your Render PostgreSQL instance:

- Host: `dpg-d740n7k50q8c73b57c40-a`
- Port: `5432`
- Database: `laravel_7i26`
- Username: `laravel_7i26_user`

Set the password only in Render environment variables (do not commit it to git):

- `DB_PASSWORD=<your-render-db-password>`

Recommended app env vars on Render:

- `DB_CONNECTION=pgsql`
- `DB_HOST=dpg-d740n7k50q8c73b57c40-a`
- `DB_PORT=5432`
- `DB_DATABASE=laravel_7i26`
- `DB_USERNAME=laravel_7i26_user`
- `DB_PASSWORD=<your-render-db-password>`

Optional single URL approach:

- `DATABASE_URL=postgresql://laravel_7i26_user:<url-encoded-password>@dpg-d740n7k50q8c73b57c40-a/laravel_7i26`
