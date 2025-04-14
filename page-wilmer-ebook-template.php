<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ebooks_Clone</title>

    <link rel="stylesheet" href="css/wilmer-ebook.css">



    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
                        'image' => 'assets/cloud.svg',
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
                        'image' => 'assets/logistics.svg',
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
                        'image' => 'assets/cloud2.svg',
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
                        'image' => 'assets/logistics2.svg',
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
                        'image' => 'assets/cloud3.svg',
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
                        'image' => 'assets/logistics3.svg',
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

    <div class="ebook-title-container">
        <h1>Different Design for the Card</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum facilis vel sed laboriosam,<br> rerum
            blanditiis quia distinctio ad ex molestias? Adipisci repellendus</p>
    </div>

    <section class="team-info-cards">
        <div class="team-info-cards-wrapper">
            <div class="team-info-cards-inner">
                <?php
                // Define the cards data
                $team_cards = [
                    [
                        'title' => 'Driving Growth for a Global Logistics Company',
                        'description' => 'Learn how Callbox supported a logistics company in expanding their market reach and driving growth.',
                        'industries' => ['Software', 'Logistics'],
                        'locations' => ['California', 'US']
                    ],
                    [
                        'title' => 'Boosting ROI for a Leading SaaS Provider',
                        'description' => 'Discover how Callbox helped a SaaS provider achieve a 200% increase in ROI through targeted campaigns.',
                        'industries' => ['SaaS', 'Technology'],
                        'locations' => ['New York', 'US']
                    ],
                    [
                        'title' => 'Callbox Amplifies Sales Pipeline for Global Cloud Giant',
                        'description' => 'Callbox\'s tailored ABM strategy enabled a global leader in enterprise cloud solutions to enhance their sales.',
                        'industries' => ['Cloud', 'Enterprise'],
                        'locations' => ['London', 'UK']
                    ]
                ];

                // Repeat the cards 3 times
                for ($i = 0; $i < 1; $i++) {
                    foreach ($team_cards as $card) {
                        ?>
                        <div class="team-info-cards-v1">
                            <div class="team-info-cards-line"></div>
                            <div class="team-info-content">
                                <h1 class="team-info-title"><?php echo $card['title']; ?></h1>
                                <p class="team-info-description"><?php echo $card['description']; ?></p>
                                <p class="team-info-industry">
                                    <i class="fas fa-briefcase"></i>
                                    <?php foreach ($card['industries'] as $industry) { ?>
                                        <span class="pill industry-pill"><?php echo $industry; ?></span>
                                    <?php } ?>
                                </p>
                                <p class="team-info-location">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <?php foreach ($card['locations'] as $location) { ?>
                                        <span class="pill location-pill"><?php echo $location; ?></span>
                                    <?php } ?>
                                </p>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <section class="team-info-cards-v2">
        <div class="team-info-cards-wrapper-v2">
            <div class="team-info-cards-inner-v2">
                <?php
                $team_cards_v2 = [
                    [
                        'title' => 'Driving Growth for a Global Logistics Company',
                        'description' => 'Learn how Callbox supported a logistics company in expanding their market reach and driving growth.',
                        'industry' => 'Logistics, Transportation',
                        'location' => 'London, UK'
                    ],
                    [
                        'title' => 'Boosting ROI for a Leading SaaS Provider',
                        'description' => 'Discover how Callbox helped a SaaS provider achieve a 200% increase in ROI through targeted campaigns.',
                        'industry' => 'SaaS, Technology',
                        'location' => 'New York, US'
                    ],
                    [
                        'title' => 'Callbox Amplifies Sales Pipeline for Global Cloud Giant',
                        'description' => 'Callbox\'s tailored ABM strategy enabled a global leader in enterprise cloud solutions to enhance their sales.',
                        'industry' => 'Cloud, Enterprise',
                        'location' => 'California, US'
                    ]
                ];

                foreach ($team_cards_v2 as $card) {
                    ?>
                    <div class="team-info-content-v2">
                        <div class="team-info-cards-line-v2"></div>
                        <h1 class="team-info-title-v2"><?php echo $card['title']; ?></h1>
                        <p class="team-info-description-v2"><?php echo $card['description']; ?></p>
                        <p class="team-info-industry-v2">
                            <i class="fas fa-briefcase"></i>
                            <span><?php echo $card['industry']; ?></span>
                        </p>
                        <p class="team-info-location-v2">
                            <i class="fas fa-map-marker-alt"></i>
                            <span><?php echo $card['location']; ?></span>
                        </p>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>

    <section class="team-info-cards-v3">
        <div class="team-info-cards-wrapper-v3">
            <div class="team-info-cards-inner-v3">
                <?php
                // Define the cards data
                $team_cards = [
                    [
                        'title' => 'Driving Growth for a Global Logistics Company',
                        'description' => 'Learn how Callbox supported a logistics company in expanding their market reach and driving growth.',
                        'industries' => ['Software', 'Logistics'],
                        'locations' => ['California', 'US']
                    ],
                    [
                        'title' => 'Boosting ROI for a Leading SaaS Provider',
                        'description' => 'Discover how Callbox helped a SaaS provider achieve a 200% increase in ROI through targeted campaigns.',
                        'industries' => ['SaaS', 'Technology'],
                        'locations' => ['New York', 'US']
                    ],
                    [
                        'title' => 'Callbox Amplifies Sales Pipeline for Global Cloud Giant',
                        'description' => 'Callbox\'s tailored ABM strategy enabled a global leader in enterprise cloud solutions to enhance their sales.',
                        'industries' => ['Cloud', 'Enterprise'],
                        'locations' => ['London', 'UK']
                    ]
                ];

                // Repeat the cards 3 times
                for ($i = 0; $i < 1; $i++) {
                    foreach ($team_cards as $card) {
                        ?>
                        <div class="team-info-cards-v3">
                            <div class="team-info-cards-line-v3"></div>
                            <div class="team-info-content-v3">
                                <h1 class="team-info-title-v3"><?php echo $card['title']; ?></h1>
                                <div class="separator"></div> <!-- Add this line -->
                                <p class="team-info-description-v3"><?php echo $card['description']; ?></p>

                                <p class="team-info-industry-v3">
                                    <i class="fas fa-briefcase"></i>
                                    <?php foreach ($card['industries'] as $industry) { ?>
                                        <span class="pill industry-pill"><?php echo $industry; ?></span>
                                    <?php } ?>
                                </p>
                                <p class="team-info-location-v3">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <?php foreach ($card['locations'] as $location) { ?>
                                        <span class="pill location-pill"><?php echo $location; ?></span>
                                    <?php } ?>
                                </p>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <section class="case-study-v1">
        <div class="case-study-v1-wrapper">
            <div class="case-study-v1-inner">
                <div class="case-study-v1-container">
                    <img class="background-img-v1" src="assets/case-study-v1.svg" alt="case-study background image">
                    <div class="case-study-v1-content">
                        <h1 class="case-study-v1-top-span">Callbox Lead Generation Success Stories</h1>
                        <h2 class="case-study-v1-title">Callbox Helps IT Leader Attain 150+ Appointments Across the US
                        </h2>
                        <p class="case-study-v1-p">See how Callbox’s tailored ABM program empowered an IT leader to
                            expand its reach, connect with qualified prospects, and grow its client base.</p>
                        <div class="case-study-v1-info-group">
                            <p class="case-study-v1-info">183 Sales Appointments</p>
                            <p class="case-study-v1-info">150+ Qualified Leads</p>
                            <p class="case-study-v1-info">200% ROI Increase</p>
                        </div>
                        <div class="case-study-v1-buttons">
                            <button class="case-study-v1-button-1">Read full story</button>
                            <button class="case-study-v1-button-2">More success stories</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="case-study-v2">
        <div class="case-study-v2-wrapper">
            <div class="case-study-v2-inner">
                <div class="case-study-v2-container">
                    <img class="background-img-v2" src="assets/case-study-v2.svg" alt="case-study background image">
                    <div class="case-study-v2-content">
                        <h1 class="case-study-v2-top-span">Callbox Lead Generation Success Stories</h1>
                        <h2 class="case-study-v2-title">Callbox Helps IT Leader Attain 150+ Appointments Across the US
                        </h2>
                        <p class="case-study-v2-p">See how Callbox’s tailored ABM program empowered an IT leader to
                            expand its reach, connect with qualified prospects, and grow its client base.</p>
                        <div class="case-study-v2-info-group">
                            <p class="case-study-v2-info">183 Sales Appointments</p>
                            <p class="case-study-v2-info">150+ Qualified Leads</p>
                            <p class="case-study-v2-info">200% ROI Increase</p>
                        </div>
                        <div class="case-study-v2-buttons">
                            <button class="case-study-v2-button-1">Read full story</button>
                            <button class="case-study-v2-button-2">More success stories</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="case-study-v3">
        <div class="case-study-v3-wrapper">
            <div class="case-study-v3-inner">
                <div class="case-study-v3-container">
                    <div class="case-study-v3-image">
                        <img class="background-img-v3" src="assets/case-study-v3.svg" alt="case-study background image">
                    </div>
                    <div class="case-study-v3-content">
                        <h1 class="case-study-v3-top-span">Callbox Lead Generation Success Stories</h1>
                        <h2 class="case-study-v3-title">Callbox Helps IT Leader Attain 150+ Appointments Across the US
                        </h2>
                        <p class="case-study-v3-p">See how Callbox’s tailored ABM program empowered an IT leader to
                            expand its reach, connect with qualified prospects, and grow its client base.</p>
                        <div class="case-study-v3-info-group">
                            <p class="case-study-v3-info">183 Sales Appointments</p>
                            <p class="case-study-v3-info">150+ Qualified Leads</p>
                            <p class="case-study-v3-info">200% ROI Increase</p>
                        </div>
                        <div class="case-study-v3-buttons">
                            <button class="case-study-v3-button-1">Read full story</button>
                            <button class="case-study-v3-button-2">More success stories</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="case-study-v4">
        <div class="case-study-v4-wrapper">
            <div class="case-study-v4-inner">
                <div class="case-study-v4-container">
                    <div class="case-study-v4-content">
                        <h1 class="case-study-v4-top-span">Callbox Lead Generation Success Stories</h1>
                        <h2 class="case-study-v4-title">Callbox Helps IT Leader Attain 150+ Appointments Across the US
                        </h2>
                        <p class="case-study-v4-p">See how Callbox’s tailored ABM program empowered an IT leader to
                            expand its reach, connect with qualified prospects, and grow its client base.</p>
                        <div class="case-study-v4-info-group">
                            <p class="case-study-v4-info">183 Sales Appointments</p>
                            <p class="case-study-v4-info">150+ Qualified Leads</p>
                            <p class="case-study-v4-info">200% ROI Increase</p>
                        </div>
                        <div class="case-study-v4-buttons">
                            <button class="case-study-v4-button-1">Read full story</button>
                            <button class="case-study-v4-button-2">More success stories</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="case-study-v5">
        <div class="case-study-v5-wrapper">
            <div class="case-study-v5-inner">
                <div class="case-study-v5-container">
                        <div class="image-grid">
                            <div class="box">
                                <img src="assets/qualified-leads-v5.svg" alt="Image 1">
                                <div class="case-study-v5-info">
                                    <p>183 Sales Appointments</p>
                                </div>
                            </div>
                            <div class="box">
                                <img src="assets/sales-appointment-v5.svg" alt="Image 2">
                                <div class="case-study-v5-info">
                                    <p>150+ Qualified Leads</p>
                                </div>
                            </div>
                            <div class="box">
                                <img src="assets/roi-increase.svg" alt="Image 3">
                                <div class="case-study-v5-info">
                                    <p>200% ROI Increase</p>
                                </div>
                            </div>
                        </div>
                   
                    <div class="case-study-v5-content">
                        <h1 class="case-study-v5-top-span">Callbox Lead Generation Success Stories</h1>
                        <h2 class="case-study-v5-title">Callbox Helps IT Leader Attain 150+ Appointments Across the US
                        </h2>
                        <p class="case-study-v5-p">See how Callbox’s tailored ABM program empowered an IT leader to
                            expand its reach, connect with qualified prospects, and grow its client base.</p>
                        <div class="case-study-v5-buttons">
                            <button class="case-study-v5-button-1">Read full story</button>
                            <button class="case-study-v5-button-2">More success stories</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<section class="case-study-v6">
    <div class="case-study-v6-wrapper">
        <div class="case-study-v6-inner">
            <div class="case-study-v6-container">
                <embed src="assets/svgator1.svg" type="image/svg+xml" class="case-study-v6-svg">
                <div class="case-study-v6-content">
                <h1 class="case-study-v6-top-span">Callbox Lead Generation Success Stories</h1>
                        <h2 class="case-study-v6-title">Callbox Helps IT Leader Attain 150+ Appointments Across the US
                        </h2>
                        <p class="case-study-v6-p">See how Callbox’s tailored ABM program empowered an IT leader to
                            expand its reach, connect with qualified prospects, and grow its client base.</p>
                        <div class="case-study-v6-info-group">
                            <p class="case-study-v6-info">183 Sales Appointments</p>
                            <p class="case-study-v6-info">150+ Qualified Leads</p>
                            <p class="case-study-v6-info">200% ROI Increase</p>
                        </div>
                        <div class="case-study-v6-buttons">
                            <button class="case-study-v6-button-1">Read full story</button>
                            <button class="case-study-v6-button-2">More success stories</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>

<section class="case-study-v7">
    <div class="case-study-v7-wrapper">
        <div class="case-study-v7-inner">
            <div class="case-study-v7-container">
                <embed src="assets/svgator3.svg" type="image/svg+xml" class="case-study-v7-svg">
                <div class="case-study-v7-content">
                <h1 class="case-study-v7-top-span">Callbox Lead Generation Success Stories</h1>
                        <h2 class="case-study-v7-title">Callbox Helps IT Leader Attain 150+ Appointments Across the US
                        </h2>
                        <p class="case-study-v7-p">See how Callbox’s tailored ABM program empowered an IT leader to
                            expand its reach, connect with qualified prospects, and grow its client base.</p>
                        <div class="case-study-v7-info-group">
                            <p class="case-study-v7-info">183 Sales Appointments</p>
                            <p class="case-study-v7-info">150+ Qualified Leads</p>
                            <p class="case-study-v7-info">200% ROI Increase</p>
                        </div>
                        <div class="case-study-v7-buttons">
                            <button class="case-study-v7-button-1">Read full story</button>
                            <button class="case-study-v7-button-2">More success stories</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>

<section class="case-study-v8">
    <div class="case-study-v8-wrapper">
        <div class="case-study-v8-inner">
            <div class="case-study-v8-container">
                <embed src="assets/svgator2.svg" type="image/svg+xml" class="case-study-v8-svg">
                <div class="case-study-v8-content">
                <h1 class="case-study-v8-top-span">Callbox Lead Generation Success Stories</h1>
                        <h2 class="case-study-v8-title">Callbox Helps IT Leader Attain 150+ Appointments Across the US
                        </h2>
                        <p class="case-study-v8-p">See how Callbox’s tailored ABM program empowered an IT leader to
                            expand its reach, connect with qualified prospects, and grow its client base.</p>
                        <div class="case-study-v8-info-group">
                            <p class="case-study-v8-info">183 Sales Appointments</p>
                            <p class="case-study-v8-info">150+ Qualified Leads</p>
                            <p class="case-study-v8-info">200% ROI Increase</p>
                        </div>
                        <div class="case-study-v8-buttons">
                            <button class="case-study-v8-button-1">Read full story</button>
                            <button class="case-study-v8-button-2">More success stories</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>

<section class="case-study-v9">
    <div class="case-study-v9-wrapper">
        <div class="case-study-v9-inner">
            <div class="case-study-v9-container">
                <embed src="assets/svgator4.svg" type="image/svg+xml" class="case-study-v9-svg">
                <div class="case-study-v9-content">
                <h1 class="case-study-v9-top-span">Callbox Lead Generation Success Stories</h1>
                        <h2 class="case-study-v9-title">Callbox Helps IT Leader Attain 150+ Appointments Across the US
                        </h2>
                        <p class="case-study-v9-p">See how Callbox’s tailored ABM program empowered an IT leader to
                            expand its reach, connect with qualified prospects, and grow its client base.</p>
                        <div class="case-study-v9-info-group">
                            <p class="case-study-v9-info">183 Sales Appointments</p>
                            <p class="case-study-v9-info">150+ Qualified Leads</p>
                            <p class="case-study-v9-info">200% ROI Increase</p>
                        </div>
                        <div class="case-study-v9-buttons">
                            <button class="case-study-v9-button-1">Read full story</button>
                            <button class="case-study-v9-button-2">More success stories</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>
    
</body>

</html>