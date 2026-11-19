/**
 * SDSF Live - School of Data Science & Forecasting
 * Frontend Application Interactivity Script
 */

document.addEventListener('DOMContentLoaded', function () {
  initClock();
  initNoticeData();
  initCategoryFromUrl();
});

function initCategoryFromUrl() {
  const urlParams = new URLSearchParams(window.location.search);
  const cat = urlParams.get('category');
  if (cat) {
    const matchBtn = document.querySelector(`.sec-nav-link[data-category="${cat}"]`);
    filterByCategory(cat, matchBtn);
  }
}

// Live Campus Clock updater (Matches SDSF Chronicle theme in Image 2)
function initClock() {
  function updateTime() {
    const now = new Date();
    
    // Time formatted as HH:MM:SS
    const hours = String(now.getHours()).padStart(2, '0');
    const minutes = String(now.getMinutes()).padStart(2, '0');
    const seconds = String(now.getSeconds()).padStart(2, '0');
    const clockEl = document.getElementById('masthead-live-clock');
    if (clockEl) {
      clockEl.textContent = `${hours}:${minutes}:${seconds}`;
    }

    // Day of the week
    const days = ['SUNDAY', 'MONDAY', 'TUESDAY', 'WEDNESDAY', 'THURSDAY', 'FRIDAY', 'SATURDAY'];
    const dayEl = document.getElementById('masthead-day');
    if (dayEl) {
      dayEl.textContent = days[now.getDay()];
    }

    // Full Date String
    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    const dateStrEl = document.getElementById('live-date-str');
    if (dateStrEl) {
      dateStrEl.textContent = now.toLocaleDateString('en-US', options);
    }
  }

  updateTime();
  setInterval(updateTime, 1000);
}

// Notice modal data lookup
let noticesCache = [];

function initNoticeData() {
  const items = document.querySelectorAll('.clean-notice-card, .notice-card-item');
  noticesCache = [];
  items.forEach(el => {
    noticesCache.push({
      element: el,
      id: el.getAttribute('data-id'),
      category: el.getAttribute('data-category'),
      title: el.querySelector('.clean-notice-title, .notice-main-title')?.textContent.trim() || '',
      desc: el.querySelector('.notice-description')?.textContent.trim() || '',
      author: el.querySelector('.notice-author')?.textContent.trim() || 'SDSF Academic Controller',
      date: el.querySelector('.notice-date')?.textContent.trim() || 'November 2026',
      badge: el.querySelector('.clean-notice-badge, .badge-pill')?.textContent.trim() || ''
    });
  });
}

// Topic & Category Filtering
function filterByCategory(category, clickedElement) {
  // Update sidebar active classes
  document.querySelectorAll('.sec-nav-link').forEach(link => link.classList.remove('active'));
  if (clickedElement) {
    clickedElement.classList.add('active');
  }

  // Also sync top chips if matching
  document.querySelectorAll('.topic-chip').forEach(chip => {
    chip.classList.toggle('active', chip.textContent.toLowerCase().includes(category) || (category === 'all' && chip.textContent.includes('All')));
  });

  applyFilters(category, document.getElementById('live-notices-search')?.value || '');
}

function filterByTopic(topic, clickedChip) {
  document.querySelectorAll('.topic-chip').forEach(c => c.classList.remove('active'));
  if (clickedChip) {
    clickedChip.classList.add('active');
  }

  // Also sync left sidebar if matching
  document.querySelectorAll('.sec-nav-link').forEach(link => {
    const cat = link.getAttribute('data-category');
    link.classList.toggle('active', cat === topic);
  });

  applyFilters(topic, document.getElementById('live-notices-search')?.value || '');
}

function handleLiveSearch(query) {
  const activeSidebar = document.querySelector('.sec-nav-link.active');
  const activeCategory = activeSidebar ? activeSidebar.getAttribute('data-category') : 'all';
  applyFilters(activeCategory, query);
}

function triggerSearch() {
  const query = document.getElementById('live-notices-search')?.value || '';
  handleLiveSearch(query);
}

function applyFilters(category, query) {
  const q = query.toLowerCase().trim();
  let visibleCount = 0;

  noticesCache.forEach(item => {
    const matchesCat = (category === 'all' || !category || item.category === category);
    const matchesQuery = (!q || item.title.toLowerCase().includes(q) || item.desc.toLowerCase().includes(q) || item.author.toLowerCase().includes(q));

    if (matchesCat && matchesQuery) {
      item.element.style.display = 'block';
      visibleCount++;
    } else {
      item.element.style.display = 'none';
    }
  });

  // Update counter badge on header if present
  const countBadge = document.querySelector('.total-notices-pill');
  if (countBadge) {
    countBadge.textContent = visibleCount;
  }
}

// Login Modal
function openLoginModal() {
  const modal = document.getElementById('loginModal');
  if (modal) modal.classList.add('active');
}

function closeLoginModal() {
  const modal = document.getElementById('loginModal');
  if (modal) modal.classList.remove('active');
}

function handleLoginSubmit(e) {
  e.preventDefault();
  alert('Redirecting to DAVV Takshila Single Sign-On (SSO) Authentication Portal...');
  closeLoginModal();
}

// Notice Details Modal
function toggleNoticeModal(id) {
  const notice = noticesCache.find(n => String(n.id) === String(id));
  if (!notice) return;

  const modal = document.getElementById('noticeDetailsModal');
  const title = document.getElementById('modalNoticeTitle');
  const meta = document.getElementById('modalNoticeMeta');
  const body = document.getElementById('modalNoticeBody');

  if (title) title.textContent = notice.title;
  if (meta) meta.innerHTML = `<strong>Issued By:</strong> ${notice.author} &bull; <strong>Status:</strong> Active Circular`;
  if (body) body.textContent = notice.desc || 'Official academic circular document uploaded. You can view or download the authorized notification PDF below.';

  if (modal) modal.classList.add('active');
}

function closeNoticeModal() {
  const modal = document.getElementById('noticeDetailsModal');
  if (modal) modal.classList.remove('active');
}

// Close modals when clicking backdrop
window.onclick = function (event) {
  if (event.target.classList.contains('modal-overlay')) {
    event.target.classList.remove('active');
  }
};

// Timetable Page Interactivity (Image 5 logic)
function applyTimetableFilter() {
  const session = document.getElementById('tt-session')?.value || 'All';
  const semester = document.getElementById('tt-semester')?.value || 'All';
  const program = document.getElementById('tt-program')?.value || 'All';
  const branch = document.getElementById('tt-branch')?.value || 'All';

  alert(`Timetable Query Applied:\nSession: ${session}\nSemester: ${semester}\nProgram: ${program}\nBranch: ${branch}\nStatus: No timetables published yet for the selected query.`);
}

function resetTimetableFilter() {
  const selects = document.querySelectorAll('.timetable-filter-box select');
  selects.forEach(sel => sel.selectedIndex = 0);
  alert('Timetable filters have been reset.');
}

function showCoordinators() {
  alert('Class Coordinators (SDSF DAVV):\n1. M.Sc. Data Science: Dr. Ajay Kumar\n2. M.Tech AI & Data Science: Dr. Preeti Saxena\n3. M.Tech Executive: Dr. V. B. Gupta\nContact: coordinator-sdsf@dauniv.ac.in');
}
