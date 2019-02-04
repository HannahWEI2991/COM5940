<?php
/*
Template Name: Tutorial
Template Post Type: Page
*/
get_header()?>


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="http://dev-hannahqh.pantheonsite.io">Home
                              </a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="http://dev-hannahqh.pantheonsite.io/tutorial/">Tutorial
				<span class="sr-only">(current)</span>
				</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="http://dev-hannahqh.pantheonsite.io/bujo-ideas/">Article</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="http://dev-hannahqh.pantheonsite.io/stationery/">Stationery</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">An Overview of</span>
                <span class="section-heading-lower">BULLET JOURNAL</span>
              </h2>
              <p class="mb-0">The Bullet Journal is an organizational system created by Ryder Carroll, a Designer based in New York. To start with, you should know several key concepts of this system: rapid logging, bullets, the marking system and collection. You can start learning how to write bullet journal follwing the official instruction. When you are equipped with the mindset of the bullet journal, you could try to create your own bullet journal system.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php
        $paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'Tutorial',
            'posts_per_page' => 4,
            'paged' => $paged,
        );
        $arr_posts = new WP_Query( $args );

        if ( $arr_posts->have_posts() ) :

            while ( $arr_posts->have_posts() ) :
                $arr_posts->the_post();
                ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <section class="page-section">
      <div class="container">
        <div class="product-item">
          <div class="product-item-title d-flex">
            <div class="bg-faded p-5 d-flex mr-auto rounded">
              <h2 class="section-heading mb-0">
                <span class="section-heading-lower"><?php the_title(); ?></span>
              </h2>
            </div>
          </div>
          <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0"             <?php
            if ( has_post_thumbnail() ) :
                the_post_thumbnail();
            endif;
            ?>>
          <div class="product-item-description d-flex ml-auto">
            <div class="bg-faded p-5 rounded">
              <p class="mb-0"><?php the_content(); ?></p>
            </div>
          </div>
        </div>
      </div>
    </section>

	</article>
        <?php
    endwhile;
endif;?>


    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">LEARN MORE ABOUT BULLET JOURNAL</span>
                <span class="section-heading-lower">Watch A Video</span>
              </h2>
<iframe width="560" height="315" src="https://www.youtube.com/embed/fm15cmYU0IM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           </div>
          </div>
        </div>
      </div>
    </section>


<?php get_footer() ?>
