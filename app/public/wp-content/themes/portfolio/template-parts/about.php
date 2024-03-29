<?php
    /**
     * Template Name: About Custom Page
     */
?>

<?php
    $first_section = get_field('first_section');
    $about_image = $first_section['about_image'];
    $about_greeting = $first_section['about_greeting'];
    $about_title = $first_section['about_title'];
    $about_text = $first_section['about_text'];
    $about_socials = $first_section['about_socials'];

    $second_section = get_field('second_section');
    $about_me_title = $second_section['about_me_title'];
    $about_me_text = $second_section['about_me_text'];

    $third_section = get_field('third_section');
    $experience_title = $third_section['experience_title'];
    $experience_text = $third_section['experience_text'];

    $fourth_section = get_field('fourth_section');
    $tools_title = $fourth_section['tools_title'];
    $tools_text = $fourth_section['tools_text'];
    get_header();
?>

<body>
    <main class="about-page pc">
        <!-- First section -->
        <section class="first-section">
            <div class="about-section">
                <div class="about-image">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/featured-1.png' ?>" alt="Featured">
                </div>
                <div class="about-content">
                    <div class="about">
                        <p class="about-greeting">
                            <?php echo $about_greeting ?>
                        </p>
                        <h1 class="about-title">
                            <?php echo $about_title ?>
                        </h1>
                        <p class="about-text">
                            <?php echo $about_text ?>
                        </p>
                    </div>
                    <div class="about-socials">
                        <?php foreach($about_socials as $social_key => $social_link): 
                            if ($social_link): ?>
                                <a href="<?php echo esc_url($social_link); ?>">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/' . $social_key . '.png'; ?>" alt="<?php echo ucfirst($social_key); ?>">
                                </a>
                            <?php endif;
                        endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of First section -->

        <!-- Second section -->
        <section class="second-section">
            <div class="about-me">
                <div class="title">
                    <h3><?php echo $about_me_title; ?></h3>
                </div>
                <div class="text">
                    <p><?php echo $about_me_text; ?></p>
                </div>
            </div>
        </section>
        <!-- End of Second section -->

        <!-- Third section -->
        <section class="third-section">
            <div class="experience">
                <div class="title">
                    <h3><?php echo $experience_title; ?></h3>
                </div>
                <div class="text">
                    <p><?php echo $experience_text; ?></p>
                </div>
                <div class="experiences">
                    <?php
                    // Array containing the names of experiences
                    $experiences = array("Amazon", "EA Games", "Spotify", "LinkedIn");

                    // Loop through the experiences array
                    for ($i = 0; $i < count($experiences); $i++) {
                        // Output the HTML for each experience
                        ?>
                        <a href="#" id="blue" class="noHover"><?php echo $experiences[$i]; ?></a>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </section>
        <!-- End of Third section -->

        <!-- Fourth section -->
        <section class="fourth-section">
            <div class="tool">
                <div class="title">
                    <h3><?php echo $tools_title; ?></h3>
                </div>
                <div class="text">
                    <p><?php echo $tools_text; ?></p>
                </div>
                <div class="tools">
                    <?php
                    // Array containing the names of tools
                    $tools = array("Figma", "Photoshop", "Illustrator", "Canva", "Trello", "Notion");

                    // Loop through the tools array
                    for ($i = 0; $i < count($tools); $i++) {
                        // Output the HTML for each tools
                        ?>
                        <a href="#" id="blue" class="noHover"><?php echo $tools[$i]; ?></a>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </section>
        <!-- End of Fourth section -->
        <?php
            get_footer();
        ?>
    </main>
</body>