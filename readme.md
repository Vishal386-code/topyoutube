
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
