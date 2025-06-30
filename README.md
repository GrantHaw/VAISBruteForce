# Brute-Force Demo Site 🔐

A **two-page web app** that lets students experience manual vs. automated password-guessing in a safe, isolated lab.  
*Landing page* (`index.html`) collects a password; *checker script* (`check.php`) validates it server-side.  
Perfect for Day 4 of an ethical-hacking camp or any quick phishing/bruteforce demo.

---

## ✨ What’s Inside
| File/Folder | Purpose |
|-------------|---------|
| `index.html` | Minimal UI + JS fetch to `check.php`, shows *Incorrect* or *Password accepted!* |
| `check.php` | PHP script with a **one-line secret**. Edit `$SECRET` to change the password. |
| `.github/workflows/deploy.yml` | Zip-deploy workflow for Azure App Service using a publish-profile secret. |

---

## 🚀 Quick Start

```bash
# clone your repo
git clone https://github.com/<you>/bruteforce-demo.git
cd bruteforce-demo

# run locally (PHP 8+ required)
php -S 127.0.0.1:8000
# visit http://127.0.0.1:8000 in a browser
