<?php
/**
 * FIT Competition 2026 - Interactive Timeline Component
 * Reusable across all category pages
 * Data stored as PHP array for easy editing
 */

$timelineItems = [
    [
        'title' => 'Pendaftaran & Pengumpulan Proposal',
        'date' => '1 Mei – 16 Juni 2026',
        'location' => 'Online',
        'icon' => 'bi-pencil-square'
    ],
    [
        'title' => 'Penilaian Proposal',
        'date' => '17 Juni – 21 Juni 2026',
        'location' => '',
        'icon' => 'bi-clipboard-check'
    ],
    [
        'title' => 'Pengumuman Finalis',
        'date' => '23 Juni 2026',
        'location' => '',
        'icon' => 'bi-megaphone'
    ],
    [
        'title' => 'Pendaftaran Ulang',
        'date' => '23 Juni – 30 Juni 2026',
        'location' => '',
        'icon' => 'bi-person-check'
    ],
    [
        'title' => 'Seminar & Technical Meeting',
        'date' => '7 Juli 2026',
        'location' => 'FTI UKSW',
        'icon' => 'bi-people'
    ],
    [
        'title' => 'Babak Final (Coding)',
        'date' => '8 Juli 2026',
        'location' => 'FTI UKSW',
        'icon' => 'bi-code-slash'
    ],
    [
        'title' => 'Babak Final (Presentasi) & Pengumuman Pemenang',
        'date' => '9 Juli 2026',
        'location' => 'FTI UKSW',
        'icon' => 'bi-trophy'
    ],
];
?>

<!-- Timeline Section -->
<section class="timeline-section" id="timeline">
    <div class="container">
        <div class="section-title-wrapper fade-in-up">
            <h2 class="section-title"><span class="gradient-text">Timeline</span></h2>
            <div class="title-line"></div>
        </div>

        <div class="timeline">
            <?php foreach ($timelineItems as $index => $item): ?>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content glass-light">
                    <div class="timeline-date">
                        <i class="bi <?php echo $item['icon']; ?> me-1"></i>
                        <?php echo $item['date']; ?>
                    </div>
                    <div class="timeline-title"><?php echo $item['title']; ?></div>
                    <?php if (!empty($item['location'])): ?>
                    <div class="timeline-location">
                        <i class="bi bi-geo-alt me-1"></i><?php echo $item['location']; ?>
                    </div>
                    <?php endif; ?>
                </div>
                <span class="timeline-number"><?php echo str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
