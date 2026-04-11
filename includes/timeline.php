<?php

/**
 * FIT Competition 2026 - Interactive Timeline Component
 * Reusable across all category pages
 * Set $timelineCategory before including this file:
 *   'web' | 'mobile' | 'data' | 'cyber'
 */

// --- Shared base timeline items ---
$baseItems = [
    'registration' => [
        'title'    => 'Registration & Proposal Submission',
        'date'     => '1 May – 16 June 2026',
        'location' => 'Online',
        'icon'     => 'bi-pencil-square'
    ],
    'proposal_review' => [
        'title'    => 'Proposal Review',
        'date'     => '17 June – 21 June 2026',
        'location' => '',
        'icon'     => 'bi-clipboard-check'
    ],
    'finalist_announcement' => [
        'title'    => 'Finalist Announcement',
        'date'     => '23 June 2026',
        'location' => '',
        'icon'     => 'bi-megaphone'
    ],
    'reregistration' => [
        'title'    => 'Re-registration',
        'date'     => '23 June – 30 June 2026',
        'location' => '',
        'icon'     => 'bi-person-check'
    ],
    'seminar' => [
        'title'    => 'Seminar & Technical Meeting',
        'date'     => '7 July 2026',
        'location' => 'FTI UKSW',
        'icon'     => 'bi-people'
    ],
    'final_coding' => [
        'title'    => 'Final Round (Coding)',
        'date'     => '8 July 2026',
        'location' => 'FTI UKSW',
        'icon'     => 'bi-code-slash'
    ],
    'final_presentation' => [
        'title'    => 'Final Round (Presentation) & Winner Announcement',
        'date'     => '9 July 2026',
        'location' => 'FTI UKSW',
        'icon'     => 'bi-trophy'
    ],
];

// --- Build timeline per category ---
$timelineCategory = $timelineCategory ?? 'web';

switch ($timelineCategory) {

    case 'data':
        $timelineItems = [
            array_merge($baseItems['registration'], [
                'date' => '1 May – 12 June 2026',
            ]),
            [
                'title'    => 'Preliminary Round',
                'date'     => '12 June – 16 June 2026',
                'location' => '',
                'icon'     => 'bi-bar-chart-steps',
            ],
            $baseItems['proposal_review'],
            $baseItems['finalist_announcement'],
            $baseItems['reregistration'],
            $baseItems['seminar'],
            $baseItems['final_coding'],
            $baseItems['final_presentation'],
        ];
        break;

    case 'cyber':
        $timelineItems = [
            $baseItems['registration'],
            [
                'title'    => 'Preliminary Round',
                'date'     => '17 June – 21 June 2026',
                'location' => '',
                'icon'     => 'bi-shield-lock',
            ],
            $baseItems['finalist_announcement'],
            $baseItems['reregistration'],
            $baseItems['seminar'],
            $baseItems['final_coding'],
            $baseItems['final_presentation'],
        ];
        break;

    case 'web':
    case 'mobile':
    default:
        $timelineItems = array_values($baseItems);
        break;
}
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