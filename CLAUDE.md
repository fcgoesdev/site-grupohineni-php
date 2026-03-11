# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

---

## 🎯 Project Overview

**Site Grupo Hineni** is a static HTML/PHP website for two service lines:
- **Hineni Digital** (Ingrid): Social Media Management, Content Creation, Digital Advertising
- **Hineni Cybersecurity** (Fabio): Penetration Testing, Vulnerability Analysis, Secure Web Development

Converted from React SPA to static HTML/PHP for shared hosting compatibility.

---

## 🏗️ Architecture

### Core Structure
- **7 main pages** (PHP): `index.php`, `quem-somos.php`, `hineni-digital.php`, `hineni-cybersecurity.php`, `nossos-clientes.php`, `contato.php`
- **Shared components** in `includes/`: `header.php` (navbar), `footer.php` (footer + WhatsApp button)
- **Data layer**: `clients.php` contains editable client list array
- **Form processing**: `enviar-contato.php` handles contact form submissions with email

### Design Approach
- **No database**: Data is hardcoded in PHP arrays (clients.php)
- **No build process**: Static HTML + inline CSS + CDN stylesheets
- **No JavaScript frameworks**: Vanilla JS for interactivity (filters on clients page)
- **Single header/footer**: DRY principle via PHP includes

### Color Scheme
- **Hineni Digital**: Roxo #63079C (gradient to #8B5CF6)
- **Hineni Cybersecurity**: Azul escuro #003D82 (gradient to #1A5F7A)
- All gradients defined as `.gradient-purple` and `.gradient-security` in page stylesheets

---

## 🛠️ Development Commands

### Local Development
```bash
# Start PHP development server (localhost:8000)
php -S localhost:8000

# Test in browser
# http://localhost:8000/
# http://localhost:8000/quem-somos.php
# etc.
```

### Git Workflow
```bash
# Check status
git status

# Stage and commit
git add .
git commit -m "feat: Description of changes"

# View commit history
git log --oneline

# Push to GitHub
git push
```

### Testing
- **Manual testing**: Open browser, navigate all pages, test forms
- **Email testing**: Submit contact form, check email arrives at `contato@grupohineni.com.br`
- **Responsiveness**: DevTools toggle device (F12 → Ctrl+Shift+M)
- **Performance**: Check Load Time in DevTools Network tab

---

## 📝 Key Files to Know

### Pages
| File | Purpose |
|------|---------|
| `index.php` | Homepage with service cards, statistics, CTAs |
| `quem-somos.php` | About company, team (with photo placeholders 220px 9:16), mission/vision |
| `hineni-digital.php` | Social Media services (Ingrid), 4 services, process, results |
| `hineni-cybersecurity.php` | Security services (Fabio), 4 services, 5th is Web Dev, benefits, tech stack |
| `contato.php` | Contact form, contact info, FAQs (all translated to Portuguese) |
| `nossos-clientes.php` | Client gallery with JS filters by category |

### Components
| File | Purpose |
|------|---------|
| `includes/header.php` | Navbar with navigation, logo, responsive menu |
| `includes/footer.php` | Footer links, WhatsApp button, copyright |

### Data & Config
| File | Purpose |
|------|---------|
| `clients.php` | Array of 10 clients with category, featured flag, description |
| `.htaccess` | URL rewriting, GZIP compression, cache headers |

---

## 🔧 Common Customizations

### Add/Edit Clients
Edit `clients.php` array. Categories: `marketing`, `ecommerce`, `consultoria`, `financa`, `saude`, `industrial`, `educacao`, `turismo`, `varejo`, `logistica`

```php
[
    "name" => "Company Name",
    "category" => "marketing",
    "featured" => true,  // Shows ⭐ and sorts to top
    "description" => "Project results...",
    "website" => "https://...",  // Optional
    "logo" => "CN"  // Short initials
]
```

### Change Contact Email
Edit line 62 in `enviar-contato.php`:
```php
$emailDestino = 'new-email@grupohineni.com.br';
```

### Add Team Photos
Edit `quem-somos.php` photo sections (lines ~67-70, 76-79):
```html
<img src="assets/fotos/ingrid.jpeg" alt="Ingrid" class="w-full h-full object-cover">
<img src="assets/fotos/fabio.jpeg" alt="Fabio" class="w-full h-full object-cover">
```
Format: 220px wide, 9:16 aspect ratio (portrait), JPEG

### Update Colors
Gradients defined in each page's `<style>` tag:
- `.gradient-purple` for Hineni Digital
- `.gradient-security` for Hineni Cybersecurity

---

## 🚀 Technology Stack

| Layer | Tech |
|-------|------|
| Frontend | HTML5, Tailwind CSS (CDN), Lucide Icons (CDN) |
| Backend | PHP 7.4+ |
| Database | None (hardcoded arrays) |
| Hosting | Apache + PHP (shared hosting compatible) |
| Version Control | Git + GitHub |

### External Dependencies (via CDN)
- `https://cdn.tailwindcss.com` - Utility CSS
- `https://unpkg.com/lucide@latest` - Icon library

No npm, no webpack, no compilation step.

---

## 📋 Known Constraints & Notes

### Important
- **No "Automação" references**: All mentions replaced with "Cybersecurity"
- **Blog removed**: Not included per requirements
- **Email handling**: Currently uses PHP `mail()` - may need SMTP config for production
- **Two people**: Ingrid (Digital/Social Media), Fabio (Cybersecurity/Web Dev)

### Naming
- File routing uses `.php` extension visible in URL (e.g., `/contato.php`)
- `.htaccess` supports URL rewriting if mod_rewrite is enabled on server

### Security
- Form validation on server side (PHP)
- Input sanitization with `htmlspecialchars()`
- Email header injection protection
- `.htaccess` prevents direct access to includes/

---

## 📚 Related Documentation

- **README.md**: Installation, data editing, customization, SEO, performance
- **DEPLOYMENT.md**: Server requirements, upload methods, Apache config, troubleshooting
- **TESTE_LOCAL.md**: How to run locally, browser testing, compatibility checks
- **CHECKLIST_VERIFICACAO.md**: Full checklist of all implemented features

---

## 🔄 Typical Workflow

1. **Local changes**: Edit `.php` files in VS Code
2. **Test locally**: `php -S localhost:8000` → refresh browser (F5)
3. **Verify**: Check navigation, forms, responsiveness
4. **Commit**: `git add . && git commit -m "..."`
5. **Push**: `git push` → syncs to GitHub

---

## 🎯 Next Steps / Open Tasks

1. **Email Production**: Configure SMTP when deploying to server
2. **SEO**: Add meta tags, Open Graph, structured data
3. **Deploy**: Choose hosting, upload, enable HTTPS
4. **Testing**: Multi-browser and device testing before launch
5. **Enhancements** (future): Newsletter, blog, booking system, live chat

---

## 📞 Project Contacts

- **Email**: contato@grupohineni.com.br
- **WhatsApp**: +55 43 9 9113-2227
- **GitHub**: https://github.com/fcgoesdev/site-grupohineni-php

---

**Last Updated**: March 11, 2026
**Maintainers**: Fabio (Dev), Ingrid (Content)
