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

  <!-- ============ AI & DS M.Tech (Dual Degree) Time Table ============ -->
<style>
    .tt-section h3 { font-size: 20px; font-weight: bold; color: #1a1f3c; margin-bottom: 5px; }
    .tt-semester { margin-top: 30px; }
    .tt-semester h4 { font-size: 17px; font-weight: bold; color: #1a1f3c; margin-bottom: 4px; }
    .tt-info { color: #666; font-size: 14px; margin-bottom: 10px; }
    .tt-wrapper { overflow-x: auto; margin-bottom: 15px; }
    .tt-table { width: 100%; border-collapse: collapse; font-size: 14px; }
    .tt-table th { background: #4355d6; color: #fff; text-align: left; padding: 10px 12px; border: 1px solid #4355d6; white-space: nowrap; }
    .tt-table td { padding: 9px 12px; border: 1px solid #e3e3e3; }
    .tt-table tbody tr:nth-child(even) { background: #f7f8fc; }
    .tt-table .tt-sub td { background: #e8ebfa; font-weight: bold; }
    .tt-table .tt-break { text-align: center; font-weight: bold; background: #fff7e0; }
    .tt-pdf a { color: #4355d6; font-weight: bold; }
</style>

<div class="tt-section">
    <h3>M.Tech ( Dual Degree ) Artificial Intelligence and Data Science</h3>
    <p class="tt-pdf"><a href="AIDS%20sem%201-9%20MTECH%20.pdf" target="_blank">Download Time Table (PDF)</a></p>

    <div class="tt-semester">
        <h4>I Semester</h4>
        <p class="tt-info">Room No.: A-201 &nbsp;|&nbsp; w.e.f. 20/07/2026</p>
        <div class="tt-wrapper">
            <table class="tt-table">
                <thead>
                    <tr>
                        <th>Day</th>
                        <th>9:00-10:00</th>
                        <th>10:00-11:00</th>
                        <th>11:00-11:30</th>
                        <th>11:30-12:30</th>
                        <th>12:30-1:30</th>
                        <th>1:30-2:00</th>
                        <th>2:00-3:00</th>
                        <th>3:00-4:00</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Monday</td>
                        <td>DS6A-107</td>
                        <td>DS6A-105</td>
                        <td></td>
                        <td>DS6A-106</td>
                        <td>DS6A-101</td>
                        <td></td>
                        <td>DS6A-102</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Tuesday</td>
                        <td>DS6A-107</td>
                        <td>DS6A-105</td>
                        <td></td>
                        <td>DS6A-106</td>
                        <td>DS6A-101</td>
                        <td></td>
                        <td>DS6A-103</td>
                        <td>DS6A-103</td>
                    </tr>
                    <tr>
                        <td>Wednesday</td>
                        <td>DS6A-104</td>
                        <td>DS6A-105</td>
                        <td></td>
                        <td>DS6A-106</td>
                        <td>DS6A-101</td>
                        <td></td>
                        <td>DS6A-102</td>
                        <td>DS6A-102</td>
                    </tr>
                    <tr>
                        <td>Thursday</td>
                        <td>DS6A-104</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>DS6A-101</td>
                        <td></td>
                        <td>DS6A-102(Lab)</td>
                        <td>DS6A-102(Lab)</td>
                    </tr>
                    <tr>
                        <td>Friday</td>
                        <td>DS6A-107(Lab)</td>
                        <td>DS6A-107(Lab)</td>
                        <td></td>
                        <td>DS6A-103</td>
                        <td>DS6A-103</td>
                        <td></td>
                        <td>DS6A-104(Lab)</td>
                        <td>DS6A-104(Lab)</td>
                    </tr>
                    <tr>
                        <td>Saturday</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tt-wrapper">
            <table class="tt-table">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Title</th>
                        <th>Credits (L-T-P)</th>
                        <th>Faculty</th>
                        <th>Contact No.</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="tt-sub"><td colspan="6">CORE COURSES</td></tr>
                    <tr>
                        <td>DS6A-101</td>
                        <td>Mathematics-I</td>
                        <td>4 (3-1-0)</td>
                        <td>Dr. Anupam Jain</td>
                        <td>9589883822</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>DS6A-102</td>
                        <td>Physics</td>
                        <td>4 (2-1-2)</td>
                        <td>Kabir Beg Mirja</td>
                        <td>9669111801</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>DS6A-103</td>
                        <td>Descriptive Statistics & Probability Theory</td>
                        <td>4 (3-1-0)</td>
                        <td>Kapil Sharma</td>
                        <td>8871463595</td>
                        <td>kapilsikhwal@gmail.com</td>
                    </tr>
                    <tr>
                        <td>DS6A-104</td>
                        <td>Fundamentals of Programming</td>
                        <td>3 (1-1-2)</td>
                        <td>Ms. Minal Agrawal</td>
                        <td>7024130300</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>DS6A-105</td>
                        <td>Introduction to Computer Science</td>
                        <td>3 (2-1-0)</td>
                        <td>Mr. Rajat Yadav</td>
                        <td>9826705696</td>
                        <td>rajatyadav25009@gmail.com</td>
                    </tr>
                    <tr>
                        <td>DS6A-106</td>
                        <td>Environmental Science</td>
                        <td>3 (2-1-0)</td>
                        <td>Ms. Priya Kushwah</td>
                        <td>7987841403</td>
                        <td>kushwahpriya53@gmail.com</td>
                    </tr>
                    <tr>
                        <td>DS6A-107</td>
                        <td>Fundamentals of Electronics</td>
                        <td>3 (1-1-2)</td>
                        <td>Mr. Animesh Masih</td>
                        <td></td>
                        <td>animesh.masih1976@gmail.com</td>
                    </tr>
                    <tr class="tt-sub"><td colspan="6">COMPREHENSIVE VIVA-VOCE</td></tr>
                    <tr>
                        <td></td>
                        <td>Comprehensive Viva-Voce</td>
                        <td>4</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="tt-sub"><td colspan="2">Total Credits</td><td colspan="4">28</td></tr>
                </tbody>
            </table>
        </div>
        <p><strong>Class Teacher:</strong> Ms. Priya Kushwah (7987841403)</p>
    </div>

    <div class="tt-semester">
        <h4>III Semester</h4>
        <p class="tt-info">Room No.: B-002 &nbsp;|&nbsp; w.e.f. 20/07/2026</p>
        <div class="tt-wrapper">
            <table class="tt-table">
                <thead>
                    <tr>
                        <th>Day</th>
                        <th>9:00-10:00</th>
                        <th>10:00-11:00</th>
                        <th>11:00-12:00</th>
                        <th>12:00-1:00</th>
                        <th>1:00-2:00</th>
                        <th>2:00-3:00</th>
                        <th>3:00-4:00</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Monday</td>
                        <td>DS6A-203</td>
                        <td>DS6A-206</td>
                        <td>DS6A-202</td>
                        <td rowspan="5" class="tt-break">BREAK</td>
                        <td>DS6A-205</td>
                        <td>DS6A-204(Lab)</td>
                        <td>DS6A-204(Lab)</td>
                    </tr>
                    <tr>
                        <td>Tuesday</td>
                        <td>DS6A-203</td>
                        <td>DS6A-206</td>
                        <td>DS6A-202</td>
                        <td>DS6A-205</td>
                        <td>DS6A-202</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Wednesday</td>
                        <td>DS6A-203</td>
                        <td></td>
                        <td>DS6A-202</td>
                        <td>DS6A-205</td>
                        <td>DS6A-204</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Thursday</td>
                        <td>DS6A-201</td>
                        <td>DS6A-201(Lab)</td>
                        <td>DS6A-201(Lab)</td>
                        <td>DS6A-204</td>
                        <td>DS6A-204</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Friday</td>
                        <td>DS6A-201</td>
                        <td>DS6A-201</td>
                        <td>DS6A-206</td>
                        <td>DS6A-206(Lab)</td>
                        <td>DS6A-206(Lab)</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tt-wrapper">
            <table class="tt-table">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Title</th>
                        <th>Credits (L-T-P)</th>
                        <th>Faculty</th>
                        <th>Contact No.</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="tt-sub"><td colspan="6">CORE COURSES</td></tr>
                    <tr>
                        <td>DS6A-201</td>
                        <td>Design and Analysis of Algorithm</td>
                        <td>4 (3-0-2)</td>
                        <td>Ms. Ritika Verma</td>
                        <td>9399064826</td>
                        <td>ritikaverma2101@gmail.com</td>
                    </tr>
                    <tr>
                        <td>DS6A-202</td>
                        <td>Probability Distributions</td>
                        <td>4 (4-0-0)</td>
                        <td>Simran Prajapati</td>
                        <td>9713603972</td>
                        <td>prajapatisimr@gmail.com</td>
                    </tr>
                    <tr>
                        <td>DS6A-203</td>
                        <td>Computer Architecture</td>
                        <td>3 (2-1-0)</td>
                        <td>Ms. Alfia Bagwala</td>
                        <td>98278 07831</td>
                        <td>alfianaseem@gmail.com</td>
                    </tr>
                    <tr>
                        <td>DS6A-204</td>
                        <td>Numerical Methods / Engineering Economics</td>
                        <td>3 (3-0-2)</td>
                        <td>Ms. Pallavi Pandey</td>
                        <td>6263852053</td>
                        <td>pandeypallavi505@gmail.com</td>
                    </tr>
                    <tr>
                        <td>DS6A-205</td>
                        <td>Communication Skills</td>
                        <td>3 (3-0-0)</td>
                        <td>Dr. Meenu Kumar</td>
                        <td>9630272025</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>DS6A-206</td>
                        <td>Object Oriented Programming</td>
                        <td>4 (3-0-2)</td>
                        <td>Ms. Khushi Patidar</td>
                        <td>9343398724</td>
                        <td>khushipatidar293@gmail.com</td>
                    </tr>
                    <tr class="tt-sub"><td colspan="6">COMPREHENSIVE VIVA-VOCE</td></tr>
                    <tr>
                        <td></td>
                        <td>Comprehensive Viva-Voce</td>
                        <td>4</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p><strong>Class Teacher:</strong> Ms. Ritika Verma (9399064826)</p>
        <p><strong>Class Representatives:</strong></p>
        <ul>
            <li>Lakshya Malviya - 8629964173</li>
            <li>Vedant Khare - 91790 94000</li>
            <li>Yash Sanchar - 9111352963</li>
        </ul>
    </div>

    <div class="tt-semester">
        <h4>V Semester</h4>
        <p class="tt-info">Room No.: B-003 &nbsp;|&nbsp; w.e.f. 20/07/2026</p>
        <div class="tt-wrapper">
            <table class="tt-table">
                <thead>
                    <tr>
                        <th>Day</th>
                        <th>9:00-10:00</th>
                        <th>10:00-11:00</th>
                        <th>11:00-12:00</th>
                        <th>12:00-12:30</th>
                        <th>12:30-1:30</th>
                        <th>1:30-2:30</th>
                        <th>2:30-3:30</th>
                        <th>3:30-4:30</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Monday</td>
                        <td>DS6A-306(Lab)</td>
                        <td>DS6A-306(Lab)</td>
                        <td>DS6A-305</td>
                        <td rowspan="5" class="tt-break">LUNCH</td>
                        <td></td>
                        <td>DS6A-305</td>
                        <td>DS6A-301</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Tuesday</td>
                        <td>DS6A-306</td>
                        <td>DS6A-306</td>
                        <td>DS6A-305</td>
                        <td>DS6A-303</td>
                        <td>DS6A-301</td>
                        <td>DS6A-303(Lab)</td>
                        <td>DS6A-303(Lab)</td>
                    </tr>
                    <tr>
                        <td>Wednesday</td>
                        <td>DS6A-302</td>
                        <td>DS6A-304</td>
                        <td>DS6A-305</td>
                        <td></td>
                        <td>DS6A-301(Lab)</td>
                        <td>DS6A-301(Lab)</td>
                        <td>DS6A-303</td>
                    </tr>
                    <tr>
                        <td>Thursday</td>
                        <td>DS6A-302</td>
                        <td>DS6A-304</td>
                        <td>DS6A-306</td>
                        <td>DS6A-304</td>
                        <td></td>
                        <td></td>
                        <td>DS6A-303</td>
                    </tr>
                    <tr>
                        <td>Friday</td>
                        <td>DS6A-302(Lab)</td>
                        <td>DS6A-302(Lab)</td>
                        <td>DS6A-302</td>
                        <td>DS6A-304</td>
                        <td></td>
                        <td>DS6A-301</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tt-wrapper">
            <table class="tt-table">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Title</th>
                        <th>Credits (L-T-P)</th>
                        <th>Faculty</th>
                        <th>Contact No.</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="tt-sub"><td colspan="6">CORE COURSES</td></tr>
                    <tr>
                        <td>DS6A-301</td>
                        <td>Datamining and Data Warehouse</td>
                        <td>4 (3-0-2)</td>
                        <td>Mr. Rajat Yadav</td>
                        <td>9826705696</td>
                        <td>rajatyadav25009@gmail.com</td>
                    </tr>
                    <tr>
                        <td>DS6A-302</td>
                        <td>Java Programming</td>
                        <td>4 (3-0-2)</td>
                        <td>Mr. Amit Nashikkar</td>
                        <td>9826550874</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>DS6A-303</td>
                        <td>Data Engineering</td>
                        <td>4 (3-1-2)</td>
                        <td>Mr. Ayan Shah</td>
                        <td>8889873684</td>
                        <td>shahayan73684@gmail.com</td>
                    </tr>
                    <tr>
                        <td>DS6A-304</td>
                        <td>Statistical Inference</td>
                        <td>4 (3-1-0)</td>
                        <td>Dr. Priyanka Malviya</td>
                        <td>94248 78532</td>
                        <td>sarsodiapriyanka@gmail.com</td>
                    </tr>
                    <tr>
                        <td>DS6A-305</td>
                        <td>Soft Computing</td>
                        <td>4 (3-1-0)</td>
                        <td>Dr. Shishir Kumar Shandilya</td>
                        <td>9009972032</td>
                        <td>shishir.davv@gmail.com</td>
                    </tr>
                    <tr class="tt-sub"><td colspan="6">ELECTIVE COURSES (ANY ONE)</td></tr>
                    <tr>
                        <td>DS6A-306</td>
                        <td>Computer Networks</td>
                        <td>4 (3-0-2)</td>
                        <td>Mr. Surya Pratap</td>
                        <td>8889115933</td>
                        <td>palsurya15@gmail.com</td>
                    </tr>
                    <tr class="tt-sub"><td colspan="6">COMPREHENSIVE VIVA-VOCE</td></tr>
                    <tr>
                        <td>DS6A-252</td>
                        <td>Comprehensive Viva-Voce</td>
                        <td>4</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p><strong>Class Teacher:</strong> Mr. Rajat Yadav (9826705696)</p>
        <p><strong>Class Representatives:</strong></p>
        <ul>
            <li>Akshita Mishra - 8982739658</li>
            <li>Ali Asad - 8435204548</li>
        </ul>
    </div>

    <div class="tt-semester">
        <h4>VII Semester</h4>
        <p class="tt-info">Room No.: A-201 &nbsp;|&nbsp; w.e.f. 20/07/2026</p>
        <div class="tt-wrapper">
            <table class="tt-table">
                <thead>
                    <tr>
                        <th>Day</th>
                        <th>9:00-10:00</th>
                        <th>10:00-11:00</th>
                        <th>11:00-12:00</th>
                        <th>12:00-12:30</th>
                        <th>12:30-1:30</th>
                        <th>1:30-2:30</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Monday</td>
                        <td>DS6A-404 : HR</td>
                        <td>DS6A-404 : HR</td>
                        <td>DS6A-401 : KP</td>
                        <td rowspan="6" class="tt-break">Break</td>
                        <td>DS6A-405 : SKS</td>
                        <td>DS6A-403 : GA</td>
                    </tr>
                    <tr>
                        <td>Tuesday</td>
                        <td>DS6A-404 : HR</td>
                        <td>DS6A-404 : HR</td>
                        <td>DS6A-401 : KP</td>
                        <td>DS6A-405 : SKS</td>
                        <td>DS6A-406 : NB</td>
                    </tr>
                    <tr>
                        <td>Wednesday</td>
                        <td>DS6A-406 : NB</td>
                        <td>DS6A-401 : KP(Lab)</td>
                        <td>DS6A-401 : KP(Lab)</td>
                        <td>DS6A-405 : SKS</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Thursday</td>
                        <td>DS6A-406 : NB</td>
                        <td>DS6A-406 : NB</td>
                        <td>DS6A-401 : KP</td>
                        <td>DS6A-403 : GA</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Friday</td>
                        <td>DS6A-406 : NB(Lab)</td>
                        <td>DS6A-406 : NB(Lab)</td>
                        <td>DS6A-403 : GA</td>
                        <td>DS6A-403 : GA(Lab)</td>
                        <td>DS6A-403 : GA(Lab)</td>
                    </tr>
                    <tr>
                        <td>Saturday</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tt-wrapper">
            <table class="tt-table">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Title</th>
                        <th>Credits (L-T-P)</th>
                        <th>Faculty</th>
                        <th>Contact No.</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="tt-sub"><td colspan="6">CORE COURSES</td></tr>
                    <tr>
                        <td>DS6A-401</td>
                        <td>Data Visualization</td>
                        <td>4 (3-0-2)</td>
                        <td>KP : Ms. Khushi Patidar</td>
                        <td>9343398724</td>
                        <td>khushipatidar293@gmail.com</td>
                    </tr>
                    <tr>
                        <td>DS6A-402</td>
                        <td>Big Data Computing</td>
                        <td>4 (4-0-0)</td>
                        <td>NPTEL</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>DS6A-403</td>
                        <td>Cloud Computing</td>
                        <td>4 (3-0-2)</td>
                        <td>GA : Ms. Garima Agrawal</td>
                        <td>8989516924</td>
                        <td>agrawal.garima1996@gmail.com</td>
                    </tr>
                    <tr>
                        <td>DS6A-404</td>
                        <td>Forecasting Methods</td>
                        <td>4 (3-1-0)</td>
                        <td>HR : Dr. Harsh Ramgir</td>
                        <td>9826048885</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>DS6A-406</td>
                        <td>Machine Learning Using Python</td>
                        <td>4 (3-0-2)</td>
                        <td>NB : Mr. Nandkishor Buwade</td>
                        <td>9165841223</td>
                        <td>Nandkishorbuwade@gmail.com</td>
                    </tr>
                    <tr class="tt-sub"><td colspan="6">ELECTIVE COURSES (ANY ONE)</td></tr>
                    <tr>
                        <td>DS6A-405</td>
                        <td>Cryptography</td>
                        <td>3 (3-0-0)</td>
                        <td>SKS : Dr. Shishir Kumar Shandilya</td>
                        <td>9009972032</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Text Image Analytics</td>
                        <td></td>
                        <td>Not Opted</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="tt-sub"><td colspan="6">COMPREHENSIVE VIVA-VOCE</td></tr>
                    <tr>
                        <td></td>
                        <td>Comprehensive Viva-Voce</td>
                        <td>4</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p><strong>Class Teacher:</strong> Ms. Khushi Patidar (9343398724)</p>
        <p><strong>Class Representatives:</strong></p>
        <ul>
            <li>Suryansh Soni - 9977956579</li>
            <li>Sanjana Rawal - 6268343557</li>
            <li>Asit Wasnik - 8319151689</li>
        </ul>
    </div>

    <div class="tt-semester">
        <h4>IX Semester</h4>
        <p class="tt-info">Room No.: B-006 &nbsp;|&nbsp; w.e.f. 20/07/2026</p>
        <div class="tt-wrapper">
            <table class="tt-table">
                <thead>
                    <tr>
                        <th>Day</th>
                        <th>10:00-11:00</th>
                        <th>11:00-12:00</th>
                        <th>12:00-1:00</th>
                        <th>1:30-2:30</th>
                        <th>2:30-3:30</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Monday</td>
                        <td>DS6A-501 AB(Lab)</td>
                        <td>DS6A-501 AB(Lab)</td>
                        <td>DS6A-503 GA</td>
                        <td>DS6A-509 JK(Lab)</td>
                        <td>DS6A-509 JK(Lab)</td>
                    </tr>
                    <tr>
                        <td>Tuesday</td>
                        <td>DS6A-511</td>
                        <td>DS6A-501 AB</td>
                        <td>DS6A-511</td>
                        <td>DS6A-507 SKS</td>
                        <td>DS6A-509 JK</td>
                    </tr>
                    <tr>
                        <td>Wednesday</td>
                        <td>DS6A-511</td>
                        <td>DS6A-501 AB</td>
                        <td>DS6A-503 GA</td>
                        <td>DS6A-507 SKS</td>
                        <td>DS6A-503 GA</td>
                    </tr>
                    <tr>
                        <td>Thursday</td>
                        <td>DS6A-511</td>
                        <td>DS6A-507 SKS</td>
                        <td>DS6A-501 AB</td>
                        <td>DS6A-503 GA(Lab)</td>
                        <td>DS6A-503 GA(Lab)</td>
                    </tr>
                    <tr>
                        <td>Friday</td>
                        <td></td>
                        <td>DS6A-507 SKS(Lab)</td>
                        <td>DS6A-507 SKS(Lab)</td>
                        <td>DS6A-509 JK</td>
                        <td>DS6A-509 JK</td>
                    </tr>
                    <tr>
                        <td>Saturday</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Sunday</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tt-wrapper">
            <table class="tt-table">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Title</th>
                        <th>Credits (L-T-P)</th>
                        <th>Faculty</th>
                        <th>Contact No.</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="tt-sub"><td colspan="6">CORE COURSES</td></tr>
                    <tr>
                        <td>DS6A-501</td>
                        <td>Natural Language Processing</td>
                        <td>4 (3-0-2)</td>
                        <td>AB : Ms. Alfia Bagwala</td>
                        <td>98278 07831</td>
                        <td>alfianaseem@gmail.com</td>
                    </tr>
                    <tr>
                        <td>DS6A-503</td>
                        <td>Agentic AI</td>
                        <td>4 (3-0-1)</td>
                        <td>GA : Ms. Garima Agrawal</td>
                        <td>8989516924</td>
                        <td>agrawal.garima1998@gmail.com</td>
                    </tr>
                    <tr>
                        <td>DS6A-505</td>
                        <td>Artificial Intelligence: Foundations and Algorithms</td>
                        <td>4 (3-0-2)</td>
                        <td>NPTEL</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>DS6A-507</td>
                        <td>High Performance Computing</td>
                        <td>4 (3-0-2)</td>
                        <td>SKS : Dr. Shishir Kumar Shandilya</td>
                        <td>9009972032</td>
                        <td>shishir.davv@gmail.com</td>
                    </tr>
                    <tr>
                        <td>DS6A-509</td>
                        <td>Multivariate Analytics</td>
                        <td>4 (3-0-2)</td>
                        <td>JK : Dr. Jalaj Katare</td>
                        <td>9893204536</td>
                        <td>dr.jalajkatare@gmail.com</td>
                    </tr>
                    <tr>
                        <td>DS6A-511</td>
                        <td>Project Report Writing</td>
                        <td>3 (3-0-0)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>DS6A-513</td>
                        <td>Minor Project</td>
                        <td>6</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="tt-sub"><td colspan="6">COMPREHENSIVE VIVA-VOCE</td></tr>
                    <tr>
                        <td></td>
                        <td>Comprehensive Viva-Voce</td>
                        <td>4</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="tt-sub"><td colspan="2">Total Credits</td><td colspan="4">33</td></tr>
                </tbody>
            </table>
        </div>
        <p><strong>Class Teacher:</strong> Ms. Garima Agrawal (8989516924)</p>
        <p><strong>Class Representatives:</strong></p>
        <ul>
            <li>Atharva Bhawsar - 8839091932</li>
            <li>Ayesha Khan - 9171732729</li>
        </ul>
    </div>

    <p class="tt-info" style="margin-top:25px;">Dr. Govind Maheshwari, Head, School of Data Science and Forecasting, Devi Ahilya Vishwavidyalaya, Takshashila Campus, Khandwa Road, Indore (M.P.)</p>
</div>


  </div>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
