<!-- Header File include -->
<?php include "includes/header.php"; ?>
<!-- Navigation File include -->
<?php include "includes/navigation.php"; ?>
<?php include 'includes/db.php'; ?>
<!-- Hero Section - Smaller -->
    <section class="hero">
      <div class="hero-content">
        <h1 class="hero-title">Discover Trending Videos</h1>
        <p class="hero-subtitle mb-0">
          Top rankings by category, region, and more – updated daily.
        </p>
      </div>
    </section>

    <section class="filters">
  <div class="container-fluid px-md-5 d-flex flex-nowrap justify-content-xl-center">
    <?php
    try {
        // Assume $pdo is your PDO connection object included before this section
        $stmt = $pdo->query("SELECT title FROM youtube_categories");
        $categories = $stmt->fetchAll();

        // Bootstrap icon mapping by category title (default icon = bi-tag)
        $icon_map = [
            'Film & Animation'      => 'bi-camera-video',
            'Autos & Vehicles'      => 'bi-truck',          // nearest icon
            'Music'                 => 'bi-music-note-beamed',
            'Pets & Animals'        => 'bi-paw',
            'Sports'                => 'bi-trophy',
            'Travel & Events'       => 'bi-airplane',
            'Gaming'                => 'bi-joystick',
            'People & Blogs'        => 'bi-person',
            'Comedy'                => 'bi-emoji-smile',
            'Entertainment'         => 'bi-film',
            'News & Politics'       => 'bi-newspaper',
            'Howto & Style'         => 'bi-paint-bucket',   // closest approximation
            'Education'             => 'bi-book',
            'Science & Technology'  => 'bi-cpu',
            'Short Movies'          => 'bi-film',
            'Videoblogging'         => 'bi-camera-reels',   // close to video blog
            'News'                  => 'bi-newspaper',
            'Autos'                 => 'bi-truck',
            'Film'                  => 'bi-camera-video',
            'Animation'             => 'bi-film',
            'Comedy'                => 'bi-emoji-smile',
            'Entertainment'         => 'bi-film',
            'Politics'              => 'bi-megaphone',      // closest icon
            'Howto'                 => 'bi-lightning-charge',
            'Style'                 => 'bi-paint-bucket',
            'Education'             => 'bi-journal-bookmark',
            'Science'               => 'bi-beaker',
            'Technology'            => 'bi-cpu',
            'Movies'                => 'bi-film',
            'Anime/Animation'       => 'bi-film',
            'Action/Adventure'      => 'bi-controller',     // closest icon for gaming
            'Classics'              => 'bi-bookmarks',
            'Documentary'           => 'bi-journal-text',
            'Drama'                 => 'bi-play-btn',
            'Family'                => 'bi-people',
            'Foreign'               => 'bi-globe',
            'Horror'                => 'bi-emoji-frown',
            'Sci-Fi/Fantasy'        => 'bi-stars',
            'Thriller'              => 'bi-exclamation-triangle',
            'Shorts'                => 'bi-collection-play',
            'Shows'                 => 'bi-tv',
            'Trailers'              => 'bi-film',
            // Default fallback handled by code with 'bi-tag'
        ];


        $first = true;  // Track first for adding 'active' class

        foreach ($categories as $category) {
            $title = htmlspecialchars($category['title']);
            $icon_class = $icon_map[$title] ?? 'bi-tag'; // default icon if no match
            $active_class = $first ? ' active' : '';
            $first = false;

            echo "<a href='/pages/search.html' class='btn filter-chip$active_class'>";
            echo "<i class='bi $icon_class me-1'></i>$title";
            echo "</a>";
        }
    } catch (Exception $e) {
        echo "<!-- Could not load categories -->";
        // Optionally log $e->getMessage();
    }
    ?>
  </div>
</section>


    <!-- Ad Zone (shifted up, before trending) -->
    <section class="ad-zone">
      <div class="container-fluid px-md-5">
        <div class="ad-placeholder">
          <i
            class="bi bi-badge-ad fa-2x mb-3"
            style="color: var(--primary)"
          ></i>
          <p>Ad Space for Google AdSense or Affiliates</p>
        </div>
      </div>
    </section>

    <!-- Trending Section -->
    <section class="section">
      <div class="container-fluid px-md-5">
        <h2 class="section-title">Trending Now</h2>
        <div class="video-grid">
          <div class="video-card">
            <div class="thumbnail-container">
              <img
                src="https://i.ytimg.com/vi/ysz5S6PUM-U/hqdefault.jpg"
                alt="Thumbnail"
                class="thumbnail"
                loading="lazy"
              />
              <span class="video-duration">10:23</span>
            </div>
            <div class="video-details">
              <h5 class="video-title">AI Breakthroughs 2025</h5>
              <div class="video-meta">
                <div class="meta-header">
                  <span class="channel-name"
                    ><i class="bi bi-person"></i> TechHub</span
                  >
                  <span class="published-at"
                    ><i class="bi bi-calendar-event"></i> 2025-08-26</span
                  >
                </div>
                <div class="meta-stats">
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Views"
                    ><i class="bi bi-eye"></i> 2.1M</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Likes"
                    ><i class="bi bi-hand-thumbs-up"></i> 13K</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Comments"
                    ><i class="bi bi-chat-left-text"></i> 371</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Favorites"
                    ><i class="bi bi-star-fill"></i> 45</span
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="video-card">
            <div class="thumbnail-container">
              <img
                src="https://i.ytimg.com/vi/3fumBcKC6RE/hqdefault.jpg"
                alt="Thumbnail"
                class="thumbnail"
                loading="lazy"
              />
              <span class="video-duration">8:45</span>
            </div>
            <div class="video-details">
              <h5 class="video-title">Epic Drone Shots</h5>
              <div class="video-meta">
                <div class="meta-header">
                  <span class="channel-name"
                    ><i class="bi bi-person"></i> SkyView</span
                  >
                  <span class="published-at"
                    ><i class="bi bi-calendar-event"></i> 2025-08-25</span
                  >
                </div>
                <div class="meta-stats">
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Views"
                    ><i class="bi bi-eye"></i> 1.8M</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Likes"
                    ><i class="bi bi-hand-thumbs-up"></i> 11K</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Comments"
                    ><i class="bi bi-chat-left-text"></i> 290</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Favorites"
                    ><i class="bi bi-star-fill"></i> 32</span
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="video-card">
            <div class="thumbnail-container">
              <img
                src="https://i.ytimg.com/vi/ScMzIvxBSi4/hqdefault.jpg"
                alt="Thumbnail"
                class="thumbnail"
                loading="lazy"
              />
              <span class="video-duration">12:10</span>
            </div>
            <div class="video-details">
              <h5 class="video-title">Cooking with AI</h5>
              <div class="video-meta">
                <div class="meta-header">
                  <span class="channel-name"
                    ><i class="bi bi-person"></i> FoodBot</span
                  >
                  <span class="published-at"
                    ><i class="bi bi-calendar-event"></i> 2025-08-24</span
                  >
                </div>
                <div class="meta-stats">
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Views"
                    ><i class="bi bi-eye"></i> 1.2M</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Likes"
                    ><i class="bi bi-hand-thumbs-up"></i> 8K</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Comments"
                    ><i class="bi bi-chat-left-text"></i> 210</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Favorites"
                    ><i class="bi bi-star-fill"></i> 21</span
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="video-card">
            <div class="thumbnail-container">
              <img
                src="https://i.ytimg.com/vi/2Vv-BfVoq4g/hqdefault.jpg"
                alt="Thumbnail"
                class="thumbnail"
                loading="lazy"
              />
              <span class="video-duration">5:32</span>
            </div>
            <div class="video-details">
              <h5 class="video-title">Music Trends 2025</h5>
              <div class="video-meta">
                <div class="meta-header">
                  <span class="channel-name"
                    ><i class="bi bi-person"></i> MusicNow</span
                  >
                  <span class="published-at"
                    ><i class="bi bi-calendar-event"></i> 2025-08-23</span
                  >
                </div>
                <div class="meta-stats">
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Views"
                    ><i class="bi bi-eye"></i> 3.2M</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Likes"
                    ><i class="bi bi-hand-thumbs-up"></i> 25K</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Comments"
                    ><i class="bi bi-chat-left-text"></i> 800</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Favorites"
                    ><i class="bi bi-star-fill"></i> 60</span
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="video-card">
            <div class="thumbnail-container">
              <img
                src="https://i.ytimg.com/vi/JGwWNGJdvx8/hqdefault.jpg"
                alt="Thumbnail"
                class="thumbnail"
                loading="lazy"
              />
              <span class="video-duration">9:01</span>
            </div>
            <div class="video-details">
              <h5 class="video-title">Travel Vlog: Japan</h5>
              <div class="video-meta">
                <div class="meta-header">
                  <span class="channel-name"
                    ><i class="bi bi-person"></i> Wanderlust</span
                  >
                  <span class="published-at"
                    ><i class="bi bi-calendar-event"></i> 2025-08-22</span
                  >
                </div>
                <div class="meta-stats">
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Views"
                    ><i class="bi bi-eye"></i> 2.7M</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Likes"
                    ><i class="bi bi-hand-thumbs-up"></i> 19K</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Comments"
                    ><i class="bi bi-chat-left-text"></i> 650</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Favorites"
                    ><i class="bi bi-star-fill"></i> 55</span
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="video-card">
            <div class="thumbnail-container">
              <img
                src="https://i.ytimg.com/vi/9bZkp7q19f0/hqdefault.jpg"
                alt="Thumbnail"
                class="thumbnail"
                loading="lazy"
              />
              <span class="video-duration">4:13</span>
            </div>
            <div class="video-details">
              <h5 class="video-title">Gangnam Style Rewind</h5>
              <div class="video-meta">
                <div class="meta-header">
                  <span class="channel-name"
                    ><i class="bi bi-person"></i> KPopWorld</span
                  >
                  <span class="published-at"
                    ><i class="bi bi-calendar-event"></i> 2025-08-21</span
                  >
                </div>
                <div class="meta-stats">
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Views"
                    ><i class="bi bi-eye"></i> 4.1M</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Likes"
                    ><i class="bi bi-hand-thumbs-up"></i> 30K</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Comments"
                    ><i class="bi bi-chat-left-text"></i> 1.2K</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Favorites"
                    ><i class="bi bi-star-fill"></i> 80</span
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="video-card">
            <div class="thumbnail-container">
              <img
                src="https://i.ytimg.com/vi/tAGnKpE4NCI/hqdefault.jpg"
                alt="Thumbnail"
                class="thumbnail"
                loading="lazy"
              />
              <span class="video-duration">6:55</span>
            </div>
            <div class="video-details">
              <h5 class="video-title">Classic Rock Revival</h5>
              <div class="video-meta">
                <div class="meta-header">
                  <span class="channel-name"
                    ><i class="bi bi-person"></i> RockLegends</span
                  >
                  <span class="published-at"
                    ><i class="bi bi-calendar-event"></i> 2025-08-20</span
                  >
                </div>
                <div class="meta-stats">
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Views"
                    ><i class="bi bi-eye"></i> 2.9M</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Likes"
                    ><i class="bi bi-hand-thumbs-up"></i> 17K</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Comments"
                    ><i class="bi bi-chat-left-text"></i> 540</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Favorites"
                    ><i class="bi bi-star-fill"></i> 40</span
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="video-card">
            <div class="thumbnail-container">
              <img
                src="https://i.ytimg.com/vi/LsoLEjrDogU/hqdefault.jpg"
                alt="Thumbnail"
                class="thumbnail"
                loading="lazy"
              />
              <span class="video-duration">7:20</span>
            </div>
            <div class="video-details">
              <h5 class="video-title">Dance Moves 2025</h5>
              <div class="video-meta">
                <div class="meta-header">
                  <span class="channel-name"
                    ><i class="bi bi-person"></i> DanceCrew</span
                  >
                  <span class="published-at"
                    ><i class="bi bi-calendar-event"></i> 2025-08-19</span
                  >
                </div>
                <div class="meta-stats">
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Views"
                    ><i class="bi bi-eye"></i> 1.5M</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Likes"
                    ><i class="bi bi-hand-thumbs-up"></i> 9K</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Comments"
                    ><i class="bi bi-chat-left-text"></i> 320</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Favorites"
                    ><i class="bi bi-star-fill"></i> 22</span
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="video-card">
            <div class="thumbnail-container">
              <img
                src="https://i.ytimg.com/vi/60ItHLz5WEA/hqdefault.jpg"
                alt="Thumbnail"
                class="thumbnail"
                loading="lazy"
              />
              <span class="video-duration">3:58</span>
            </div>
            <div class="video-details">
              <h5 class="video-title">EDM Party Hits</h5>
              <div class="video-meta">
                <div class="meta-header">
                  <span class="channel-name"
                    ><i class="bi bi-person"></i> EDMNation</span
                  >
                  <span class="published-at"
                    ><i class="bi bi-calendar-event"></i> 2025-08-18</span
                  >
                </div>
                <div class="meta-stats">
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Views"
                    ><i class="bi bi-eye"></i> 2.3M</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Likes"
                    ><i class="bi bi-hand-thumbs-up"></i> 15K</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Comments"
                    ><i class="bi bi-chat-left-text"></i> 410</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Favorites"
                    ><i class="bi bi-star-fill"></i> 35</span
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="video-card">
            <div class="thumbnail-container">
              <img
                src="https://i.ytimg.com/vi/OPf0YbXqDm0/hqdefault.jpg"
                alt="Thumbnail"
                class="thumbnail"
                loading="lazy"
              />
              <span class="video-duration">4:30</span>
            </div>
            <div class="video-details">
              <h5 class="video-title">Uptown Funk Again</h5>
              <div class="video-meta">
                <div class="meta-header">
                  <span class="channel-name"
                    ><i class="bi bi-person"></i> BrunoMarsVEVO</span
                  >
                  <span class="published-at"
                    ><i class="bi bi-calendar-event"></i> 2025-08-17</span
                  >
                </div>
                <div class="meta-stats">
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Views"
                    ><i class="bi bi-eye"></i> 3.5M</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Likes"
                    ><i class="bi bi-hand-thumbs-up"></i> 28K</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Comments"
                    ><i class="bi bi-chat-left-text"></i> 1.1K</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Favorites"
                    ><i class="bi bi-star-fill"></i> 70</span
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="video-card">
            <div class="thumbnail-container">
              <img
                src="https://i.ytimg.com/vi/09R8_2nJtjg/hqdefault.jpg"
                alt="Thumbnail"
                class="thumbnail"
                loading="lazy"
              />
              <span class="video-duration">5:12</span>
            </div>
            <div class="video-details">
              <h5 class="video-title">Sugar Rush</h5>
              <div class="video-meta">
                <div class="meta-header">
                  <span class="channel-name"
                    ><i class="bi bi-person"></i> Maroon5VEVO</span
                  >
                  <span class="published-at"
                    ><i class="bi bi-calendar-event"></i> 2025-08-16</span
                  >
                </div>
                <div class="meta-stats">
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Views"
                    ><i class="bi bi-eye"></i> 2.6M</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Likes"
                    ><i class="bi bi-hand-thumbs-up"></i> 21K</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Comments"
                    ><i class="bi bi-chat-left-text"></i> 900</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Favorites"
                    ><i class="bi bi-star-fill"></i> 50</span
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="video-card">
            <div class="thumbnail-container">
              <img
                src="https://i.ytimg.com/vi/2vjPBrBU-TM/hqdefault.jpg"
                alt="Thumbnail"
                class="thumbnail"
                loading="lazy"
              />
              <span class="video-duration">6:40</span>
            </div>
            <div class="video-details">
              <h5 class="video-title">Chandelier Cover</h5>
              <div class="video-meta">
                <div class="meta-header">
                  <span class="channel-name"
                    ><i class="bi bi-person"></i> SiaOfficial</span
                  >
                  <span class="published-at"
                    ><i class="bi bi-calendar-event"></i> 2025-08-15</span
                  >
                </div>
                <div class="meta-stats">
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Views"
                    ><i class="bi bi-eye"></i> 1.9M</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Likes"
                    ><i class="bi bi-hand-thumbs-up"></i> 13K</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Comments"
                    ><i class="bi bi-chat-left-text"></i> 410</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Favorites"
                    ><i class="bi bi-star-fill"></i> 28</span
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="video-card">
            <div class="thumbnail-container">
              <img
                src="https://i.ytimg.com/vi/uelHwf8o7_U/hqdefault.jpg"
                alt="Thumbnail"
                class="thumbnail"
                loading="lazy"
              />
              <span class="video-duration">7:15</span>
            </div>
            <div class="video-details">
              <h5 class="video-title">Love The Way You Lie</h5>
              <div class="video-meta">
                <div class="meta-header">
                  <span class="channel-name"
                    ><i class="bi bi-person"></i> EminemVEVO</span
                  >
                  <span class="published-at"
                    ><i class="bi bi-calendar-event"></i> 2025-08-14</span
                  >
                </div>
                <div class="meta-stats">
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Views"
                    ><i class="bi bi-eye"></i> 3.1M</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Likes"
                    ><i class="bi bi-hand-thumbs-up"></i> 27K</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Comments"
                    ><i class="bi bi-chat-left-text"></i> 1.3K</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Favorites"
                    ><i class="bi bi-star-fill"></i> 75</span
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="video-card">
            <div class="thumbnail-container">
              <img
                src="https://i.ytimg.com/vi/SlPhMPnQ58k/hqdefault.jpg"
                alt="Thumbnail"
                class="thumbnail"
                loading="lazy"
              />
              <span class="video-duration">4:50</span>
            </div>
            <div class="video-details">
              <h5 class="video-title">Counting Stars</h5>
              <div class="video-meta">
                <div class="meta-header">
                  <span class="channel-name"
                    ><i class="bi bi-person"></i> OneRepublicVEVO</span
                  >
                  <span class="published-at"
                    ><i class="bi bi-calendar-event"></i> 2025-08-13</span
                  >
                </div>
                <div class="meta-stats">
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Views"
                    ><i class="bi bi-eye"></i> 2.8M</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Likes"
                    ><i class="bi bi-hand-thumbs-up"></i> 18K</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Comments"
                    ><i class="bi bi-chat-left-text"></i> 700</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Favorites"
                    ><i class="bi bi-star-fill"></i> 42</span
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="video-card">
            <div class="thumbnail-container">
              <img
                src="https://i.ytimg.com/vi/09R8_2nJtjg/hqdefault.jpg"
                alt="Thumbnail"
                class="thumbnail"
                loading="lazy"
              />
              <span class="video-duration">5:12</span>
            </div>
            <div class="video-details">
              <h5 class="video-title">Sugar Rush</h5>
              <div class="video-meta">
                <div class="meta-header">
                  <span class="channel-name"
                    ><i class="bi bi-person"></i> Maroon5VEVO</span
                  >
                  <span class="published-at"
                    ><i class="bi bi-calendar-event"></i> 2025-08-12</span
                  >
                </div>
                <div class="meta-stats">
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Views"
                    ><i class="bi bi-eye"></i> 2.6M</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Likes"
                    ><i class="bi bi-hand-thumbs-up"></i> 21K</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Comments"
                    ><i class="bi bi-chat-left-text"></i> 900</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Favorites"
                    ><i class="bi bi-star-fill"></i> 50</span
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="video-card">
            <div class="thumbnail-container">
              <img
                src="https://i.ytimg.com/vi/3JZ_D3ELwOQ/hqdefault.jpg"
                alt="Thumbnail"
                class="thumbnail"
                loading="lazy"
              />
              <span class="video-duration">3:45</span>
            </div>
            <div class="video-details">
              <h5 class="video-title">See You Again</h5>
              <div class="video-meta">
                <div class="meta-header">
                  <span class="channel-name"
                    ><i class="bi bi-person"></i> WizKhalifaVEVO</span
                  >
                  <span class="published-at"
                    ><i class="bi bi-calendar-event"></i> 2025-08-11</span
                  >
                </div>
                <div class="meta-stats">
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Views"
                    ><i class="bi bi-eye"></i> 4.0M</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Likes"
                    ><i class="bi bi-hand-thumbs-up"></i> 35K</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Comments"
                    ><i class="bi bi-chat-left-text"></i> 1.5K</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Favorites"
                    ><i class="bi bi-star-fill"></i> 90</span
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="video-card">
            <div class="thumbnail-container">
              <img
                src="https://i.ytimg.com/vi/2Vv-BfVoq4g/hqdefault.jpg"
                alt="Thumbnail"
                class="thumbnail"
                loading="lazy"
              />
              <span class="video-duration">5:32</span>
            </div>
            <div class="video-details">
              <h5 class="video-title">Music Trends 2025</h5>
              <div class="video-meta">
                <div class="meta-header">
                  <span class="channel-name"
                    ><i class="bi bi-person"></i> MusicNow</span
                  >
                  <span class="published-at"
                    ><i class="bi bi-calendar-event"></i> 2025-08-10</span
                  >
                </div>
                <div class="meta-stats">
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Views"
                    ><i class="bi bi-eye"></i> 3.2M</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Likes"
                    ><i class="bi bi-hand-thumbs-up"></i> 25K</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Comments"
                    ><i class="bi bi-chat-left-text"></i> 800</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Favorites"
                    ><i class="bi bi-star-fill"></i> 60</span
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="video-card">
            <div class="thumbnail-container">
              <img
                src="https://i.ytimg.com/vi/OPf0YbXqDm0/hqdefault.jpg"
                alt="Thumbnail"
                class="thumbnail"
                loading="lazy"
              />
              <span class="video-duration">4:30</span>
            </div>
            <div class="video-details">
              <h5 class="video-title">Uptown Funk Again</h5>
              <div class="video-meta">
                <div class="meta-header">
                  <span class="channel-name"
                    ><i class="bi bi-person"></i> BrunoMarsVEVO</span
                  >
                  <span class="published-at"
                    ><i class="bi bi-calendar-event"></i> 2025-08-09</span
                  >
                </div>
                <div class="meta-stats">
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Views"
                    ><i class="bi bi-eye"></i> 3.5M</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Likes"
                    ><i class="bi bi-hand-thumbs-up"></i> 28K</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Comments"
                    ><i class="bi bi-chat-left-text"></i> 1.1K</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Favorites"
                    ><i class="bi bi-star-fill"></i> 70</span
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="video-card">
            <div class="thumbnail-container">
              <img
                src="https://i.ytimg.com/vi/SlPhMPnQ58k/hqdefault.jpg"
                alt="Thumbnail"
                class="thumbnail"
                loading="lazy"
              />
              <span class="video-duration">4:50</span>
            </div>
            <div class="video-details">
              <h5 class="video-title">Counting Stars</h5>
              <div class="video-meta">
                <div class="meta-header">
                  <span class="channel-name"
                    ><i class="bi bi-person"></i> OneRepublicVEVO</span
                  >
                  <span class="published-at"
                    ><i class="bi bi-calendar-event"></i> 2025-08-08</span
                  >
                </div>
                <div class="meta-stats">
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Views"
                    ><i class="bi bi-eye"></i> 2.8M</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Likes"
                    ><i class="bi bi-hand-thumbs-up"></i> 18K</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Comments"
                    ><i class="bi bi-chat-left-text"></i> 700</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Favorites"
                    ><i class="bi bi-star-fill"></i> 42</span
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="video-card">
            <div class="thumbnail-container">
              <img
                src="https://i.ytimg.com/vi/uelHwf8o7_U/hqdefault.jpg"
                alt="Thumbnail"
                class="thumbnail"
                loading="lazy"
              />
              <span class="video-duration">7:15</span>
            </div>
            <div class="video-details">
              <h5 class="video-title">Love The Way You Lie</h5>
              <div class="video-meta">
                <div class="meta-header">
                  <span class="channel-name"
                    ><i class="bi bi-person"></i> EminemVEVO</span
                  >
                  <span class="published-at"
                    ><i class="bi bi-calendar-event"></i> 2025-08-07</span
                  >
                </div>
                <div class="meta-stats">
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Views"
                    ><i class="bi bi-eye"></i> 3.1M</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Likes"
                    ><i class="bi bi-hand-thumbs-up"></i> 27K</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Comments"
                    ><i class="bi bi-chat-left-text"></i> 1.3K</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Favorites"
                    ><i class="bi bi-star-fill"></i> 75</span
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="video-card">
            <div class="thumbnail-container">
              <img
                src="https://i.ytimg.com/vi/3fumBcKC6RE/hqdefault.jpg"
                alt="Thumbnail"
                class="thumbnail"
                loading="lazy"
              />
              <span class="video-duration">8:45</span>
            </div>
            <div class="video-details">
              <h5 class="video-title">Epic Drone Shots</h5>
              <div class="video-meta">
                <div class="meta-header">
                  <span class="channel-name"
                    ><i class="bi bi-person"></i> SkyView</span
                  >
                  <span class="published-at"
                    ><i class="bi bi-calendar-event"></i> 2025-08-06</span
                  >
                </div>
                <div class="meta-stats">
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Views"
                    ><i class="bi bi-eye"></i> 1.8M</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Likes"
                    ><i class="bi bi-hand-thumbs-up"></i> 11K</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Comments"
                    ><i class="bi bi-chat-left-text"></i> 290</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Favorites"
                    ><i class="bi bi-star-fill"></i> 32</span
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="video-card">
            <div class="thumbnail-container">
              <img
                src="https://i.ytimg.com/vi/ysz5S6PUM-U/hqdefault.jpg"
                alt="Thumbnail"
                class="thumbnail"
                loading="lazy"
              />
              <span class="video-duration">10:23</span>
            </div>
            <div class="video-details">
              <h5 class="video-title">AI Breakthroughs 2025</h5>
              <div class="video-meta">
                <div class="meta-header">
                  <span class="channel-name"
                    ><i class="bi bi-person"></i> TechHub</span
                  >
                  <span class="published-at"
                    ><i class="bi bi-calendar-event"></i> 2025-08-05</span
                  >
                </div>
                <div class="meta-stats">
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Views"
                    ><i class="bi bi-eye"></i> 2.1M</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Likes"
                    ><i class="bi bi-hand-thumbs-up"></i> 13K</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Comments"
                    ><i class="bi bi-chat-left-text"></i> 371</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Favorites"
                    ><i class="bi bi-star-fill"></i> 45</span
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="video-card">
            <div class="thumbnail-container">
              <img
                src="https://i.ytimg.com/vi/SlPhMPnQ58k/hqdefault.jpg"
                alt="Thumbnail"
                class="thumbnail"
                loading="lazy"
              />
              <span class="video-duration">4:50</span>
            </div>
            <div class="video-details">
              <h5 class="video-title">Counting Stars</h5>
              <div class="video-meta">
                <div class="meta-header">
                  <span class="channel-name"
                    ><i class="bi bi-person"></i> OneRepublicVEVO</span
                  >
                  <span class="published-at"
                    ><i class="bi bi-calendar-event"></i> 2025-08-13</span
                  >
                </div>
                <div class="meta-stats">
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Views"
                    ><i class="bi bi-eye"></i> 2.8M</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Likes"
                    ><i class="bi bi-hand-thumbs-up"></i> 18K</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Comments"
                    ><i class="bi bi-chat-left-text"></i> 700</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Favorites"
                    ><i class="bi bi-star-fill"></i> 42</span
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="video-card">
            <div class="thumbnail-container">
              <img
                src="https://i.ytimg.com/vi/09R8_2nJtjg/hqdefault.jpg"
                alt="Thumbnail"
                class="thumbnail"
                loading="lazy"
              />
              <span class="video-duration">5:12</span>
            </div>
            <div class="video-details">
              <h5 class="video-title">Sugar Rush</h5>
              <div class="video-meta">
                <div class="meta-header">
                  <span class="channel-name"
                    ><i class="bi bi-person"></i> Maroon5VEVO</span
                  >
                  <span class="published-at"
                    ><i class="bi bi-calendar-event"></i> 2025-08-12</span
                  >
                </div>
                <div class="meta-stats">
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Views"
                    ><i class="bi bi-eye"></i> 2.6M</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Likes"
                    ><i class="bi bi-hand-thumbs-up"></i> 21K</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Comments"
                    ><i class="bi bi-chat-left-text"></i> 900</span
                  >
                  <span
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Favorites"
                    ><i class="bi bi-star-fill"></i> 50</span
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Ad Zone (shifted up, before trending) -->
    <section class="ad-zone">
      <div class="container-fluid px-md-5">
        <div class="ad-placeholder">
          <i
            class="bi bi-badge-ad fa-2x mb-3"
            style="color: var(--primary)"
          ></i>
          <p>Ad Space for Google AdSense or Affiliates</p>
        </div>
      </div>
    </section>

<!-- Footer File include  -->
<?php include "includes/footer.php"; ?>
