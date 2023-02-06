<?php
/*
 * The Index Post (or excerpt)
 * ===========================
 * Used by index.php, category.php and author.php
 */
?>


<article role="article" id="post_<?php the_ID()?>" <?php post_class("entry-content pb-3 border-bottom mb-5"); ?> >
  <header class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <h1>Driving Modern Software Development</h1>
        <p>It all began at a hackathon in 2015. RapidAPI was made by developers for developers so they could have one place to access APIs and Microservices and build applications more efficiently and easily. Today, RapidAPI is the world’s largest API Hub where almost 3 million developers can find, test, and connect to tens of thousands of APIs — all with a single account, single API key, and single SDK.</p>
        <button id="userFormModalTrigger" class="btn btn-outline-success" type="button">Try it</button>
      </div>
      <div class="col-md-6">
        <img src="https://image.tmdb.org/t/p/w500/sv1xJUazXeYqALzczSZ3O6nkH75.jpg"/>
      </div>
    </div>
  </header>

  <section class="container mt-5">
    <h1 class="section-heading">About Us</h1>
    <p>WordPress news plugins let you display current events or news on your site, for example, with the help of a ticker. Breaking news or updates, but also articles or teasers, can be shown more prominently to readers. This brings some advantages: on the one hand, readers get a quick overview, on the other hand, it encourages them to stay on the website. Especially if the news matches the theme of your site, a WordPress news plugin can enhance your online presence and can, for example, bring in readers via Google News.</p>
  </section>

  <section id="newFilmsSection" class="container mt-5">
    <h1 class="section-heading">New Films</h1>
    <div class="row mx-auto my-auto justify-content-center">
      <div id="carouselNewFilms" class="carousel carousel-new-films slide">
        <div class="carousel-inner" role="listbox">
        </div>
        <a class="carousel-control-prev bg-transparent w-aut" href="#carouselNewFilms" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next bg-transparent w-aut" href="#carouselNewFilms" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
      </div>
    </div>
  </section>

  <section id="latestNewsSection" class="container mt-5">
    <h1 class="section-heading">Latest News</h1>
    <ul class="latest-news--list"></ul>
  </section>

  <section id="reviewsSection" class="container mt-5">
    <h1 class="section-heading">Reviews</h1>
    <div id="carouselReviews" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <?php echo do_shortcode('[site_reviews assigned_users="callie"]'); ?>
        </div>
        <div class="carousel-item">
          <?php echo do_shortcode('[site_reviews assigned_users="bob"]'); ?>
        </div>
        <div class="carousel-item">
          <?php echo do_shortcode('[site_reviews assigned_users="cinema24admin"]'); ?>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselReviews" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselReviews" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <section>
    <?php the_post_thumbnail(); ?>

    <?php if ( has_excerpt( $post->ID ) ) {
    the_excerpt();
    ?><a href="<?php the_permalink(); ?>">
    	<?php _e( 'Continue reading...', 'cinema24' ) ?>
      </a>
  	<?php } else {
  	  the_content( __('Continue reading...', 'cinema24' ) );
	  } ?>
  </section>
</article>

<script>

</script>

