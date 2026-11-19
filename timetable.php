<?php
// timetable.php - SDSF Live Timetable Module (Matches Image 5 UI with Image 2 Theme)
$page_title = 'Time Table';
$current_tab = 'timetable';

require_once __DIR__ . '/includes/header.php';
?>

<main class="main-content-section">
  <div class="timetable-view-container">

    <!-- Timetable Top Banner (Image 5 UI with SDSF Chronicle Branding) -->
    <div class="timetable-hero-banner">
      <div class="timetable-hero-left">
        <div class="hero-logo-round" style="width: 62px; height: 62px;">
          <img src="Photoes/davvLogo.png" alt="DAVV Logo">
        </div>
        <div class="timetable-title-group">
          <span class="timetable-badge-pill">SDSF DAVV &bull; INDORE</span>
          <h2 class="timetable-title">TimeTable@SDSF-DAVV</h2>
          <p class="timetable-subtitle">School of Data Science &amp; Forecasting, Devi Ahilya Vishwavidyalaya</p>
        </div>
      </div>

      <div class="timetable-hero-right">
        <button type="button" class="btn-admin-login-tt" onclick="openLoginModal()">
          <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
          Faculty / TT Incharge / Admin Login
        </button>
      </div>
    </div>

    <!-- Filter Timetables Section (Image 5 UI) -->
    <section class="timetable-filter-box" aria-label="Filter Timetables">
      <div class="filter-box-heading">
        <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd"></path></svg>
        FILTER TIMETABLES
      </div>

      <div class="filter-grid-row">
        <!-- Session -->
        <div class="filter-col-item">
          <label class="filter-label" for="tt-session">SESSION</label>
          <select id="tt-session" class="filter-select">
            <option value="all">All Sessions</option>
            <option value="2026-2027" selected>2026-2027</option>
            <option value="2025-2026">2025-2026</option>
          </select>
        </div>

        <!-- Semester -->
        <div class="filter-col-item">
          <label class="filter-label" for="tt-semester">SEMESTER</label>
          <select id="tt-semester" class="filter-select">
            <option value="all">All Semesters</option>
            <option value="1">Semester I</option>
            <option value="2">Semester II</option>
            <option value="3">Semester III</option>
            <option value="4">Semester IV</option>
          </select>
        </div>

        <!-- Program -->
        <div class="filter-col-item">
          <label class="filter-label" for="tt-program">PROGRAM</label>
          <select id="tt-program" class="filter-select">
            <option value="all">All Programs</option>
            <option value="msc_ds">M.Sc. Data Science &amp; Analytics</option>
            <option value="mtech_ds">M.Tech Data Science &amp; AI</option>
            <option value="mtech_exec">M.Tech Executive</option>
            <option value="phd">Ph.D. Data Science</option>
          </select>
        </div>

        <!-- Branch -->
        <div class="filter-col-item">
          <label class="filter-label" for="tt-branch">BRANCH</label>
          <select id="tt-branch" class="filter-select">
            <option value="all">All Branches</option>
            <option value="ds">Data Science</option>
            <option value="ai">Artificial Intelligence</option>
            <option value="bda">Big Data Analytics</option>
          </select>
        </div>

        <!-- Year -->
        <div class="filter-col-item">
          <label class="filter-label" for="tt-year">YEAR</label>
          <select id="tt-year" class="filter-select">
            <option value="all">All</option>
            <option value="1">1st Year</option>
            <option value="2">2nd Year</option>
          </select>
        </div>

        <!-- Room -->
        <div class="filter-col-item">
          <label class="filter-label" for="tt-room">ROOM</label>
          <select id="tt-room" class="filter-select">
            <option value="all">All Rooms</option>
            <option value="LH-1">Lecture Hall 1</option>
            <option value="LH-2">Lecture Hall 2</option>
            <option value="R-201">Takshila Room 201</option>
            <option value="R-202">Takshila Room 202</option>
          </select>
        </div>

        <!-- Lab -->
        <div class="filter-col-item">
          <label class="filter-label" for="tt-lab">LAB</label>
          <select id="tt-lab" class="filter-select">
            <option value="all">All Labs</option>
            <option value="ai_lab">AI &amp; Deep Learning Lab</option>
            <option value="analytics_lab">Analytics &amp; Big Data Lab</option>
            <option value="cloud_lab">High Performance Computing Lab</option>
          </select>
        </div>
      </div>

      <!-- Action Buttons -->
      <div class="filter-actions-row">
        <button type="button" class="btn-filter-apply" onclick="applyTimetableFilter()">
          <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
          Apply
        </button>
        <button type="button" class="btn-filter-reset" onclick="resetTimetableFilter()">
          <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
          Reset
        </button>
        <button type="button" class="btn-class-coord" onclick="showCoordinators()">
          <svg width="14" height="14" fill="currentColor" viewBox="0 0 20 20"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path></svg>
          Class Coordinators
        </button>
      </div>
    </section>

    <!-- Stats Summary Row (Image 5 UI) -->
    <div class="timetable-stats-row">
      <div class="tt-stat-card">
        <span class="tt-stat-num">0</span>
        <span class="tt-stat-title">Timetables</span>
      </div>
      <div class="tt-stat-card">
        <span class="tt-stat-num">0</span>
        <span class="tt-stat-title">Programs</span>
      </div>
      <div class="tt-stat-card">
        <span class="tt-stat-num">0</span>
        <span class="tt-stat-title">Branches</span>
      </div>
    </div>

    <!-- Blank Time Table Content Area (As requested: Keep it just like this in the image blank for now) -->
    <div class="timetable-blank-canvas">
      <div class="blank-canvas-icon">
        <svg width="34" height="34" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
      </div>
      <h3>No Timetables Scheduled</h3>
      <p>Timetables for the current academic session will be published here once approved by the SDSF Academic Council &amp; Time Table In-charge.</p>
    </div>

  </div>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
