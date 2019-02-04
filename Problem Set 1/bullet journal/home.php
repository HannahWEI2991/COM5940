<?php
/*
Template Name: Home
Template Post Type: Page
*/
get_header() ?>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="http://dev-hannahqh.pantheonsite.io">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="http://dev-hannahqh.pantheonsite.io/tutorial/">Tutorial</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="http://dev-hannahqh.pantheonsite.io/bujo-ideas/">Articles</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="http://dev-hannahqh.pantheonsite.io/stationery/">Stationery</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<section class="page-section clearfix">
      <div class="container">
        <div class="intro">
          <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="<?php bloginfo("template_url")?>/img/intro.jpg" alt="">
          <div class="intro-text left-0 text-center bg-faded p-5 rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">The Magic of</span>
              <span class="section-heading-lower">Bullet Journal</span>
            </h2>
            <p class="mb-3">Many of us have a lot of tasks to deal with everyday. Do you feel overloaded sometimes? Do you often have to study or work late to hit your deadlines? Bullet Journal is a powerful tool that can help you keep a record of everything and help you "track the past, organize the present, and plan for the future". With bullet journal, you can effectively manage your time and become a pilot of your life.
            </p>
            <div class="intro-button mx-auto">
              <a class="btn btn-primary btn-xl" href="http://dev-hannahqh.pantheonsite.io/tutorial/">See Tutorial!</a>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php get_footer() ?>
