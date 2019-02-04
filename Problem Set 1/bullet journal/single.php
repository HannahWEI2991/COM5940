<?php get_header()?>

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
                  <span class="section-heading-lower"><?php the_title();?></span>
                </h2>

<?php the_post_thumbnail('full', array('class'=>'img-fluid'), array('alt'=>'news image'));?>

				  <?php if (have_posts()):
               while (have_posts()):
                  the_post(); ?>
                          <div class="post-preview">
                              <h3 style="font-size:1.1rem" class="post-subtitle">
                                <?php the_content();?>
                              </h3>

                            <p class="post-meta">Posted by
                              <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
                              on <?php the_date(); ?></p>
                          </div>
                          <hr>
				<?php endwhile;
				endif; ?>

            </div>
          </div>
        </div>
      </div>
    </div>
    </section>

<?php get_footer() ?>
