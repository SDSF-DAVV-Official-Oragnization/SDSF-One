<?php
// faculty.php - SDSF Live Faculty Profiles
$page_title = 'Faculty Profiles';
$current_tab = 'faculty';

require_once __DIR__ . '/includes/header.php';

$faculty_list = [
    [
        'name' => 'Dr. V. B. Gupta',
        'role' => 'Professor & Head of Department',
        'specialization' => 'Predictive Analytics, Statistical Modeling, Machine Learning',
        'email' => 'vbgupta@dauniv.ac.in',
        'experience' => '25+ Years Experience'
    ],
    [
        'name' => 'Dr. Preeti Saxena',
        'role' => 'Professor & Ph.D. Coordinator',
        'specialization' => 'Deep Learning, Big Data Architectures, Natural Language Processing',
        'email' => 'psaxena@dauniv.ac.in',
        'experience' => '20+ Years Experience'
    ],
    [
        'name' => 'Dr. Uma Bhatt',
        'role' => 'Associate Professor & Exam In-charge',
        'specialization' => 'Data Mining, Operations Research, Forecasting Systems',
        'email' => 'ubhatt@dauniv.ac.in',
        'experience' => '18+ Years Experience'
    ],
    [
        'name' => 'Dr. Ajay Kumar',
        'role' => 'Assistant Professor & Lab In-charge',
        'specialization' => 'Computer Vision, Reinforcement Learning, Cloud Data Engineering',
        'email' => 'akumar@dauniv.ac.in',
        'experience' => '12+ Years Experience'
    ]
];
?>

<main class="main-content-section">
  <div class="content-placeholder-card">
    <div class="content-placeholder-header">
      <h2>Department Faculty Directory</h2>
      <p>School of Data Science and Forecasting &bull; Devi Ahilya Vishwavidyalaya, Indore</p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
      <?php foreach ($faculty_list as $f): ?>
        <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 20px; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
          <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 12px;">
            <div style="width: 48px; height: 48px; border-radius: 50%; background: #eff6ff; color: #2563eb; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.1rem;">
              <?php echo substr($f['name'], 4, 1); ?>
            </div>
            <div>
              <h3 style="font-size: 1.05rem; font-weight: 700; color: #0f172a;"><?php echo htmlspecialchars($f['name']); ?></h3>
              <p style="font-size: 0.78rem; font-weight: 600; color: #0d9488;"><?php echo htmlspecialchars($f['role']); ?></p>
            </div>
          </div>
          <p style="font-size: 0.82rem; color: #475569; margin-bottom: 8px;"><strong>Areas:</strong> <?php echo htmlspecialchars($f['specialization']); ?></p>
          <p style="font-size: 0.78rem; color: #64748b;"><strong>Email:</strong> <?php echo htmlspecialchars($f['email']); ?></p>
          <p style="font-size: 0.75rem; color: #94a3b8; margin-top: 4px;"><?php echo htmlspecialchars($f['experience']); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
