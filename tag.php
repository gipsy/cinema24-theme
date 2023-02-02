<?php
  get_header();
  cinema24_main_before();
?>

<main id="site-main" class="mt-5">

  <header class="mb-5 text-center">
    <h1>
      <?php _e('Tag: ', 'cinema24'); echo single_tag_title(); ?>
    </h1>
  </header>

  <?php get_template_part('loops/index-loop'); ?>

  <?php
  /*
  Did you want a traditional article-plus-sidebar layout?
  =======================================================
  Use this below instead of the one line above -- and
  remove some of the CSS styles controlling `.entry-content`

  <div class="container">
    <div class="row">
      <div class="col-sm">
        <div id="content" role="main">
          <header class="mb-5">
            <h1>
              <?php _e('Tag: ', 'cinema24'); echo single_tag_title(); ?>
            </h1>
          </header>
          <?php get_template_part('loops/index-loop'); ?>
          </div>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
  */
  ?>

</main>

<?php
  cinema24_main_after();

  if(is_active_sidebar('main-widget-area')): ?>
  <section id="site-main-widgets" class="bg-light">
    <div class="container">
      <div class="row pt-5 pb-4" id="main-widget-area" role="navigation">
        <?php
          cinema24_main_widgets_before();
          dynamic_sidebar('main-widget-area');
          cinema24_main_widgets_after();
        ?>
      </div>
    </div>
  </section>
  <?php endif;

  get_footer();
?>
