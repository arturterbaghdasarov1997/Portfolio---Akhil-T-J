<?php
    /**
     * Template Name: Playground Custom Page
     */
?>

<?php
    $args = array(
        'post_type' => 'image',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'ASC', // Set order to ASC for ascending order
    );

    $posts = get_posts($args);

    get_header();
?>

<body>
    <main class="playground page">
        <!-- Playground section -->
        <section class="playground-section">
            <div class="playground-container">
                <?php foreach($posts as $post): ?>
                    <a href="<?php echo get_the_permalink($post->ID); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="IMG ALT">
                    </a>
                <?php endforeach; ?>
            </div>
        </section>
        <!-- End of playground section -->

        <?php
        get_footer();
        ?>
    </main>
</body>