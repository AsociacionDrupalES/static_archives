# AED Static archives

The repo contains static archives of past events. The Drupal sites were made into static HTML files and stored in folders.

This is hosted at Amazee on project aed-static-sites.

## Steps to add a site

1. Generate static html.
```
cd sites
wget -mpEk https://2026.drupaliberia.eu
```
2. Add the domain in `.lagoon.yml` file.
3. Commit, push. Ensure it is correctly deployed at https://dashboard.amazeeio.cloud/projects/aed-static-sites/aed-static-sites-main/deployments.
4. Update dns entry to `CNAME nginx.main.aed-static-sites.de3.amazee.io`.
5. Backup old code, files and database.
6. Clean up old hosting environment.
