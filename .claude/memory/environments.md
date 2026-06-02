# Environments

## Local
- **Server:** PHP built-in server — `php -S localhost:8000`
- **URL:** http://localhost:8000
- **Purpose:** Development and testing

## Production
- **URL:** https://xplorers.bitlab.pt
- **Host:** Hostinger Premium shared hosting
- **Deploy:** GitHub Actions + SFTP on push to `main` branch
- **Credentials:** Stored as GitHub Actions secrets (`FTP_HOST`, `FTP_USER`, `FTP_PASS`)

## GitHub
- **Repo:** https://github.com/freitasbruno/xplorers
- **Main branch:** `main`
- **Deploy trigger:** push to `main`
