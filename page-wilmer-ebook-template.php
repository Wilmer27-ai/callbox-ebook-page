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

    <section class="ebook-cards-1">
        <div class="card-wrapper">
            <div class="card-inner">
                <div class="card-content">
                    <div class="card1">
                        <div class="card-image">
                            <img src="assets/card1.svg" alt="card-image">
                        </div>
                        <div class="card-info">
                            <h1 class="card-title">Callbox Amplifies Sales Pipeline for Global Cloud Giant</h1>
                            <p class="card-description">Callbox's tailored ABM strategy enabled a global leader in
                                enterprise cloud solutions to enhance their sales</p>
                            <p class="card-industry">
                                <span class="material-icons-outlined">business</span>
                                Software, Logistics
                            </p>
                            <p class="card-location">
                                <span class="material-icons-outlined">place</span>
                                California, US
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="card-v2">
        <div class="card-v2-wrapper">
            <div class="card-v2-inner">
                <div class="card-v2-content">
                    <div class="card-v2">
                        <div class="card-v2-image">
                            <img src="assets/landscapeimage.svg" alt="card-image">
                        </div>
                        <div class="card-v2-info">
                            <h1 class="card-v2-title">Callbox Amplifies Sales Pipeline for Global Cloud Giant</h1>
                            <p class="card-v2-description">Callbox's tailored ABM strategy enabled a global leader in
                                enterprise cloud solutions to enhance their sales</p>
                            <p class="card-v2-industry">
                                <span class="material-icons-outlined">business</span>
                                <span class="industry-item">Software</span>
                                <span class="industry-item">Logistics</span>
                            </p>
                            <p class="card-v2-location">
                                <span class="material-icons-outlined">place</span>
                                <span class="location-item">California</span>
                                <span class="location-item">US</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class=""></section>
</body>
</html>