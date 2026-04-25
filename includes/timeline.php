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

        <div class="tl-wrapper fade-in-up">
            <div class="tl-scroll-track">
                <?php foreach ($timelineItems as $index => $item):
                    $stepNum = str_pad($index + 1, 2, '0', STR_PAD_LEFT);
                    $isLast  = ($index === count($timelineItems) - 1);
                ?>
                <div class="tl-step<?= $isLast ? ' tl-step--last' : '' ?>">
                    <!-- connector line -->
                    <?php if (!$isLast): ?>
                        <div class="tl-connector">
                            <div class="tl-connector-line"></div>
                            <div class="tl-connector-arrow">
                                <i class="bi bi-chevron-right"></i>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- node -->
                    <div class="tl-node-wrap">
                        <div class="tl-node-ring"></div>
                        <div class="tl-node">
                            <i class="bi <?= $item['icon'] ?>"></i>
                        </div>
                    </div>

                    <!-- card -->
                    <div class="tl-card glass-light">
                        <span class="tl-step-badge"><?= $stepNum ?></span>
                        <h4 class="tl-card-title"><?= htmlspecialchars($item['title']) ?></h4>
                        <div class="tl-card-date">
                            <i class="bi bi-calendar3"></i>
                            <span><?= htmlspecialchars($item['date']) ?></span>
                        </div>
                        <?php if (!empty($item['location'])): ?>
                            <div class="tl-card-location">
                                <i class="bi bi-geo-alt-fill"></i>
                                <span><?= htmlspecialchars($item['location']) ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>