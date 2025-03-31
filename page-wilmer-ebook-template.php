<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ebooks_Clone</title>

    <link rel="stylesheet" href="css/content_hero.css">
    <link rel="stylesheet" href="css/title_container.css">
    <link rel="stylesheet" href="css/content_ebooks.css">
    <link rel="stylesheet" href="css/card1.css">
    <link rel="stylesheet" href="css/card2.css">
    <link rel="stylesheet" href="css/card3.css">
    <link rel="stylesheet" href="css/card4.css">
    <link rel="stylesheet" href="css/card5.css">
    <link rel="stylesheet" href="css/card6.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
</head>

<body>
    <section class="hero-section-top">
        <div class="hero-wrapper">
            <div class="hero-inner">
                <div class="hero-content">
                    <div class="banner-text">
                        <h2 class="banner-text-title">Callbox Marketing Ebooks</h2>
                        <h1>Level Up Your Marketing: Free E-books That Generate Leads</h1>
                        <p>Here’s a list of our most popular eBooks. These serve as excellent references on various
                            areas of
                            modern B2B marketing</p>
                        <div class="banner-buttons">
                            <button class="btn book-a-meeting">Book a Consultation</button>
                        </div>
                    </div>
                    <div class="download-form">
                        <div class="form-wrapper">
                            <div class="form-title">
                                <h3>SaaS Launch Secures 100+ Appointments</h3>
                                <p>Discover how a workflow automation leader partnered with Callbox to execute a
                                    targeted ABM campaign, resulting in sales appointments, MQLs, and webinar
                                    registrations for their new logistics management solution.</p>
                            </div>

                            <div class="form-image">
                                <img src="assets/download-asset.svg" alt="My Image">

                            </div>
                        </div>
                        <div class="form-input">
                            <label for="gated-input-name">
                                Name
                                <span>*</span>
                            </label>
                            <input id="gated-input-name" type="text" required="" placeholder="John Doe">

                            <label for="gated-input-email">
                                Email
                                <span>*</span>
                            </label>
                            <input id="gated-input-email" type="text" required="" placeholder="JohnDoe@Email.com ">
                            <div class="form-submit">
                                <button id="gated-form-submit" type="submit" disabled="">Download Case
                                    Study</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="ebook-title-container">
        <h1>Here's a list of our most popular eBooks.</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum facilis vel sed laboriosam,<br> rerum
            blanditiis quia distinctio ad ex molestias? Adipisci repellendus</p>
    </div>


    <section class="ebook-section">
        <div class="ebook-wrapper">
            <div class="ebook-inner">
                <?php
                $ebooks = [
                    [
                        'image' => 'assets/wrap-up-cover-page.png',
                        'title' => 'Callbox Wrap-up 2024 Report',
                        'text' => 'Download Callbox’s 2024 annual report to explore our 20th anniversary milestones, AI innovations, and how we’re transforming B2B lead generation across global markets.',
                        'gradient' => 'linear-gradient(to top left, rgba(151, 120, 209, 3), rgba(255, 255, 255, 1))',
                        'link' => '#'
                    ],
                    [
                        'image' => 'assets/ebook1.png',
                        'title' => 'The Million-Dollar Sales Cadence: 60 Days to Supercharge Your Pipeline',
                        'text' => 'Discover the proven 60-day sales cadence that generated millions for Callbox. Learn how to craft a strategic roadmap of touchpoints, engage prospects effectively, and close more deals with precision.',
                        'gradient' => 'linear-gradient(to top left, rgba(6, 147, 227, 3), rgba(255, 255, 255, 1))',
                        'link' => '#'
                    ],
                    [
                        'image' => 'assets/Sales-Enablement-Essentials-Tools-Materials-and-Tactics-for-Winning-Deals-LP.png',
                        'title' => 'Sales Enablement Essentials: Tools, Materials and Tactics for Winning Deals',
                        'text' => 'In this free eBook, we’ll go over the different sales tools, resources, and strategies that will help you optimize your selling techniques to fit today’s B2B buyers.',
                        'gradient' => 'linear-gradient(to top left, rgba(255, 105, 0, 3), rgba(255, 255, 255, 1))',
                        'link' => '#'
                    ],
                    [
                        'image' => 'assets/A-Hands-On-Guide-to-Gaining-B2B-Leads-from-Social-Media-LP.png',
                        'title' => 'A Hands-on Guide to B2B Social Selling on LinkedIn, Facebook and Twitter',
                        'text' => 'Take your B2B social selling skills a step further with the help of this guide and start generating more leads from LinkedIn, Facebook and Twitter.',
                        'gradient' => 'linear-gradient(to top left, rgba(0, 208, 130, 3), rgba(255, 255, 255, 1))',
                        'link' => '#'
                    ],
                    [
                        'image' => 'assets/Sample-Cold-Calling-Scripts-for-Key-Buyer-Personas-in-Managed-IT-LP.png',
                        'title' => 'Sample Cold Calling Scripts for Key Buyer Personas in Managed IT',
                        'text' => 'Make your cold calls to MSP buyers more engaging and productive. Download these sample scripts and reach decision makers that impact managed IT purchases.',
                        'gradient' => 'linear-gradient(to top left, rgba(207, 46, 46, 3), rgba(255, 255, 255, 1))',
                        'link' => '#'
                    ],
                    [
                        'image' => 'assets/ABM-Telemarketing-Scripts-for-Cold-Calling-Key-Software-Personas.png',
                        'title' => 'ABM Telemarketing Scripts for Cold Calling Key Software Personas',
                        'text' => 'Use this free resource as a guide to engage stakeholders for ABM. See examples of software buyer personas and personalized telemarketing scripts.',
                        'gradient' => 'linear-gradient(to top left, rgba(252, 185, 0, 3), rgba(255, 255, 255, 1))',
                        'link' => '#'
                    ],
                ];

                foreach ($ebooks as $ebook) {
                    ?>
                    <a href="<?php echo $ebook['link']; ?>" class="ebook-link" style="text-decoration: none;">
                        <div class="ebook-content">
                            <div class="ebook-card" style="background-image: <?php echo $ebook['gradient']; ?>;">
                                <img class="ebook-image" src="<?php echo $ebook['image']; ?>" alt="ebook image">
                            </div>
                            <div class="card-content">
                                <h3 class="card-title"><?php echo $ebook['title']; ?></h3>
                                <div class="card-divider"></div>
                                <p class="card-text"><?php echo $ebook['text']; ?></p>
                            </div>
                        </div>
                    </a>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>

    <div class="ebook-title-container">
        <h1>A Different Design Approach for the Card</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum facilis vel sed laboriosam,<br> rerum
            blanditiis quia distinctio ad ex molestias? Adipisci repellendus</p>
    </div>

    <section class="ebook-cards-1">
        <div class="card-wrapper">
            <div class="card-inner">
                <?php
                $cards = [
                    [
                        'image' => 'assets/card1.svg',
                        'title' => 'Callbox Amplifies Sales Pipeline for Global Cloud Giant',
                        'description' => 'Callbox\'s tailored ABM strategy enabled a global leader in enterprise cloud solutions to enhance their sales',
                        'industry' => 'Software, Logistics',
                        'location' => 'California, US'
                    ],
                    [
                        'image' => 'assets/card1.svg',
                        'title' => 'Boosting ROI for a Leading SaaS Provider',
                        'description' => 'Discover how Callbox helped a SaaS provider achieve a 200% increase in ROI through targeted campaigns.',
                        'industry' => 'SaaS, Technology',
                        'location' => 'New York, US'
                    ],
                    [
                        'image' => 'assets/card1.svg',
                        'title' => 'Driving Growth for a Global Logistics Company',
                        'description' => 'Learn how Callbox supported a logistics company in expanding their market reach and driving growth.',
                        'industry' => 'Logistics, Transportation',
                        'location' => 'London, UK'
                    ]
                ];

                foreach ($cards as $card) {
                    ?>
                    <div class="card-content">
                        <div class="card1">
                            <div class="card-image">
                                <img src="<?php echo $card['image']; ?>" alt="card-image">
                            </div>
                            <div class="card-info">
                                <h1 class="card-title"><?php echo $card['title']; ?></h1>
                                <p class="card-description"><?php echo $card['description']; ?></p>
                                <p class="card-industry">
                                    <span class="material-icons-outlined">business</span>
                                    <?php echo $card['industry']; ?>
                                </p>
                                <p class="card-location">
                                    <span class="material-icons-outlined">place</span>
                                    <?php echo $card['location']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>

    <section class="card-v2">
        <div class="card-v2-wrapper">
            <div class="card-v2-inner">
                <?php
                $cards_v2 = [
                    [
                        'image' => 'assets/landscapeimage.svg',
                        'title' => 'Callbox Amplifies Sales Pipeline for Global Cloud Giant',
                        'description' => 'Callbox\'s tailored ABM strategy enabled a global leader in enterprise cloud solutions to enhance their sales.',
                        'industry' => ['Software', 'Logistics'],
                        'location' => ['California', 'US']
                    ],
                    [
                        'image' => 'assets/landscapeimage.svg',
                        'title' => 'Boosting ROI for a Leading SaaS Provider',
                        'description' => 'Discover how Callbox helped a SaaS provider achieve a 200% increase in ROI through targeted campaigns.',
                        'industry' => ['SaaS', 'Technology'],
                        'location' => ['New York', 'US']
                    ],
                    [
                        'image' => 'assets/landscapeimage.svg',
                        'title' => 'Driving Growth for a Global Logistics Company',
                        'description' => 'Learn how Callbox supported a logistics company in expanding their market reach and driving growth.',
                        'industry' => ['Logistics', 'Transportation'],
                        'location' => ['London', 'UK']
                    ]
                ];

                foreach ($cards_v2 as $card) {
                    ?>
                    <div class="card-v2-content">
                        <div class="card-v2">
                            <div class="card-v2-image">
                                <img src="<?php echo $card['image']; ?>" alt="card-image">
                            </div>
                            <div class="card-v2-info">
                                <h1 class="card-v2-title"><?php echo $card['title']; ?></h1>
                                <p class="card-v2-description"><?php echo $card['description']; ?></p>
                                <p class="card-v2-industry">
                                    <span class="material-icons-outlined">business</span>
                                    <?php foreach ($card['industry'] as $industry) { ?>
                                        <span class="industry-item"><?php echo $industry; ?></span>
                                    <?php } ?>
                                </p>
                                <p class="card-v2-location">
                                    <span class="material-icons-outlined">place</span>
                                    <?php foreach ($card['location'] as $location) { ?>
                                        <span class="location-item"><?php echo $location; ?></span>
                                    <?php } ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>

    <section class="card-v3">
        <div class="card-v3-wrapper">
            <div class="card-v3-inner">
                <?php
                $cards_v3 = [
                    [
                        'image' => 'assets/card3.svg',
                        'title' => 'Callbox Amplifies Sales Pipeline for Global Cloud Giant',
                        'description' => 'Callbox\'s tailored ABM strategy enabled a global leader in enterprise cloud solutions to enhance their sales.',
                        'industry' => ['Software', 'Logistics'],
                        'location' => ['California', 'US']
                    ],
                    [
                        'image' => 'assets/card3.svg',
                        'title' => 'Boosting ROI for a Leading SaaS Provider',
                        'description' => 'Discover how Callbox helped a SaaS provider achieve a 200% increase in ROI through targeted campaigns.',
                        'industry' => ['SaaS', 'Technology'],
                        'location' => ['New York', 'US']
                    ],
                    [
                        'image' => 'assets/card3.svg',
                        'title' => 'Driving Growth for a Global Logistics Company',
                        'description' => 'Learn how Callbox supported a logistics company in expanding their market reach and driving growth.',
                        'industry' => ['Logistics', 'Transportation'],
                        'location' => ['London', 'UK']
                    ]
                ];

                foreach ($cards_v3 as $card) {
                    ?>
                    <div class="card-v3-content">
                        <div class="card-v3-container">
                            <div class="card-v3-image">
                                <img src="<?php echo $card['image']; ?>" alt="card-image">
                            </div>
                            <div class="floating-card">
                                <div class="card-v3-info">
                                    <h1 class="card-v3-title"><?php echo $card['title']; ?></h1>
                                    <p class="card-v3-description"><?php echo $card['description']; ?></p>
                                    <p class="card-v3-industry">
                                        <span class="material-icons-outlined">business</span>
                                        <?php foreach ($card['industry'] as $industry) { ?>
                                            <span class="industry-item"><?php echo $industry; ?></span>
                                        <?php } ?>
                                    </p>
                                    <p class="card-v3-location">
                                        <span class="material-icons-outlined">place</span>
                                        <?php foreach ($card['location'] as $location) { ?>
                                            <span class="location-item"><?php echo $location; ?></span>
                                        <?php } ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>

        <section class="card-v4">
            <div class="card-v4-wrapper">
                <div class="card-v4-inner">
                    <?php
                    $cards_v4 = [
                        [
                            'title' => 'Callbox Amplifies Sales Pipeline for Global Cloud Giant',
                            'description' => 'Callbox\'s tailored ABM strategy enabled a global leader in enterprise cloud solutions to enhance their sales.',
                            'industry' => ['Software', 'Logistics'],
                            'location' => ['California', 'US']
                        ],
                        [
                            'title' => 'Boosting ROI for a Leading SaaS Provider',
                            'description' => 'Discover how Callbox helped a SaaS provider achieve a 200% increase in ROI through targeted campaigns.',
                            'industry' => ['SaaS', 'Technology'],
                            'location' => ['New York', 'US']
                        ],
                        [
                            'title' => 'Driving Growth for a Global Logistics Company',
                            'description' => 'Learn how Callbox supported a logistics company in expanding their market reach and driving growth.',
                            'industry' => ['Logistics', 'Transportation'],
                            'location' => ['London', 'UK']
                        ]
                    ];

                    foreach ($cards_v4 as $card) {
                        ?>
                        <div class="card-v4-content">
                            <div class="card-v4-side-color"></div>
                            <div class="card-v4-info">
                                <h1 class="card-v4-title"><?php echo $card['title']; ?></h1>
                                <p class="card-v4-description"><?php echo $card['description']; ?></p>
                                <p class="card-v4-industry">
                                    <span class="material-icons-outlined">business</span>
                                    <?php foreach ($card['industry'] as $industry) { ?>
                                        <span class="industry-item"><?php echo $industry; ?></span>
                                    <?php } ?>
                                </p>
                                <p class="card-v4-location">
                                    <span class="material-icons-outlined">place</span>
                                    <?php foreach ($card['location'] as $location) { ?>
                                        <span class="location-item"><?php echo $location; ?></span>
                                    <?php } ?>
                                </p>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </section>

        <section class="card-v5">
    <div class="card-v5-wrapper">
        <div class="card-v5-inner">
            <?php
            $cards_v5 = [
                [
                    'title' => 'Callbox Amplifies Sales Pipeline for Global Cloud Giant',
                    'description' => 'Callbox\'s tailored ABM strategy enabled a global leader in enterprise cloud solutions to enhance their sales.',
                    'industry' => ['Software', 'Logistics'],
                    'location' => ['California', 'US']
                ],
                [
                    'title' => 'Boosting ROI for a Leading SaaS Provider',
                    'description' => 'Discover how Callbox helped a SaaS provider achieve a 200% increase in ROI through targeted campaigns.',
                    'industry' => ['SaaS', 'Technology'],
                    'location' => ['New York', 'US']
                ],
                [
                    'title' => 'Driving Growth for a Global Logistics Company',
                    'description' => 'Discover how Callbox helped a SaaS provider achieve a 200% increase in ROI through targeted campaigns.',
                    'industry' => ['Logistics', 'Transportation'],
                    'location' => ['London', 'UK']
                ]
            ];

            foreach ($cards_v5 as $card) {
                ?>
                <div class="card-v5-content">
                    <div class="card-v5-info">
                        <h1 class="card-v5-title"><?php echo $card['title']; ?></h1>
                        <p class="card-v5-description"><?php echo $card['description']; ?></p>
                        <p class="card-v5-industry">
                            <span class="material-icons-outlined">business</span>
                            <?php foreach ($card['industry'] as $industry) { ?>
                                <span class="industry-item"><?php echo $industry; ?></span>
                            <?php } ?>
                        </p>
                        <p class="card-v5-location">
                            <span class="material-icons-outlined">place</span>
                            <?php foreach ($card['location'] as $location) { ?>
                                <span class="location-item"><?php echo $location; ?></span>
                            <?php } ?>
                        </p>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>

<section class="card-v6">
    <div class="card-v6-wrapper">
        <div class="card-v6-inner">
            <?php
            $cards_v6 = [
                [
                    'title' => 'Callbox Amplifies Sales Pipeline for Global Cloud Giant',
                    'description' => 'Callbox\'s tailored ABM strategy enabled a global leader in enterprise cloud solutions to enhance their sales.',
                    'industry' => ['Software', 'Logistics'],
                    'location' => ['California', 'US']
                ],
                [
                    'title' => 'Boosting ROI for a Leading SaaS Provider',
                    'description' => 'Discover how Callbox helped a SaaS provider achieve a 200% increase in ROI through targeted campaigns.',
                    'industry' => ['SaaS', 'Technology'],
                    'location' => ['New York', 'US']
                ],
                [
                    'title' => 'Driving Growth for a Global Logistics Company',
                    'description' => 'Learn how Callbox supported a logistics company in expanding their market reach and driving growth.',
                    'industry' => ['Logistics', 'Transportation'],
                    'location' => ['London', 'UK']
                ]
            ];

            foreach ($cards_v6 as $card) {
                ?>
                <div class="card-v6-content">
                    <div class="card-v6-info">
                        <h1 class="card-v6-title"><?php echo $card['title']; ?></h1>
                        <p class="card-v6-description"><?php echo $card['description']; ?></p>
                        <p class="card-v6-industry">
                            <span class="material-icons-outlined">business</span>
                            <?php foreach ($card['industry'] as $industry) { ?>
                                <span class="industry-item"><?php echo $industry; ?></span>
                            <?php } ?>
                        </p>
                        <p class="card-v6-location">
                            <span class="material-icons-outlined">place</span>
                            <?php foreach ($card['location'] as $location) { ?>
                                <span class="location-item"><?php echo $location; ?></span>
                            <?php } ?>
                        </p>
                    </div>
                    <div class="card-v6-side-color"></div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>
</body>

</html>