<?php get_header()?>
<style>
	h3{
		color:#EEAB56;
		font-weight:bold;
	};
	</style>

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
  <a class="nav-link text-uppercase text-expanded" href="http://dev-hannahqh.pantheonsite.io">Home</a>
  </li>
  <li class="nav-item px-lg-4">
  <a class="nav-link text-uppercase text-expanded" href="http://dev-hannahqh.pantheonsite.io/tutorial/">Tutorial</a>
  </li>
  <li class="nav-item px-lg-4">
  <a class="nav-link text-uppercase text-expanded" href="http://dev-hannahqh.pantheonsite.io/bujo-ideas/">Article</a>
  </li>
  <li class="nav-item active px-lg-4">
  <a class="nav-link text-uppercase text-expanded" href="http://dev-hannahqh.pantheonsite.io/stationery/">Stationery</a>
 <span class="sr-only">(current)</span>
   </li>
</ul>
        </div>
      </div>
    </nav>
    <section class="page-section about-heading">
      <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/stationery.jpg" alt="">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper">Start Your Bujo Journey</span>
                  <span class="section-heading-lower">Stationery Recommendation</span>
                </h2>
                <p>
				  <?php
$query = new AirpressQuery();
$query->setConfig("Default");
$query->table("stationery");
$events = new AirpressCollection($query);
foreach($events as $e){
echo "<h3>".$e["Name"]."</h3>"
	."<img src='".$e["pic_name"]."'>"
	."<br>"
	."<p>".$e["Description"]."</p>"
   ."<a target='_blank' class='btn btn-primary btn-xl' href='".$e["Shopping Link"]."'>"."Buy Now"."</a>"
	."<br>"
	."<br><hr><br>";

}
?>
				     </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php get_footer() ?>                 
