<?php
// footer.php - Reusable footer component for SDSF Live (Matching Image 4 UI)
?>
  <!-- Footer (Image 4 Design & Content) -->
  <footer class="site-footer">
    <div class="footer-inner">
      <!-- Top Row with Search Icon -->
      <div class="footer-top-row">
        <button type="button" class="footer-search-trigger" onclick="document.getElementById('live-notices-search')?.focus(); window.scrollTo({top: 0, behavior: 'smooth'});" title="Search SDSF Portal" aria-label="Search SDSF Portal">
          <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </button>
      </div>

      <!-- 4 Columns Grid -->
      <div class="footer-columns-grid">
        <!-- Col 1: University Address -->
        <div class="footer-col">
          <h4>UNIVERSITY ADDRESS</h4>
          <div class="footer-univ-name">School of Data Science and Forecasting</div>
          <div class="footer-address-text">
            Devi Ahilya Vishwavidyalaya<br>
            DAVV Takshila Campus, Khandwa Road<br>
            Indore, Madhya Pradesh &ndash; 452001
          </div>
          <div class="footer-contact-line">
            <strong>Phone:</strong> <a href="tel:+918982177634">+91 8982177634</a>
          </div>
          <div class="footer-contact-line">
            <strong>Email:</strong> <a href="mailto:gmaheshwari@ietdavv.edu.in">gmaheshwari@ietdavv.edu.in</a>
          </div>
          
          <div class="footer-info-center-box">
            <h5>SDSF INFORMATION CENTER</h5>
            <p>Indore</p>
          </div>
        </div>

        <!-- Col 2: Social Media -->
        <div class="footer-col">
          <h4>SOCIAL MEDIA</h4>
          <ul class="footer-links-list">
            <li>
              <a href="https://www.linkedin.com" target="_blank" rel="noopener noreferrer" class="footer-social-link">
                <svg fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                LinkedIn
              </a>
            </li>
            <li>
              <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer" class="footer-social-link">
                <svg fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                Instagram
              </a>
            </li>
          </ul>
        </div>

        <!-- Col 3: Quick Links -->
        <div class="footer-col">
          <h4>QUICK LINKS</h4>
          <ul class="footer-links-list">
            <li><a href="placements.php">Careers &amp; Opportunities</a></li>
            <li><a href="index.php?category=general">Anti-Ragging Committee</a></li>
            <li><a href="index.php?category=general">Grievance Redressal Committee</a></li>
            <li><a href="index.php?category=library">Digital Library &amp; IEEE Portal</a></li>
          </ul>
        </div>

        <!-- Col 4: Parents -->
        <div class="footer-col">
          <h4>PARENTS</h4>
          <ul class="footer-links-list">
            <li><a href="#">How to Reach</a></li>
            <li><a href="#">Accommodation for Parents &amp; Visitors near DAVV Takshila Campus</a></li>
            <li><a href="https://www.dauniv.ac.in" target="_blank" rel="noopener noreferrer">DAVV Official Portal &#x2197;</a></li>
          </ul>
        </div>
      </div>

      <!-- Bottom Bar -->
      <div class="footer-bottom-bar">
        <div class="footer-copy-text">
          &copy; SDSF - School of Data Science and Forecasting, DAVV Indore. All Rights Reserved.<br>
          <strong>Developed by Joyobrata Das &mdash; M.Tech AI&amp;DS Student, SDSF DAVV</strong>
        </div>

        <!-- Back to Top Button -->
        <button type="button" class="btn-back-to-top" onclick="window.scrollTo({top: 0, behavior: 'smooth'})" title="Back to top" aria-label="Back to top">
          <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 15l7-7 7 7"></path></svg>
        </button>
      </div>
    </div>
  </footer>

  <!-- Login Modal -->
  <div class="modal-overlay" id="loginModal">
    <div class="modal-dialog">
      <div class="modal-header">
        <h3>SDSF Live Portal Login</h3>
        <button type="button" class="modal-close-btn" onclick="closeLoginModal()">&times;</button>
      </div>
      <div class="modal-body">
        <form onsubmit="handleLoginSubmit(event)">
          <div class="form-group">
            <label for="loginRole">Account Type</label>
            <select id="loginRole" class="form-control">
              <option value="student">Student Portal</option>
              <option value="faculty">Faculty &amp; TT Incharge</option>
              <option value="admin">Administrator / Examination Cell</option>
            </select>
          </div>
          <div class="form-group">
            <label for="loginId">Enrollment / Employee ID</label>
            <input type="text" id="loginId" class="form-control" placeholder="e.g. DS2026-042" required>
          </div>
          <div class="form-group">
            <label for="loginPass">Password</label>
            <input type="password" id="loginPass" class="form-control" placeholder="Enter your password" required>
          </div>
          <button type="submit" class="btn-submit-modal">Sign In to SDSF Live</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Notice Details Modal -->
  <div class="modal-overlay" id="noticeDetailsModal">
    <div class="modal-dialog" style="max-width: 600px;">
      <div class="modal-header">
        <h3 id="modalNoticeTitle">Notice Title</h3>
        <button type="button" class="modal-close-btn" onclick="closeNoticeModal()">&times;</button>
      </div>
      <div class="modal-body">
        <div id="modalNoticeMeta" style="font-size: 0.8rem; color: #64748b; margin-bottom: 12px;"></div>
        <p id="modalNoticeBody" style="font-size: 0.9rem; line-height: 1.6; color: #1e293b; margin-bottom: 20px;"></p>
        <div style="display: flex; justify-content: flex-end; gap: 10px;">
          <button type="button" class="btn-load-more" onclick="closeNoticeModal()">Close</button>
          <a href="#" id="modalNoticeDownloadBtn" class="btn-filter-apply" style="display: inline-flex; align-items: center; gap: 6px;" target="_blank">
            <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
            Download PDF
          </a>
        </div>
      </div>
    </div>
  </div>

  <script src="js/main.js"></script>
</body>
</html>
