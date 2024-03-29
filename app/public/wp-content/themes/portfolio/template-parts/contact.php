<?php
    /**
     * Template Name: Contact Custom Page
     */
?>

<?php
    $contact_page = get_field('contact_page');
    $contact_socials = $contact_page['contact_socials'];

    get_header();
?>

<body>
    <main class="contact-page pc">
        <!-- Contact section -->
        <section class="contact-section">
            <div class="contact-content">
                <?php echo do_shortcode('[contact-form-7 id="bf32f8a" title="Contact Form 1" html_class="portfolio-contact-form"]'); ?>

            <div class="contact-send">
                <div class="contact-socials">
                    <?php foreach($contact_socials as $social_key => $social_link): ?>
                        <?php if ($social_link): ?>
                            <a href="<?php echo esc_url($social_link); ?>">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/' . $social_key . '.png'; ?>" alt="<?php echo ucfirst($social_key); ?>">
                            </a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            </div>
        </section>
        <!-- End of contact section -->

        <?php get_footer(); ?>
    </main>
</body>