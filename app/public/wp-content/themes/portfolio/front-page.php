<?php
    /**
    * Template Name: Front Page Custom Page
    */
?>

<?php
    $first_section = get_field('first_section');
    $hero_greeting = $first_section['hero_greeting'];
    $hero_title = $first_section['hero_title'];
    $hero_text = $first_section['hero_text'];
    $social_links = $first_section['social_links'];

    $second_section = get_field('second_section');
    $second_section_title = $second_section['title'];
    $works_id = $second_section['works'];

    $third_section = get_field('third_section');
    $third_section_title = $third_section['title'];
    $images_id = $third_section['images'];
?>

    <?php
        get_header();
    ?>
    

<main class="home-page pc">
    <!-- first section  -->
    <section class="home-section-1 pc">
        <div class="hero-content">
            <div class="hero">
                <p class="hero-greeting">
                    <?php echo $hero_greeting ?>
                </p>
                <h1 class="hero-title">
                    <?php echo $hero_title ?>
                </h1>
                <p class="hero-text">
                    <?php echo $hero_text ?>
                </p>
            </div>
            <div class="hero-socials">
            <?php foreach ($social_links as $platform => $link): ?>
                <?php if ($link): ?>
                    <a href="<?php echo $link ?>">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/' . $platform . '.png' ?>" alt="<?php echo ucfirst($platform) ?>">
                    </a>
                <?php endif; ?>
            <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- second section  -->
    <section class="home-section-2">
        <div class="title">
            <h3><?php echo $second_section_title ?></h3>
        </div>
        <div class="works-container">
            <?php 
                $counter = 0;
                $works_count = count($works_id);
                for ($i = 0; $i < $works_count; $i++): 
                    $counter++;
                    $item = $works_id[$i]; // Get the current item
                    $post = get_post($item); // Fetch the post object
                    // Check if the current item index is even
                    $is_even = $counter % 2 === 0;
            ?>
            <div class="featured-works <?php echo $is_even ? 'even-reverse' : ''; ?>">
                <div class="featured-works-content">
                    <h2><?php echo get_the_title($item) ?></h2>
                    <?php
                        // Split post excerpt into lines and get the first 4 lines
                        $excerpt_lines = explode("\n", $post->post_excerpt);
                        $excerpt = implode('<br>', array_slice($excerpt_lines, 0, 5));
                    ?>
                    <p>
                        <?php echo $excerpt; ?>
                    </p>
                    <?php
                        // Get ACF button field value
                        $button_text = get_field('button', $post->ID);
                    ?>
                    <a href="<?php echo get_the_permalink($post->ID); ?>" id="blue" class="noHover">
                        <?php echo $button_text; ?>
                    </a>
                </div>
                <div class="featured-img">
                    <!-- Output the image with its URL -->
                    <a href="<?php echo get_the_permalink($item); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url($item); ?>" alt="IMG ALT">
                    </a>
                </div>
            </div>
            <?php endfor ?>
        </div>
    </section>
    <!-- second section  -->

    <!-- third section -->
    <section class="home-section-3">
        <div class="title">
            <h3><?php echo $third_section_title ?></h3>
        </div>

        <div class="playground-container">
            <?php 
            // Loop through each image ID in the $images_id array
            foreach ($images_id as $image_id) {
                // Get the URL of the post thumbnail (featured image) for each image ID
                $image_url = get_the_post_thumbnail_url($image_id, 'full');
                if ($image_url) {
            ?>
                    <!-- Output the image with its URL -->
                    <a href="<?php echo get_the_permalink($item); ?>">
                        <img src="<?php echo esc_url($image_url); ?>" alt="IMG ALT">
                    </a>
            <?php
                }
            }
            ?>
        </div>
    </section>
    <!-- third section  -->
</main>

<?php
    get_footer();
?>