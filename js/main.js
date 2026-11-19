/**
 * SDSF Live - School of Data Science & Forecasting
 * Frontend Application Interactivity Script
 */

document.addEventListener('DOMContentLoaded', function () {
  initClock();
  initNoticeData();
  initCategoryFromUrl();
  initPlacementGallery();
  initDropdowns();
});

// Dropdown menu behavior for TIME TABLE & Header navigation
function initDropdowns() {
  document.addEventListener('click', function (e) {
    const toggle = e.target.closest('.chronicle-dropdown-toggle');
    const dropdown = e.target.closest('.chronicle-dropdown');

    if (toggle && dropdown) {
      e.preventDefault();
      e.stopPropagation();
      const menu = dropdown.querySelector('.chronicle-dropdown-menu');
      const wasOpen = dropdown.classList.contains('open');
      document.querySelectorAll('.chronicle-dropdown.open').forEach(d => {
        d.classList.remove('open');
        d.querySelector('.chronicle-dropdown-menu')?.classList.remove('show');
        d.querySelector('.chronicle-dropdown-toggle')?.setAttribute('aria-expanded', 'false');
      });
      if (!wasOpen) {
        dropdown.classList.add('open');
        if (menu) menu.classList.add('show');
        toggle.setAttribute('aria-expanded', 'true');
      }
    } else if (!e.target.closest('.chronicle-dropdown-menu')) {
      document.querySelectorAll('.chronicle-dropdown.open').forEach(d => {
        d.classList.remove('open');
        d.querySelector('.chronicle-dropdown-menu')?.classList.remove('show');
        d.querySelector('.chronicle-dropdown-toggle')?.setAttribute('aria-expanded', 'false');
      });
    }
  });

  // Handle dropdown item click on timetable page
  document.querySelectorAll('.chronicle-dropdown-item').forEach(item => {
    item.addEventListener('click', function (e) {
      const href = this.getAttribute('href') || '';
      document.querySelectorAll('.chronicle-dropdown.open').forEach(d => {
        d.classList.remove('open');
        d.querySelector('.chronicle-dropdown-menu')?.classList.remove('show');
      });

      if ((window.location.pathname.endsWith('timetable.html') || window.location.pathname.endsWith('/timetable')) && href.includes('#')) {
        const targetId = href.split('#')[1];
        const targetEl = document.getElementById(targetId);
        if (targetEl) {
          e.preventDefault();
          targetEl.scrollIntoView({ behavior: 'smooth', block: 'start' });
          if (history.pushState) {
            history.pushState(null, '', `#${targetId}`);
          }
        }
      }
    });
  });

  // Handle URL query parameters or hash on timetable page
  if (window.location.pathname.includes('timetable')) {
    const hash = window.location.hash;
    const urlParams = new URLSearchParams(window.location.search);
    const type = urlParams.get('type') || (hash ? hash.replace('#', '') : null);
    let targetEl = null;

    if (type === 'academic' || hash === '#academic-timetable') {
      targetEl = document.getElementById('academic-timetable') || document.getElementById('academic-tt-details');
    } else if (type === 'exam' || type === 'examination' || hash === '#examination-timetable') {
      targetEl = document.getElementById('examination-timetable') || document.getElementById('exam-tt-details');
    }

    if (targetEl) {
      setTimeout(() => {
        targetEl.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }, 150);
    }
  }
}

// Function to switch between Academic and Examination timetables
function selectTimetableType(type) {
  const academicDetails = document.getElementById('academic-timetable') || document.getElementById('academic-tt-details');
  const examDetails = document.getElementById('examination-timetable') || document.getElementById('exam-tt-details');

  // Close open dropdowns
  document.querySelectorAll('.chronicle-dropdown.open').forEach(d => {
    d.classList.remove('open');
    d.querySelector('.chronicle-dropdown-menu')?.classList.remove('show');
  });

  if (type === 'academic' && academicDetails) {
    academicDetails.scrollIntoView({ behavior: 'smooth', block: 'start' });
  } else if ((type === 'exam' || type === 'examination') && examDetails) {
    examDetails.scrollIntoView({ behavior: 'smooth', block: 'start' });
  }
}

// Simple and formal timetable filter by Course and Semester
function filterTimetable() {
  const course = document.getElementById('ttFilterCourse')?.value || 'all';
  const sem = document.getElementById('ttFilterSem')?.value || 'all';

  const semBlocks = document.querySelectorAll('.tt-semester');
  semBlocks.forEach(block => {
    const blockCourse = block.getAttribute('data-course');
    const blockSem = block.getAttribute('data-sem');

    const courseMatch = (course === 'all' || blockCourse === course);
    const semMatch = (sem === 'all' || blockSem === sem);

    if (courseMatch && semMatch) {
      block.style.display = '';
    } else {
      block.style.display = 'none';
    }
  });

  // Toggle visibility of parent sections if all child semester blocks are filtered out
  document.querySelectorAll('.tt-section').forEach(section => {
    const allSemesters = section.querySelectorAll('.tt-semester');
    if (allSemesters.length > 0) {
      const visibleSemesters = Array.from(allSemesters).filter(s => s.style.display !== 'none');
      section.style.display = visibleSemesters.length > 0 ? '' : 'none';
    }
  });
}

function resetTimetableFilter() {
  const courseSelect = document.getElementById('ttFilterCourse');
  const semSelect = document.getElementById('ttFilterSem');
  if (courseSelect) courseSelect.value = 'all';
  if (semSelect) semSelect.value = 'all';
  filterTimetable();
}

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

// Placement poster and campus photo viewer
function initPlacementGallery() {
  const viewer = document.getElementById('placementLightbox');
  if (!viewer) return;

  const title = document.getElementById('placementLightboxTitle');
  const count = document.getElementById('placementLightboxCount');
  const image = document.getElementById('placementLightboxImage');
  const thumbnails = document.getElementById('placementLightboxThumbnails');
  const previousButton = viewer.querySelector('[data-gallery-prev]');
  const nextButton = viewer.querySelector('[data-gallery-next]');
  let galleryItems = [];
  let activeIndex = 0;
  let previousFocus = null;

  function renderGallery() {
    const item = galleryItems[activeIndex];
    if (!item) return;
    image.src = item.src;
    image.alt = item.alt || title.textContent;
    count.textContent = `${activeIndex + 1} / ${galleryItems.length}`;
    title.textContent = viewer.dataset.galleryTitle || '';
    thumbnails.replaceChildren();
    thumbnails.hidden = galleryItems.length < 2;
    previousButton.classList.toggle('is-hidden', galleryItems.length < 2);
    nextButton.classList.toggle('is-hidden', galleryItems.length < 2);

    galleryItems.forEach((galleryItem, index) => {
      const thumbnail = document.createElement('button');
      thumbnail.type = 'button';
      thumbnail.className = 'placement-lightbox-thumbnail';
      thumbnail.classList.toggle('active', index === activeIndex);
      thumbnail.setAttribute('aria-label', `View image ${index + 1} of ${galleryItems.length}`);
      thumbnail.setAttribute('aria-current', index === activeIndex ? 'true' : 'false');
      const thumbnailImage = document.createElement('img');
      thumbnailImage.src = galleryItem.src;
      thumbnailImage.alt = '';
      thumbnail.appendChild(thumbnailImage);
      thumbnail.addEventListener('click', () => {
        activeIndex = index;
        renderGallery();
        thumbnails.querySelector('.active')?.focus();
      });
      thumbnails.appendChild(thumbnail);
    });
    thumbnails.querySelector('.active')?.scrollIntoView({ block: 'nearest', inline: 'nearest' });
  }

  function openGallery(trigger) {
    previousFocus = trigger;
    viewer.dataset.galleryTitle = trigger.dataset.galleryTitle || 'Campus Gallery';
    if (trigger.dataset.galleryScope === 'orange') {
      const sourceItems = trigger.closest('.placement-story-card')?.querySelectorAll('[data-gallery-item]') || [];
      galleryItems = Array.from(sourceItems, source => ({
        src: source.dataset.gallerySrc,
        alt: source.dataset.galleryAlt || ''
      }));
    } else {
      galleryItems = [{
        src: trigger.dataset.gallerySrc,
        alt: trigger.dataset.galleryAlt || viewer.dataset.galleryTitle
      }];
    }
    galleryItems = galleryItems.filter(item => item.src);
    if (!galleryItems.length) return;

    activeIndex = 0;
    viewer.hidden = false;
    viewer.setAttribute('aria-hidden', 'false');
    document.body.classList.add('placement-gallery-open');
    renderGallery();
    viewer.querySelector('[data-gallery-close]:not(.placement-lightbox-backdrop)')?.focus();
  }

  function closeGallery() {
    viewer.hidden = true;
    viewer.setAttribute('aria-hidden', 'true');
    document.body.classList.remove('placement-gallery-open');
    image.removeAttribute('src');
    if (document.fullscreenElement === viewer) document.exitFullscreen?.();
    previousFocus?.focus();
  }

  function showImage(offset) {
    if (!galleryItems.length) return;
    activeIndex = (activeIndex + offset + galleryItems.length) % galleryItems.length;
    renderGallery();
  }

  document.addEventListener('click', event => {
    const openButton = event.target.closest('[data-gallery-open]');
    if (openButton) {
      openGallery(openButton);
      return;
    }
    if (event.target.closest('[data-gallery-close]')) closeGallery();
    if (event.target.closest('[data-gallery-prev]')) showImage(-1);
    if (event.target.closest('[data-gallery-next]')) showImage(1);
    if (event.target.closest('[data-gallery-fullscreen]')) {
      if (document.fullscreenElement) document.exitFullscreen?.();
      else viewer.requestFullscreen?.();
    }
  });

  document.addEventListener('keydown', event => {
    if (viewer.hidden) return;
    if (event.key === 'Escape') closeGallery();
    if (event.key === 'ArrowLeft') showImage(-1);
    if (event.key === 'ArrowRight') showImage(1);
  });
}