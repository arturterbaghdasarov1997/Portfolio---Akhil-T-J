<?php
    /**
     * Template Name: Featured Works Custom Page
     */
?>

<?php
    $args = array(
        'post_type' => 'work',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'ASC', // Set order to ASC for ascending order
    );

    $posts = get_posts($args);

    get_header();
?>

<body>
    <main class="featured page">

    <!-- featured section  -->
    <section class="featured-section">
        <div class="works-container">
            <?php
                $counter = 0;
                $posts_count = count($posts);
            ?>
            <div class="featured-works-grid">
                <?php foreach($posts as $post): ?>
                    <div class="works-card">
                        <div class="featured-works-content">
                            <h2>
                                <?php echo $post->post_title ?>
                            </h2>
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
                            <a href="<?php echo get_the_permalink($post->ID); ?>">
                                <img src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="IMG ALT">
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- featured section  -->

    <?php
        get_footer();
    ?>
    </main>
</body>