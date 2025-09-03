<?php
    // Header include file
include '../includes/header.php';
    //  Navbar include file
include '../includes/navigation.php';
?>
    <!-- Hero Section - Modified for Search -->
    <section class="hero">
      <div class="hero-content">
        <h1 class="hero-title">Search Videos</h1>
        <form class="search-form">
          <div class="search-wrapper position-relative">
            <input
              type="text"
              class="form-control search-input"
              placeholder="Search videos..."
              value="Music"
              autocomplete="off"
            />
            <button type="submit" class="search-btn">
              <i class="bi bi-search"></i>
            </button>
            <div class="suggestions dropdown-menu" id="hero-suggestions"></div>
          </div>
        </form>
      </div>
    </section>

    <section class="filters">
      <div
        class="container-fluid px-md-5 d-flex flex-nowrap justify-content-xl-center"
      >
        <a href="/pages/search.html" class="btn filter-chip">
          <i class="bi bi-grid me-1"></i>All
        </a>
        <a href="/" class="btn filter-chip">
          <i class="bi bi-fire me-1"></i>Trendings
        </a>
        <a href="/pages/search.html" class="btn filter-chip active">
          <i class="bi bi-music-note-beamed me-1"></i>Music
        </a>
        <a href="/pages/search.html" class="btn filter-chip">
          <i class="bi bi-joystick me-1"></i>Gaming
        </a>
        <a href="/pages/search.html" class="btn filter-chip">
          <i class="bi bi-cpu me-1"></i>Tech
        </a>
        <a href="/pages/search.html" class="btn filter-chip">
          <i class="bi bi-newspaper me-1"></i>News
        </a>
        <a href="/pages/search.html" class="btn filter-chip">
          <i class="bi bi-trophy me-1"></i>Sports
        </a>
        <a href="/pages/search.html" class="btn filter-chip">
          <i class="bi bi-film me-1"></i>Entertainment
        </a>
        <a href="/pages/search.html" class="btn filter-chip">
          <i class="bi bi-camera-video me-1"></i>Film & Animation
        </a>
        <a href="/pages/search.html" class="btn filter-chip">
          <i class="bi bi-airplane me-1"></i>Travel & Events
        </a>
      </div>
    </section>

    <!-- Ad Zone -->
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

    <!-- Search Results Section -->
    <section class="section">
      <div class="container-fluid px-md-5">
        <div class="video-grid">
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
        </div>
        <!-- <p class="fs-3 text-center"><i class="bi bi-emoji-frown"></i> We couldn’t find what you’re looking for.</p> -->
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

    <!--  Navbar include file -->
<?php include '../includes/footer.php'; ?>
    <script>
      // Attach to hero search
      const heroInput = document.querySelector(".hero .search-input");
      const heroSuggestions = document.getElementById("hero-suggestions");
      if (heroInput && heroSuggestions) {
        heroInput.addEventListener("input", () =>
          showSuggestions(heroInput, heroSuggestions)
        );
        heroInput.addEventListener("focus", () =>
          showSuggestions(heroInput, heroSuggestions)
        );
        heroInput.addEventListener("blur", () => {
          setTimeout(() => {
            heroSuggestions.style.display = "none";
          }, 200);
        });
      }
    </script>

