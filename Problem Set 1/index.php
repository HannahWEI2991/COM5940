<?php get_header() ?>

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
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="http://dev-hannahqh.pantheonsite.io/tutorial/">Tutorial
								</a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="http://dev-hannahqh.pantheonsite.io/bujo-ideas/">Article
				<span class="sr-only">(current)</span>
				</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="http://dev-hannahqh.pantheonsite.io/stationery/">Stationery</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="page-section about-heading">
      <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="<?php bloginfo("template_url")?>/img/about.jpg" alt="">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper">Creative Design, Inspiring Ideas</span>
                  <span class="section-heading-lower">Good Page Ideas from Outstanding Bujoers</span>
                </h2>
  <?php
        $paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'Article',
            'posts_per_page' => 5,
            'paged' => $paged,
        );
        $arr_posts = new WP_Query( $args );

        if ( $arr_posts->have_posts() ) :

            while ( $arr_posts->have_posts() ) :
                $arr_posts->the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                          <div class="post-preview">
                              <a href="<?php the_permalink(); ?>" style="color:#EEAB56;"><h2 style="font-size:1.6rem;font-weight:bold;" class="post-title">
								  <?php the_title();?></h2></a>
				<?php the_post_thumbnail('full', array('class'=>'img-fluid'), array('alt'=>'news image'));?>
                             <br><h3 style="font-size:1.1rem" class="post-subtitle">
                                <?php the_excerpt();?>
                              </h3>

                            <p class="post-meta">Posted by
								<span style="color:#EEAB56; font-weight:bold"><?php the_author(); ?></span>
                              on <?php the_date(); ?></p>
                          </div>
                          <hr>

					        <?php
    endwhile;
endif;?>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>

<?php get_footer() ?>
