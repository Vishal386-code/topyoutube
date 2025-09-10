# TopYouTube  

TopYouTube is a PHP-based web application that showcases trending YouTube videos by category, region, and search. It features a modern UI, cron jobs for fetching YouTube data, filters, and daily updated video rankings.  

---

## Features  

- Cron jobs to fetch trending YouTube videos and categories  
- Database-driven video listing (MySQL)  
- Category and region filters  
- Search with live suggestions (AJAX)  
- Responsive navbar with Bootstrap 5  
- Hero section and ad zones  
- Newsletter subscription form  
- SEO-friendly URLs with `.htaccess`  
- SMTP support for Contact Us form  

---

## Folder Structure  

### Root Directory  
- `/cron/` → Cron jobs for fetching YouTube data  
- `/includes/` → Core PHP includes (db, header, footer, video logic)  
- `/pages/` → Static and dynamic pages (About, Contact, Search, etc.)  
- `/public/` → Public assets (css, js, images, fonts)  
- `/vendor/` → Composer dependencies (PHPMailer for SMTP)  
- `.env` → Environment variables (API keys, DB, SMTP)  
- `.htaccess` → URL rewriting rules  
- `index.php` → Homepage (Trending videos)  
- `readme.md` → Project documentation  
- `robots.txt` → SEO robots config  

---

### `cron/` (YouTube data fetchers)  
- `fetch_youtube_videos.php` → Fetch latest trending YouTube videos  
- `youtube_category_cron.php` → Fetch YouTube categories (daily update)  

---

### `includes/` (Reusable components)  
- `config.php` → Loads environment config  
- `db.php` → Database connection  
- `dropdown.php` → Category/region dropdown logic  
- `filters.php` → Video filters (category/region)  
- `footer.php` → Footer include  
- `header.php` → Header include  
- `load_search_videos.php` → AJAX loader for search videos  
- `load_videos.php` → AJAX loader for videos  
- `navigation.php` → Navbar include  
- `search_suggestions.php` → AJAX live search suggestions  
- `video-card.php` → Single video card template  
- `youtube_category.php` → Fetch videos by category  
- `youtube_videos.php` → Fetch videos (homepage, AJAX)  

---

### `pages/` (Static pages)  
- `404.php` → Custom error page  
- `aboutus.php` → About Us  
- `affiliate-disclosure.php` → Affiliate Disclosure  
- `contactus.php` → Contact form (SMTP via PHPMailer)  
- `privacy-policy.php` → Privacy Policy  
- `search.php` → Search page  
- `terms-of-use.php` → Terms of Use  

---

### `public/`  
- `assets/css/` → Stylesheets (Bootstrap, custom styles)  
- `assets/js/` → JS scripts (Bootstrap, custom)  
- `assets/images/` → Logo, favicon, etc.  
- `assets/fonts/` → Web fonts  

---

### `vendor/`  
- Used for **SMTP (PHPMailer)** and future Composer dependencies.  

---

## Getting Started  

1. Clone or download this repository.  
2. Set up your database and import schema.  
3. Configure `.env` with:  
   - MySQL credentials  
   - YouTube API key  
   - SMTP details  
4. Run cron jobs (`cron/fetch_youtube_videos.php` and `cron/youtube_category_cron.php`) using cPanel or system cron.  
5. Open `index.php` in your browser to view the homepage.  

---

## Customization  

- Update styles in `public/assets/css/style.css`.  
- Replace logo and favicon in `public/assets/images/`.  
- Edit header/footer in `includes/`.  
- Add new static pages under `pages/`.  

---

## Credits  

- [Bootstrap 5](https://getbootstrap.com/)  
- [Bootstrap Icons](https://icons.getbootstrap.com/)  
- [PHPMailer](https://github.com/PHPMailer/PHPMailer)  
- [FlagCDN](https://flagcdn.com/) for country flags  
- YouTube thumbnails (via YouTube API)  

---

© 2025 TopYouTube. All rights reserved.  
