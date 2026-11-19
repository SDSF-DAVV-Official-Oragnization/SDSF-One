<?php
// placements.php - SDSF Live Placements Module (Replaces Auditorium Booking)
$page_title = 'Placements & Career Opportunities';
$current_tab = 'placements';

require_once __DIR__ . '/includes/header.php';
?>

<main class="main-content-section">
  <div class="content-placeholder-card">
    <div class="content-placeholder-header">
      <h2>Training &amp; Placements Cell</h2>
      <p>School of Data Science and Forecasting &bull; Devi Ahilya Vishwavidyalaya, Indore</p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; margin-bottom: 30px;">
      <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px;">
        <h4 style="font-size: 1.1rem; color: #0f172a; margin-bottom: 8px;">Key Statistics</h4>
        <p style="font-size: 0.85rem; color: #64748b; line-height: 1.6;">
          &bull; <strong>Highest Package:</strong> &#8377; 24.5 LPA<br>
          &bull; <strong>Average Package:</strong> &#8377; 8.8 LPA<br>
          &bull; <strong>Recruiting Partners:</strong> 45+ Technology &amp; Analytics Firms<br>
          &bull; <strong>Placement Rate:</strong> 94% for M.Sc. and M.Tech Batches
        </p>
      </div>

      <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px;">
        <h4 style="font-size: 1.1rem; color: #0f172a; margin-bottom: 8px;">Top Hiring Partners</h4>
        <p style="font-size: 0.85rem; color: #64748b; line-height: 1.6;">
          Cognizant, TCS Digital, Infosys AI Labs, Impetus, Yash Technologies, Principal Global Services, Fractal Analytics, Mu Sigma, Quantiphi.
        </p>
      </div>

      <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px;">
        <h4 style="font-size: 1.1rem; color: #0f172a; margin-bottom: 8px;">Placement Coordinator</h4>
        <p style="font-size: 0.85rem; color: #64748b; line-height: 1.6;">
          Training &amp; Placement Cell, Takshila Campus<br>
          Email: <a href="mailto:gmaheshwari@ietdavv.edu.in" style="color: #2563eb;">placements-sdsf@dauniv.ac.in</a><br>
          Phone: +91 8982177634
        </p>
      </div>
    </div>

    <div style="text-align: center; padding: 30px; background: #eff6ff; border-radius: 10px; border: 1px dashed #93c5fd;">
      <h3 style="font-size: 1.2rem; color: #1e3a8a; margin-bottom: 6px;">Campus Placement Drive 2026-2027 Registration</h3>
      <p style="font-size: 0.88rem; color: #3b82f6; margin-bottom: 16px;">Final year M.Sc. Data Science and M.Tech students must update their resumes and GitHub portfolios.</p>
      <button type="button" class="btn-filter-apply" onclick="alert('Student placement registration portal opens on December 1st, 2026.')">Register for Placement Drive</button>
    </div>
  </div>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
