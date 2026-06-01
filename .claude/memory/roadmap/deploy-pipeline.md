# Feature: Deploy Pipeline

**Slug:** `deploy-pipeline`
**Status:** pending
**Depends on:** nothing (can be set up independently)

## Goal

Push to GitHub `main` → GitHub Actions automatically deploys to Hostinger via SFTP.

## Steps to set up

1. Create GitHub repo (public or private)
2. Add GitHub Actions workflow `.github/workflows/deploy.yml`
3. Store Hostinger SFTP credentials as GitHub Secrets:
   - `FTP_HOST` — Hostinger SFTP hostname
   - `FTP_USER` — SFTP username
   - `FTP_PASS` — SFTP password
   - `FTP_PATH` — Remote path (e.g. `/public_html/`)
4. Workflow triggers on push to `main`, uses `SamKirkland/FTP-Deploy-Action`

## Workflow file

```yaml
name: Deploy to Hostinger

on:
  push:
    branches: [main]

jobs:
  deploy:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v3
      - name: Deploy via FTP
        uses: SamKirkland/FTP-Deploy-Action@v4.3.4
        with:
          server: ${{ secrets.FTP_HOST }}
          username: ${{ secrets.FTP_USER }}
          password: ${{ secrets.FTP_PASS }}
          server-dir: ${{ secrets.FTP_PATH }}
          exclude: |
            **/.git*
            **/.git*/**
            **/reference/**
            **/.claude/**
```

## Exclusions (never deploy)
- `.git/`, `.claude/` — harness and version control internals
- `reference/` — source material, not part of the app
- `admin/config.php` — already gitignored

## Notes
- Hostinger Premium supports SFTP — get credentials from hPanel → FTP Accounts
- First deploy will be a full upload; subsequent deploys are incremental (only changed files)
