<?php
/**
 * The front page file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Coopers_Recommended_Theme
 */

get_header();
?>
<main>
  <section id="hero" class="hero position-relative d-flex flex-column pt-5">

    <!-- Container para o logo no topo do hero -->
    <header class="hero-logo container p-0 mb-5 mb-md-0 animate__animated animate__backInLeft animate__slow">
      <div>
        <?php
        // INFO: Recupera o campo de imagem do ACF (logo do hero)
        $logo = get_field('hero_logo');
        if ($logo): ?>
          <img src="<?= esc_url($logo['url']); ?>" alt="<?= esc_attr($logo['alt']); ?>" />
        <?php endif; ?>
      </div>
    </header>

    <div class="container">
      <div class="hero-content row mt-5 mt-md-0 align-items-center">

        <!-- Coluna de texto (título, subtítulo, descrição e botão) -->
        <div class="hero-text col-12 col-md-6 col-lg-7 px-0">
          <!-- Título principal do hero -->
          <h1 class="m-0 animate__animated animate__slideInLeft"><?php the_field('hero_heading'); ?></h1>
          <!-- Subtítulo -->
          <h4 class="m-0 animate__animated animate__slideInRight"><?php the_field('hero_subheading'); ?></h4>
          <!-- Descrição abaixo do subtítulo -->
          <p class="mt-3 animate__animated animate__fadeInUp animate__slow"><?php the_field('hero_description'); ?></p>

          <?php
          // INFO: Recupera dados do botão do hero via ACF (tipo: Link)
          $hero_button = get_field('hero_button');
          if ($hero_button): ?>
            <a href="<?= esc_url($hero_button['url']) ?>" target="<?= esc_attr($hero_button['target']) ?>"
              class="btn scrollBtn animate__animated animate__fadeIn animate__delay-2s">
              <?= esc_html($hero_button['title']) ?>
            </a>
          <?php else: ?>
            <!-- Fallback: botão padrão se nenhum campo foi preenchido no ACF -->
            <a href="#todo-list" class="btn scrollBtn">Meet the To-do list</a>
          <?php endif; ?>
        </div>

        <?php
        // INFO: Imagem de fundo aplicada via CSS variável customizada (--hero-bg)
        $hero_bg = get_field('hero_bg_img');
        ?>
        <div class="hero-image mt-5 col-12 col-md-6 col-lg-5 text-center" <?php if ($hero_bg): ?>
            style="--hero-bg: url('<?= esc_url($hero_bg['url']); ?>');" <?php endif; ?>>

          <?php
          // INFO: Imagem principal do lado direito do hero
          $hero_main_img = get_field('hero_main_image');
          if ($hero_main_img): ?>
            <img class="img-fluid w-100 animate__animated animate__fadeIn animate__delay-1s"
              src="<?= esc_url($hero_main_img['url']); ?>" alt="<?= esc_attr($logo['alt']); ?>" />
          <?php endif; ?>
        </div>
      </div>

      <?php
      // INFO: Ícone de scroll com link (personalizável via ACF)
      $scroll_link = get_field('hero_scroll_link');
      $scroll_icon = get_field('hero_scroll_icon');
      if ($scroll_link): ?>
        <div class="d-flex align-items-center justify-content-center hero-icon mt-4">
          <a href="<?= esc_url($scroll_link) ?>">
            <?php if ($scroll_icon): ?>
              <img src="<?= esc_url($scroll_icon['url']) ?>" alt="<?= esc_attr($scroll_icon['alt']) ?>" />
            <?php endif; ?>
          </a>
        </div>
      <?php else: ?>
        <!-- Fallback: Ícone e link padrão caso não configurado -->
        <div class="d-flex align-items-center justify-content-center hero-icon mt-4">
          <a href="#todo-list">
            <img src="<?= get_template_directory_uri(); ?>/img/icons/icon-scroll.png" alt="Scroll Icon" />
          </a>
        </div>
      <?php endif; ?>

    </div>
  </section>
</main>

<section id="todo-list" class="todo-list d-flex flex-column">

  <!-- Título da seção To-do List -->
  <div class="todo-title text-center mb-5 mb-lg-3" data-aos="flip-up" data-aos-delay="200" data-aos-duration="1000">
    <?php
    // INFO: Recupera o campo de título da seção (tipo: Texto)
    $todo_title = get_field('todo_title');
    if ($todo_title): ?>
      <h2><?= esc_html($todo_title) ?></h2>
    <?php endif; ?>
  </div>

  <!-- Descrição da seção To-do List -->
  <div class="todo-desc text-center">
    <?php
    // INFO: Recupera a descrição da seção (tipo: Texto ou Área de texto)
    $todo_description = get_field('todo_description');
    if ($todo_description): ?>
      <p><?= esc_html($todo_description) ?></p>
    <?php endif; ?>
  </div>

</section>


<section id="plans" aria-label="Seção de planos"
  style="--plans-bg: url('<?= get_template_directory_uri(); ?>/img/background/plans_bg.png');">
  <div class="container mt-5 mb-5 px-4">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center">

      <?php
      $args = array(
        'post_type' => 'plano',
        'posts_per_page' => -1,
        'orderby' => 'title',
        'order' => 'ASC'
      );
      $plans_query = new WP_Query($args);

      if ($plans_query->have_posts()):
        while ($plans_query->have_posts()):
          $plans_query->the_post();

          $valor_plano = get_field('plan_value');
          $nome_plano = get_field('plan_name');
          $descricao_plano = get_field('plan_description');
          $cta_button = get_field('plan_cta_button');
          ?>

          <div class="col">
            <article class="plan-card d-flex flex-column justify-content-between p-3" data-aos-delay="200"
              data-aos-duration="1000" data-aos="zoom-in-up">

              <!-- Valor do plano -->
              <h2 class="plan-card-title text-center">
                R$ <?= esc_html($valor_plano); ?> / mês
              </h2>

              <!-- Nome e descrição do plano -->
              <div class="plan-card-name text-center">
                <h3 class="fw-normal mb-0"><?= esc_html($nome_plano); ?></h3>
                <p class="plan-name fw-bold"><?= esc_html($descricao_plano); ?></p>
              </div>

              <!-- Lista de recursos do plano -->
              <ul class="feature-list list-unstyled my-5">
                <?php for ($i = 1; $i <= 5; $i++): ?>
                  <?php
                  $recurso_texto = get_field("feature_{$i}_text");
                  $recurso_ativo = get_field("feature_{$i}_active");

                  if ($recurso_texto):
                    $icon = $recurso_ativo ? 'check_icon.png' : 'x_icon.png';
                    ?>
                    <li class="feature">
                      <img src="<?= get_template_directory_uri(); ?>/img/icons/<?= $icon; ?>" alt="" class="icon" />
                      <?= esc_html($recurso_texto); ?>
                    </li>
                  <?php endif; ?>
                <?php endfor; ?>
              </ul>

              <!-- Botão de chamada para ação -->
              <?php if ($cta_button): ?>
                <a href="<?= esc_url($cta_button['url']); ?>" class="btn d-block mx-auto scrollBtn"
                  target="<?= esc_attr($cta_button['target']); ?>" <?= $cta_button['target'] === '_blank' ? 'rel="noopener noreferrer"' : ''; ?>>
                  <?= esc_html($cta_button['title']); ?>
                </a>
              <?php endif; ?>

            </article>
          </div>

          <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>

    </div>
  </div>
</section>

<section id="good-things" class="good-things-section container" aria-label="Good Things - Destaques">
  <div class="good-things-container">

    <div class="swiper good-things-carousel px-2">

      <div class="title-wrapper" data-aos="fade-right">
        <?php $title = get_field('good_things_title'); ?>
        <?php if ($title): ?>
          <h2 class="section-title"><?= esc_html($title) ?></h2>
        <?php else: ?>
          <h2 class="section-title">good things</h2>
        <?php endif; ?>
      </div>

      <div class="swiper-wrapper">
        <?php
        $args = array(
          'post_type' => 'good-thing-post',
          'posts_per_page' => -1
        );
        $query = new WP_Query($args);

        if ($query->have_posts()):
          while ($query->have_posts()):
            $query->the_post();
            ?>

            <div class="swiper-slide" data-aos="fade-left" data-aos-duration="1000">
              <article class="card-box">

                <?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('medium', ['class' => 'card-img', 'alt' => get_the_title()]); ?>
                <?php else: ?>
                  <img src="<?= get_template_directory_uri(); ?>/img/posts/post_img.png" alt="Imagem padrão do post"
                    class="card-img" />
                <?php endif; ?>

                <div class="card-content">
                  <img class="logo-icon" src="<?= get_template_directory_uri(); ?>/img/logo/logo_icon.png" alt=""
                    aria-hidden="true" />

                  <?php
                  $categories = get_the_category();
                  if ($categories && !is_wp_error($categories)) {
                    echo '<span class="badge text-body-tertiary">' . esc_html($categories[0]->name) . '</span>';
                  }
                  ?>

                  <?php
                  $excerpt = get_the_excerpt();
                  ?>
                  <p><?= esc_html(mb_strimwidth($excerpt, 0, 50, '...')); ?></p>

                  <a href="<?php the_permalink(); ?>" class="read-more"
                    aria-label="Leia mais sobre <?php the_title_attribute(); ?>">
                    read more
                  </a>
                </div>

              </article>
            </div>

            <?php
          endwhile;
          wp_reset_postdata();
        endif;
        ?>
      </div>

      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>


<section id="form" class="form container" aria-labelledby="form-title">
  <?php
  //! Formulário estático, sem backend por enquanto
  ?>
  <div class="form-container mx-auto" data-aos="flip-up">
    <div>
      <img class="form-stroke" src="<?= get_template_directory_uri(); ?>/img/background/form_bg.png" alt=""
        aria-hidden="true" />
      <img class="img-fluid form-top-image" src="<?= get_template_directory_uri(); ?>/img/miscellaneous/form-img.png"
        alt="Imagem decorativa relacionada ao formulário de contato" />
    </div>

    <div class="d-flex align-items-center">
      <div class="form-icon-box">
        <img src="<?= get_template_directory_uri(); ?>/img/icons/mail_icon.png" alt="Ícone de e-mail" />
      </div>
      <div class="form-title mx-3">
        <h3 id="form-title" class="m-0">
          GET IN <br><span class="fw-bold">TOUCH</span>
        </h3>
      </div>
    </div>

    <form class="mt-5" action="" method="post" novalidate>
      <div class="row">
        <div class="col-12 mb-3">
          <label for="InputName" class="form-label mb-0">Your Name <span aria-hidden="true">*</span></label>
          <input type="text" placeholder="Type your name here..." class="form-control" id="InputName" name="name"
            required>
        </div>

        <div class="col-12 col-md-6 mb-3">
          <label for="InputEmail" class="form-label mb-0">Email <span aria-hidden="true">*</span></label>
          <input type="email" placeholder="example@example.com" class="form-control" id="InputEmail" name="email"
            required>
        </div>

        <div class="col-12 col-md-6 mb-3">
          <label for="InputCel" class="form-label mb-0">Telephone*</label>
          <input type="tel" placeholder="(  ) _____-____" class="form-control" id="InputCel" name="telephone" required>
        </div>

        <div class="col-12 mb-3">
          <label for="TextArea" class="form-label mb-0">Message</label>
          <textarea id="TextArea" name="message" class="form-control" placeholder="Type what you want to say to us"
            rows="5"></textarea>
        </div>

        <button type="submit" class="btn btn-primary form-btn fw-bold" aria-label="Enviar mensagem">SEND NOW</button>
      </div>
    </form>
  </div>
</section>
<?php

get_footer();
