<?php
/**
 * The main template file
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
  <div class="hero-logo container p-0 mb-5 mb-md-0">
    <!-- ACF: Campo de imagem (image) - "hero_logo" -->
    <img src="<?php echo get_template_directory_uri(); ?>/img/logo/logo_full.png" alt="" />
  </div>

  <div class="container">
    <div class="hero-content row mt-5 mt-md-0 align-items-center">
      <div class="hero-text col-12 col-md-6 col-lg-7 px-0">
        <!-- ACF: Campo de texto (text) - "hero_heading" -->
        <h1 class="m-0">Organize</h1>

        <!-- ACF: Campo de texto (text) - "hero_subheading" -->
        <h4 class="m-0">your daily jobs</h4>

        <!-- ACF: Campo de textarea (textarea) - "hero_description" -->
        <p class="mt-3">The only way to get things done.</p>

        <!-- ACF: Campo de link (link ou URL + texto) - "hero_button" -->
        <a href="#todo-list" class="btn scrollBtn">Meet the To-do list</a>
      </div>

      <div class="hero-image mt-5 col-12 col-md-6 col-lg-5 text-center"
     style="--hero-bg: url('<?php echo get_template_directory_uri(); ?>/img/background/hero_bg.png');">

        <!-- ACF: Campo de imagem (image) - "hero_image" -->
        <img
          class="img-fluid w-100"
          src="<?php echo get_template_directory_uri(); ?>/img/miscellaneous/hero_image.png"
          alt="Mulher sorrindo"
        />
      </div>
    </div>

    <div class="d-flex align-items-center justify-content-center hero-icon mt-4">
      <!-- ACF: Campo de imagem (image) - "hero_scroll_icon" -->
      <a href="#todo-list">
        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-scroll.png" alt="" />
      </a>
    </div>
  </div>
</section>


    <section id="todo-list" class="todo-list d-flex flex-column">
      <div class="todo-title text-center mb-5 mb-lg-3">
        <!-- TO-DO TITLE -->
        <h1>To-do List</h1>
      </div>
      <div class="todo-desc text-center">
        <!-- TO-DO DESCRIPTION -->
        <p>
          Choose the right plan for you and get in touch through our contact
          form. We are here to help.
        </p>
      </div>
    </section>

<section id="plans" style="--plans-bg: url('<?php echo get_template_directory_uri(); ?>/img/background/plans_bg.png');">
  <div class="container mt-5 mb-5 px-4">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center">
      
      <!-- ACF: Campo Repeater - "planos" -->

      <!-- Card (repetível) -->
      <div class="col">
        <article class="plan-card d-flex flex-column justify-content-between p-3">
          <!-- Subcampo: Texto - "preco" -->
          <h1 class="plan-card-title text-center">R$ 20 / mês</h1>
          <div class="plan-card-name text-center">
          <!-- Subcampo: Texto - "nome_plano" -->
            <h4 class="fw-normal mb-0">Basic Plan</h4>
          <!-- Subcampo: Texto - "descricao_plano" -->
            <h4 class="plan-name fw-bold">unlimited tasks</h4>
          </div>
          <!-- Subcampo: Lista Repetível (ou grupo) - "recursos" -->
          <!--- Subcampo: Texto - "descricao_recurso" -->
          <!--- Subcampo: Booleano ou Select (ativo/inativo) - "recurso_disponivel" -->
          <ul class="feature-list list-unstyled my-5">
            <li class="feature"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/check_icon.png" alt="" class="icon" /> Create to-do lists</li>
            <li class="feature"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/check_icon.png" alt="" class="icon" /> Share via WhatsApp</li>
            <li class="feature"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/x_icon.png" alt="" class="icon" /> Offline mode</li>
            <li class="feature"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/x_icon.png" alt="" class="icon" /> Invite collaborators</li>
            <li class="feature"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/x_icon.png" alt="" class="icon" /> Dark mode</li>
          </ul>
          <!-- Subcampo: Link - "botao_cta" -->
          <a href="#form" class="btn d-block mx-auto scrollBtn">get in touch</a>
        </article>
      </div>

      <!-- Repetir bloco para cada item do repeater -->
    </div>
  </div>
</section>

<section class="good-things-section container">
  <div class="good-things-container">

    <div class="swiper good-things-carousel px-2">
      <div class="title-wrapper">
        <!-- ACF: Campo Texto - "Título da Seção" -->
        <h2 class="section-title">good things</h2>
      </div>

      <div class="swiper-wrapper">

        <!-- WP Loop: Buscar posts do CPT 'main_posts' -->
        <!-- Para cada post: -->


        <!-- Slide -->
        <div class="swiper-slide card-box">
          <!-- Campo nativo: Imagem destacada do post the_post_thumbnail() -->
          <img src="<?php echo get_template_directory_uri(); ?>/img/posts/post_img.png" alt="" class="card-img" />
          <div class="card-content">
            <!-- ACF: Imagem - "logo_icone" -->
            <img class="logo-icon" src="<?php echo get_template_directory_uri(); ?>/img/logo/logo_icon.png" alt="" />
            <!-- Categoria do post (badge) get_the_category() -->
            <span class="badge text-body-tertiary">Categoria do post</span>
            <!-- Descrição do post get_the_excerpt() -->
            <p>Trecho do conteúdo</p>
            <!-- Link do post get_permalink() (get_permalink) -->
            <a href="#" class="read-more">read more</a>
          </div>
        </div>


        <!-- Fim do loop -->
      </div>

      <!-- Paginador do Swiper -->
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>

<section id="form" class="form container">
  <div class="form-container mx-auto">
    <div class="">
      <img class="form-stroke" src="<?php echo get_template_directory_uri(); ?>/img/background/form_bg.png" alt=""></img>
      <img class="img-fluid form-top-image" src="<?php echo get_template_directory_uri(); ?>/img/miscellaneous/form-img.png" alt="">
    </div>

    <div class="d-flex align-items-center">
      <div class="form-icon-box">
        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/mail_icon.png" alt="">
      </div>
      <div class="form-title mx-3">
        <h3 class="m-0">
          GET IN <br><span class="fw-bold">TOUCH</span>
        </h3>
      </div>
    </div>

    <form class="mt-5" action="">
    <div class="row">
      <div class="col-12 mb-3">
        <label for="InputName" class="form-label mb-0">Your Name</label>
        <input
          type="text"
          placeholder="Type your name here..."
          class="form-control"
          id="InputName"
          aria-describedby="emailHelp"
        >
      </div>

            <div class="col-12 col-md-6 mb-3">
        <label for="InputEmail" class="form-label mb-0">Email</label>
        <input
          type="text"
          placeholder="example@example.com"
          class="form-control"
          id="InputEmail"
          aria-describedby="emailHelp"
        >
      </div>

            <div class="col-12 col-md-6 mb-3">
        <label for="InputCel" class="form-label mb-0">Telephone*</label>
        <input
          type="text"
          placeholder="(  ) _____-____"
          class="form-control"
          id="InputCel"
          aria-describedby="emailHelp"
        >
      </div>

            <div class="col-12 mb-3">
        <label for="TextArea" class="form-label mb-0">Message</label>
        <textarea id="TextArea" class="form-control" placeholder="Type what you want to say to us" id="floatingTextarea"></textarea>
      </div>

      <button type="submit" class="btn btn-primary form-btn fw-bold">SEND NOW</button>
    </div>
    </form>
  </div>
</section>
</main>

<?php

get_footer();
