<?php
// faculty.php - SDSF Live Faculty Profiles
// Content synced from the official SDSF website (academics.php -> Meet Our Faculty).
$page_title = 'Faculty Profiles';
$current_tab = 'faculty';

require_once __DIR__ . '/includes/header.php';

$faculty_list = [
    [
        'name'       => 'Dr. Govind Maheshwari',
        'head_dark'  => 'Head',
        'head_light' => 'of Department',
        'eyebrow'    => "HOD's Desk",
        'role'       => 'Professor & Head of Department',
        'photo'      => 'Photoes/faculty/govind-maheshwari.png',
        'email'      => 'gmaheshwari@ietdavv.edu.in',
        'phone'      => '+91 8982177634',
        'bio'        => [
            'At the School of Data Science and Forecasting (SDSF), our commitment lies in achieving excellence across all facets of academia and technical education to enhance the learning and research experience for our students. We are dedicated to promoting academic distinction, fostering innovative research, and nurturing continuous intellectual growth throughout the department.',
            'Our priorities include modernizing the curriculum to reflect global data science trends, predictive analytics, and AI industry needs, fostering interdisciplinary programs, and integrating skill-based education. We aim to cultivate a robust environment where analytical curiosity meets cutting-edge computation.',
        ],
    ],
    [
        'name'       => 'Dr. Shishir Kumar Shandilya',
        'head_dark'  => 'Dr. Shishir',
        'head_light' => 'Kumar Shandilya',
        'eyebrow'    => 'Faculty Profile',
        'role'       => 'Associate Professor • Specialisation: Data Privacy, Cyber Security',
        'photo'      => 'Photoes/faculty/shishir-shandilya.png',
        'email'      => 'shishir.davv@gmail.com',
        'phone'      => '',
        'bio'        => [
            'Dr. Shishir Kumar Shandilya specializes in Cyber Security, Data Privacy, and Nature-Inspired Computing. He actively mentors students and research scholars in building resilient data architectures, secure cryptographic protocols, and intelligent defensive frameworks against modern cyber threats.',
            'With extensive academic and research experience, his initiatives focus on bridging theoretical algorithmic modeling with practical cyber intelligence and ethical data practices to address critical technological challenges.',
        ],
    ],
    [
        'name'       => 'Dr. Vandit Hedau',
        'head_dark'  => 'Dr. Vandit',
        'head_light' => 'Hedau',
        'eyebrow'    => 'Faculty Profile',
        'role'       => 'Associate Professor • Specialisation: Supply Chain, Project Management',
        'photo'      => 'Photoes/faculty/vandit-hedau.jpeg',
        'email'      => 'vhedau.fsp@dauniv.ac.in',
        'phone'      => '',
        'bio'        => [
            'Dr. Vandit Hedau specializes in Supply Chain Management, Operations Research, and Project Management. His academic work and teachings center on integrating analytical rigor and quantitative forecasting into modern business workflows.',
            'He guides students in designing data-driven supply chain networks, risk evaluation models, and strategic forecasting frameworks that empower organizations to optimize complex operations.',
        ],
    ],
    [
        'name'       => 'Dr. Anupam Jain',
        'head_dark'  => 'Dr. Anupam',
        'head_light' => 'Jain',
        'eyebrow'    => 'Faculty Profile',
        'role'       => 'Professor • Specialisation: Ancient Indian Mathematics, Operations Research',
        'photo'      => 'Photoes/faculty/anupam-jain.jpg',
        'email'      => 'anupamjain3@rediffmail.com',
        'phone'      => '',
        'bio'        => [
            'Dr. Anupam Jain is a senior Professor with profound expertise in Operations Research, Mathematical Optimization, and Ancient Indian Mathematics. He brings deep theoretical mastery and analytical precision to predictive modeling and computational science.',
            'His work enriches students with foundational mathematical insights, algorithmic problem-solving techniques, and historical perspectives on computational mathematics.',
        ],
    ],
];

$resource_sections = [
    'Non-Teaching Staff' => [
        ['label' => 'List of Non-Teaching Staff Members', 'href' => 'https://drive.google.com/file/d/1ShtUR4CUnFtnsCf5hqC_MMzNgWLl9Pg4/view?usp=sharing'],
        ['label' => 'Departmental Office & Technical Support Cell', 'href' => 'mailto:sdsf.davv@gmail.com'],
    ],
    'Visiting Faculty' => [
        ['label' => 'List of Visiting Faculty Members', 'href' => 'https://drive.google.com/file/d/1JzKcXU2IASK-Ro4XD8ZhSsSrv4nTCtrJ/view?usp=sharing'],
        ['label' => 'Industry Experts & Guest Lecturers (Data Science & AI)', 'href' => 'mailto:govind_maheshwari2001@yahoo.com'],
    ],
    'Important Documents' => [
        ['label' => 'Internship Information & Guidelines', 'href' => 'https://drive.google.com/file/d/1nOvBq1VpLcgJRAmseQmiuPPDNsnB_AEF/view?usp=sharing'],
        ['label' => 'Guidelines for Major Project', 'href' => 'https://drive.google.com/file/d/13SsEcN1frVuaEt3G8zXF5Kp2n8YW6MpW/view?usp=sharing'],
        ['label' => 'Training and Placement Cell Details', 'href' => 'https://drive.google.com/file/d/1zEqhvDOp7T6sul2CLxPLWQtCbMlOfJad/view?usp=sharing'],
    ],
];

function e($s) { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }
?>

<main class="main-content-section">
  <div class="content-placeholder-card">
    <div class="content-placeholder-header">
      <h2>Meet Our Faculty</h2>
      <p>School of Data Science and Forecasting &bull; Devi Ahilya Vishwavidyalaya, Indore</p>
    </div>

    <section class="faculty-section">
      <?php foreach ($faculty_list as $f): ?>
        <article class="faculty-spotlight-card">
          <div class="spotlight-visual">
            <div class="spotlight-dots"></div>
            <div class="spotlight-backdrop"></div>
            <div class="spotlight-photo-frame">
              <img src="<?php echo e($f['photo']); ?>" alt="<?php echo e($f['name']); ?>" class="spotlight-photo" loading="lazy">
            </div>
          </div>

          <div class="spotlight-content">
            <div class="spotlight-eyebrow"><?php echo e($f['eyebrow']); ?></div>
            <h3 class="spotlight-heading">
              <span class="head-dark"><?php echo e($f['head_dark']); ?></span>
              <span class="head-accent"><?php echo e($f['head_light']); ?></span>
            </h3>
            <div class="spotlight-message">
              <?php foreach ($f['bio'] as $para): ?>
                <p><?php echo e($para); ?></p>
              <?php endforeach; ?>
            </div>
            <div class="spotlight-footer">
              <div class="faculty-name"><?php echo e($f['name']); ?></div>
              <div class="faculty-role"><?php echo e($f['role']); ?></div>
              <div class="faculty-contact-row">
                <span class="contact-entry">
                  <svg fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/></svg>
                  <a href="mailto:<?php echo e($f['email']); ?>"><?php echo e($f['email']); ?></a>
                </span>
                <?php if (!empty($f['phone'])): ?>
                  <span class="contact-divider">&bull;</span>
                  <span class="contact-entry">
                    <svg fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                    <a href="tel:<?php echo e(str_replace(' ', '', $f['phone'])); ?>"><?php echo e($f['phone']); ?></a>
                  </span>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </article>
      <?php endforeach; ?>
    </section>

    <?php foreach ($resource_sections as $heading => $links): ?>
      <section class="faculty-resource-block">
        <h2 class="faculty-resource-heading"><?php echo e($heading); ?></h2>
        <div class="faculty-resource-list">
          <?php foreach ($links as $link): $external = strpos($link['href'], 'http') === 0; ?>
            <a class="faculty-resource-item" href="<?php echo e($link['href']); ?>"<?php echo $external ? ' target="_blank" rel="noopener"' : ''; ?>>
              <span class="faculty-resource-bullet" aria-hidden="true"></span>
              <?php echo e($link['label']); ?>
            </a>
          <?php endforeach; ?>
        </div>
      </section>
    <?php endforeach; ?>
  </div>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
