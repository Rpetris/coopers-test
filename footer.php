<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package Coopers_Recommended_Theme
 */
?>

<?php
// Troque 123 pelo ID real da página Footer Settings
$page_id = 134;

$footer_titulo_ajuda = get_field('footer_title', $page_id) ?: 'Need help?';
$footer_email_contato = get_field('footer_email', $page_id) ?: 'coopers@coopers.pro';
$footer_marca = get_field('footer_brand', $page_id) ?: 'Coopers';
?>

<footer class="py-5">
  <div class="footer-container d-flex align-items-center justify-content-center flex-column">

    <div class="footer-stroke"></div>

    <h1><?= esc_html($footer_titulo_ajuda); ?></h1>

    <h1 class="my-3"><?= esc_html($footer_email_contato); ?></h1>

    <span class="copyright">© <?= date('Y'); ?> <?= esc_html($footer_marca)?>. All rights reserved.</span>
  </div>
</footer>

<!-- Bootstrap JS (inclui Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Script customizado -->
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<?php wp_footer(); ?>
</body>
</html>
