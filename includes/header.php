<?php
// header.php - Reusable header component for SDSF Live
if (!isset($current_tab)) {
    $current_tab = 'notices';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo isset($page_title) ? htmlspecialchars($page_title) . ' | SDSF Live' : 'SDSF Live - School of Data Science & Forecasting, DAVV Indore'; ?></title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/png" href="Photoes/departmentlogo_transparent.png">
</head>
<body>

  <!-- Top Editorial Date & Location Bar (Theme inspiration from Image 2) -->
  <div class="editorial-topbar">
    <div class="editorial-topbar-inner">
      <div class="topbar-meta-left">
        <span class="topbar-item" id="topbar-current-date">
          <svg fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
          <span id="live-date-str">Thursday, November 19, 2026</span>
        </span>
        <span class="topbar-divider">|</span>
        <span class="topbar-item">
          <svg fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
          Takshila Campus, Khandwa Road, Indore, MP, India
        </span>
      </div>
    </div>
  </div>

  <!-- Editorial Masthead (Themed like Image 2: SDSF Chronicle aesthetic) -->
  <header class="masthead-wrapper">
    <div class="masthead-inner">
      <!-- Left: Campus Local Time & Day Box -->
      <div class="masthead-timebox">
        <div class="timebox-day" id="masthead-day">THURSDAY</div>
        <div class="timebox-clock" id="masthead-live-clock">09:52:10</div>
        <div class="timebox-label">CAMPUS LOCAL TIME</div>
      </div>

      <!-- Center: Main Brand & Department Heading -->
      <div class="masthead-center">
        <div class="masthead-sub-title">DEVI AHILYA VISHWAVIDYALAYA &bull; SCHOOL OF DATA SCIENCE &amp; FORECASTING</div>
        <div class="masthead-title-row">
          <img src="Photoes/davvLogo.png" alt="DAVV Indore University Logo" class="masthead-logo">
          <h1 class="masthead-main-title">SDSF Live</h1>
          <img src="Photoes/departmentlogo_transparent.png" alt="SDSF Department Logo" class="masthead-logo">
        </div>
        <div class="masthead-fullform">School Of Data Science and Forecasting Davv, Indore</div>
        <div class="masthead-credits-line">
          &copy; SDSF - All Rights Reserved. &nbsp;|&nbsp; Your Trusted Source for SDSF News &amp; Academic Circulars &nbsp;|&nbsp; Capturing the Spirit of Data &amp; Innovation
        </div>
      </div>

      <!-- Right: Balanced Empty Spacer for clean grid alignment -->
      <div class="masthead-right-spacer" aria-hidden="true"></div>
    </div>
  </header>

  <!-- Editorial Navigation Bar (EXACTLY Styled like Image 4 with Double Top Rule & Active Underline Bar) -->
  <nav class="chronicle-navbar" aria-label="Main Navigation">
    <div class="chronicle-navbar-inner">
      <ul class="chronicle-nav-list">
        <!-- HOME Tab -->
        <li class="chronicle-nav-item">
          <a href="index.php" class="chronicle-nav-link <?php echo ($current_tab === 'home') ? 'active' : ''; ?>">
            <svg class="nav-icon" width="16" height="16" fill="currentColor" viewBox="0 0 20 20"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
            <span class="nav-text">HOME</span>
          </a>
        </li>

        <!-- NOTICES Tab -->
        <li class="chronicle-nav-item">
          <a href="index.php?tab=notices" class="chronicle-nav-link <?php echo ($current_tab === 'notices') ? 'active' : ''; ?>">
            <svg class="nav-icon" width="16" height="16" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path><path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path></svg>
            <span class="nav-text">NOTICES</span>
          </a>
        </li>

        <!-- FACULTY PROFILES Tab -->
        <li class="chronicle-nav-item">
          <a href="faculty.php" class="chronicle-nav-link <?php echo ($current_tab === 'faculty') ? 'active' : ''; ?>">
            <svg class="nav-icon" width="16" height="16" fill="currentColor" viewBox="0 0 20 20"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path></svg>
            <span class="nav-text">FACULTY PROFILES</span>
          </a>
        </li>

        <!-- SDSF CHRONICLE Tab (Replaces IET Times; Click opens external link) -->
        <li class="chronicle-nav-item">
          <a href="https://dsf.dauniv.ac.in/SDSF_News/news.php" target="_blank" rel="noopener noreferrer" class="chronicle-nav-link chronicle-external" title="Open SDSF Chronicle News Portal">
            <svg class="nav-icon" width="16" height="16" fill="currentColor" viewBox="0 0 20 20"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
            <span class="nav-text">SDSF CHRONICLE</span>
            <span class="external-tag">&#x2197;</span>
          </a>
        </li>

        <!-- TIME TABLE Tab -->
        <li class="chronicle-nav-item">
          <a href="timetable.php" class="chronicle-nav-link <?php echo ($current_tab === 'timetable') ? 'active' : ''; ?>">
            <svg class="nav-icon" width="16" height="16" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path></svg>
            <span class="nav-text">TIME TABLE</span>
          </a>
        </li>

        <!-- PLACEMENTS Tab (Replaces Auditorium Booking) -->
        <li class="chronicle-nav-item">
          <a href="placements.php" class="chronicle-nav-link <?php echo ($current_tab === 'placements') ? 'active' : ''; ?>">
            <svg class="nav-icon" width="16" height="16" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"></path><path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"></path></svg>
            <span class="nav-text">PLACEMENTS</span>
          </a>
        </li>
      </ul>

      <!-- Right Search Box & Login (as shown in Image 4) -->
      <div class="chronicle-nav-right">
        <div class="chronicle-search-container">
          <input type="text" id="live-notices-search" placeholder="Search headlines, circulars..." onkeyup="handleLiveSearch(this.value)">
          <button type="button" class="chronicle-search-btn" title="Search" onclick="triggerSearch()">
            <svg width="15" height="15" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
          </button>
        </div>
        <button type="button" class="btn-login-header" onclick="openLoginModal()">Login</button>
      </div>
    </div>
  </nav>

  <!-- News Ticker / Recent Updates (Directly below Nav Bar, matching Image 4 & Image 2) -->
  <div class="news-ticker-bar">
    <div class="news-ticker-inner">
      <div class="ticker-badge">
        <svg width="14" height="14" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg>
        Recent Updates:
      </div>
      <div class="ticker-marquee-wrapper">
        <div class="ticker-marquee-content" id="ticker-content">
          <span class="ticker-item"><a href="index.php?category=examination">Final Examination Time Table (Semester End Examination Nov&ndash;Dec 2026) updated</a></span>
          <span class="ticker-sep">/</span>
          <span class="ticker-item"><a href="index.php?category=admissions">Direct Admission for M.Tech. (Executive), M.Sc. (Data Science &amp; Analytics) open on Merit Basis</a></span>
          <span class="ticker-sep">/</span>
          <span class="ticker-item"><a href="https://dsf.dauniv.ac.in/SDSF_News/news.php" target="_blank">Workshop Conducted: Cyber Security &amp; Internet Ethics at SDSF Takshila Campus</a></span>
          <span class="ticker-sep">/</span>
          <span class="ticker-item"><a href="index.php?category=phd">Ph.D. Course Work Time Table (Session August&ndash;November, 2026) released</a></span>
          <span class="ticker-sep">/</span>
          <span class="ticker-item">Welcome to SDSF Live &mdash; Official Academic &amp; Notice Portal</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Topics / Quick Filter Chips (Themed after Image 2) -->
  <div class="topics-row-bar">
    <div class="topics-row-inner">
      <span class="topics-label">
        <svg width="14" height="14" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
        TOPICS:
      </span>
      <button type="button" class="topic-chip active" onclick="filterByTopic('all', this)">All Stories</button>
      <button type="button" class="topic-chip" onclick="filterByTopic('examination', this)">Examination</button>
      <button type="button" class="topic-chip" onclick="filterByTopic('results', this)">Results</button>
      <button type="button" class="topic-chip" onclick="filterByTopic('admissions', this)">Admissions</button>
      <button type="button" class="topic-chip" onclick="filterByTopic('phd', this)">Ph.D. Cell</button>
      <button type="button" class="topic-chip chip-amber" onclick="filterByTopic('library', this)">Library</button>
    </div>
  </div>
