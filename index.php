<?php
// index.php - Main Homepage: SDSF Live Portal & Notices (Plain & Simple Elegant UI)
$page_title = 'Official Notices & Circulars';
$current_tab = 'notices';

require_once __DIR__ . '/includes/notices_data.php';
$counts = getNoticeCounts($notices);

require_once __DIR__ . '/includes/header.php';
?>

<!-- Main Content Area: Notices View (Plain, Simple & Elegant UI) -->
<main class="main-content-section">
  <div class="notices-layout-grid">

    <!-- Left Sidebar: Important Sections -->
    <aside class="important-sections-sidebar" aria-label="Important Notice Sections">
      <div class="important-sections-card">
        <div class="important-sections-header-simple">
          <div class="sec-header-icon-simple">
            <!-- Pin Icon -->
            <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
            </svg>
          </div>
          <div class="sec-header-text">
            <h3>Important Sections</h3>
            <p>Examination, results, library and PhD Cell notices</p>
          </div>
        </div>

        <ul class="important-sections-list">
          <!-- All Notices -->
          <li class="sec-nav-item">
            <button type="button" class="sec-nav-link active" data-category="all" onclick="filterByCategory('all', this)">
              <span class="sec-nav-label">
                <span class="chevron">&#x203A;</span>
                All Notices
              </span>
              <span class="badge-count"><?php echo count($notices); ?></span>
            </button>
          </li>

          <!-- Examination -->
          <li class="sec-nav-item">
            <button type="button" class="sec-nav-link" data-category="examination" onclick="filterByCategory('examination', this)">
              <span class="sec-nav-label">
                <span class="chevron">&#x203A;</span>
                Examination
              </span>
              <span class="badge-count"><?php echo $counts['examination']; ?></span>
            </button>
          </li>

          <!-- Results -->
          <li class="sec-nav-item">
            <button type="button" class="sec-nav-link" data-category="results" onclick="filterByCategory('results', this)">
              <span class="sec-nav-label">
                <span class="chevron">&#x203A;</span>
                Results
              </span>
              <span class="badge-count"><?php echo $counts['results']; ?></span>
            </button>
          </li>

          <!-- Library -->
          <li class="sec-nav-item">
            <button type="button" class="sec-nav-link" data-category="library" onclick="filterByCategory('library', this)">
              <span class="sec-nav-label">
                <span class="chevron">&#x203A;</span>
                Library
              </span>
              <span class="badge-count"><?php echo $counts['library']; ?></span>
            </button>
          </li>

          <!-- Ph.D. Cell -->
          <li class="sec-nav-item">
            <button type="button" class="sec-nav-link" data-category="phd" onclick="filterByCategory('phd', this)">
              <span class="sec-nav-label">
                <span class="chevron">&#x203A;</span>
                Ph.D. Cell
              </span>
              <span class="badge-count"><?php echo $counts['phd']; ?></span>
            </button>
          </li>

          <!-- Admissions -->
          <li class="sec-nav-item">
            <button type="button" class="sec-nav-link" data-category="admissions" onclick="filterByCategory('admissions', this)">
              <span class="sec-nav-label">
                <span class="chevron">&#x203A;</span>
                Admissions
              </span>
              <span class="badge-count"><?php echo $counts['admissions']; ?></span>
            </button>
          </li>
        </ul>
      </div>

      <!-- Quick Info / Helpdesk Card -->
      <div class="sidebar-info-card">
        <h4>
          <svg width="16" height="16" fill="none" stroke="#2563eb" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
          SDSF Academic Cell
        </h4>
        <p>For urgent academic circulars or departmental inquiries, contact the student coordinator office.</p>
        <a href="mailto:gmaheshwari@ietdavv.edu.in" class="btn-contact-help">Contact Academic Office</a>
      </div>
    </aside>

    <!-- Right Main Area: Official Notices & Circulars (Exact UI from Latest Image) -->
    <section class="official-notices-section" aria-label="Official Notices and Circulars">
      <!-- Section Title matching image: "Official Notices & Circulars" -->
      <div class="official-notices-title-wrapper">
        <h2 class="official-notices-main-heading">Official Notices &amp; Circulars</h2>
      </div>

      <!-- Red INFO'S Callout Line matching image -->
      <div class="infos-subbar-clean">
        <span class="infos-tag-pill">
          <svg width="13" height="13" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path></svg>
          INFO'S
        </span>
        <span class="infos-subbar-text">
          in Academics &nbsp;<span class="infos-slash">/</span>&nbsp; All notifications, exam schedules &amp; circulars are available below as per university guidelines.
        </span>
      </div>

      <!-- Clean, Plain and Simple Notices Cards List (Exactly as in uploaded image) -->
      <div class="clean-notices-list" id="notices-list-wrapper">
        <?php foreach ($notices as $index => $notice): 
          $is_first = ($index === 0);
        ?>
          <article class="clean-notice-card <?php echo $is_first ? 'clean-notice-card-featured' : ''; ?>" 
                   data-id="<?php echo $notice['id']; ?>" 
                   data-category="<?php echo htmlspecialchars($notice['category']); ?>">
            <div class="clean-notice-content">
              <!-- Bullet and Title in Serif Typography -->
              <div class="clean-notice-title-row">
                <span class="clean-notice-bullet <?php echo $is_first ? 'bullet-blue' : ''; ?>">&bull;</span>
                <h3 class="clean-notice-title">
                  <?php if ($notice['file_url'] !== '#'): ?>
                    <a href="<?php echo htmlspecialchars($notice['file_url'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener noreferrer">
                  <?php endif; ?>
                    <?php echo htmlspecialchars($notice['title']); ?>
                  <?php if ($notice['file_url'] !== '#'): ?>
                    </a>
                  <?php endif; ?>
                </h3>
              </div>

              <!-- Badge below title if present (e.g. UPDATED badge on first card) -->
              <?php if (!empty($notice['badge'])): ?>
                <div class="clean-notice-badge-wrapper">
                  <span class="clean-notice-badge <?php echo $is_first ? 'clean-badge-primary' : 'clean-badge-neutral'; ?>">
                    <?php echo htmlspecialchars($notice['badge']); ?>
                  </span>
                </div>
              <?php endif; ?>
            </div>
          </article>
        <?php endforeach; ?>
      </div>

      <!-- Bottom Archive Controls -->
      <div class="notices-pagination-bar" style="margin-top: 20px; border-radius: 8px;">
        <span>Showing all recent academic circulars &bull; Session 2026-2027</span>
        <button type="button" class="btn-load-more" onclick="alert('All archive records loaded from Takshila DAVV repository.')">Archive Records</button>
      </div>
    </section>
  </div>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
