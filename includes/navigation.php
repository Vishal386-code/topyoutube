<?php
  $current = basename($_SERVER['PHP_SELF']); 
?>
<!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid px-md-5">
        <a class="navbar-brand" href="<?= BASE_URL ?>">
          <img src="<?= BASE_URL ?>public/assests/images/logo.svg" alt="TopYouTube Logo" />
        </a>
        <div class="menu d-flex align-items-center gap-3">
          <form
            action="<?= BASE_URL ?>pages/search"
            class="search-form d-none d-md-block"
          >
            <div class="search-wrapper position-relative">
              <input
                type="text"
                class="form-control search-input"
                placeholder="Search videos..."
                autocomplete="off"
              />
              <button type="submit" class="search-btn">
                <i class="bi bi-search"></i>
              </button>
              <div
                class="suggestions dropdown-menu"
                id="navbar-suggestions"
              ></div>
            </div>
          </form>

          <button class="search-openbtn btn btn-light d-md-none">
            <i class="bi bi-search"></i>
          </button>
          <div class="dropdown">
            <button
              class="btn btn-light dropdown-toggle custom-selectbox"
              type="button"
              id="countryDropdown"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              <span>
                <img
                  src="https://flagcdn.com/us.svg"
                  alt="US"
                  class="country-flag"
                />
                <span>United States</span>
              </span>
              <i class="bi bi-chevron-down ms-2"></i>
            </button>
            <ul class="dropdown-menu custom-dropmenu" aria-labelledby="countryDropdown">
              <li>
                <a class="dropdown-item" href="#">
                  <img
                    src="https://flagcdn.com/in.svg"
                    alt="India"
                    class="country-flag"
                  />
                  India
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#">
                  <img
                    src="https://flagcdn.com/gb.svg"
                    alt="UK"
                    class="country-flag"
                  />
                  United Kingdom
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#">
                  <img
                    src="https://flagcdn.com/ca.svg"
                    alt="Canada"
                    class="country-flag"
                  />
                  Canada
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#">
                  <img
                    src="https://flagcdn.com/au.svg"
                    alt="Australia"
                    class="country-flag"
                  />
                  Australia
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#">
                  <img
                    src="https://flagcdn.com/us.svg"
                    alt="United States"
                    class="country-flag"
                  />
                  United States
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#">
                  <img
                    src="https://flagcdn.com/de.svg"
                    alt="Germany"
                    class="country-flag"
                  />
                  Germany
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#">
                  <img
                    src="https://flagcdn.com/fr.svg"
                    alt="France"
                    class="country-flag"
                  />
                  France
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#">
                  <img
                    src="https://flagcdn.com/jp.svg"
                    alt="Japan"
                    class="country-flag"
                  />
                  Japan
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#">
                  <img
                    src="https://flagcdn.com/cn.svg"
                    alt="China"
                    class="country-flag"
                  />
                  China
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#">
                  <img
                    src="https://flagcdn.com/br.svg"
                    alt="Brazil"
                    class="country-flag"
                  />
                  Brazil
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#">
                  <img
                    src="https://flagcdn.com/za.svg"
                    alt="South Africa"
                    class="country-flag"
                  />
                  South Africa
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#">
                  <img
                    src="https://flagcdn.com/nz.svg"
                    alt="New Zealand"
                    class="country-flag"
                  />
                  New Zealand
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>