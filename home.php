<?php
/**
* The main template file.
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
* Learn more: http://codex.wordpress.org/Template_Hierarchy
*
* @package Padrinos_Theme
*/

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <section class="hero" style="background-image:url(http://localhost:8888/wp-content/themes/padrinos_theme/img/strawberryred.jpg);">
        <img class="brand" src="http://localhost:8888/wp-content/themes/padrinos_theme/img/padrino's750.png">
        <h1>Fruity and Creamy Frozen Paletas Made Fresh from our Family to Yours.</h1>
        <a href="http://padrinospops.com/about" class="btn">Our Story</a>
        <a href="http://padrinospops.com/menu" class="btn btn-secondary" id="button">Our Flavors</a>
        <!-- <i class="fa fa-angle-double-down"></i> -->
    </section>
  </main><!-- #main -->
</div><!-- #primary -->



<section class="calendar-feature" id="calendar-feature">
  <div class="info">
    <h2 class="heading">Where Are We?</h2>
    <h3 class="lead">Find a cart near you.</h3>
    <p>
      We have our main store across from Lipscomb, but you can find our paletas all over Nashville.<br> Our roaming carts can be found at the city's best restaurants, shops, and events.<br>Check the calendar to see where we are today.
    </p>
    <a href="http://padrinospops.com/calendar" class="btn btn">Find Us</a>
  </div>
  <!-- <div class="calendar-img">
    <h4 class="calendar"><i class="fa fa-calendar"></i></h4>
  </div> -->
  <div class="calendar-img">
    <img src="http://localhost:8888/wp-content/themes/padrinos_theme/img/calendar2.png">
  </div>
</section>


<section class="booking-feature" id="booking-feature">
  <div class="booking-img">
    <img src="http://localhost:8888/wp-content/themes/padrinos_theme/img/balloons.png">
  </div>
  <div class="info">
    <h2 class="heading">Let's Party!</h2>
    <h3 class="lead">The better alternative to cake.</h3>
    <p>
      Our Paletas are the perfect treat for every occasion.<br>Birthday parties, baby showers, rehearsal dinners, or just because it's Wednesday..<br>Everything is better with Padrino's.<br>Book us for your event and see why we're the better alternative to cake and ice cream.
    </p>
    <a href="http://padrinospops.com/events" class="btn">Book Us</a>
  </div>
</section>





<section class="review-feature" id="review-feature">
  <div class="review-head">
    <h2 class="heading">What our fans are saying.</h2>
  </div>
  <div class="quote-img">
    <a href="https://www.facebook.com/padrinos.pops"><img src="http://localhost:8888/wp-content/themes/padrinos_theme/img/quotefacebook.png">
  </div>
  <div class="quote-img">
    <a href="http://www.yelp.com/biz/padrinos-pops-nashville"><img src="http://localhost:8888/wp-content/themes/padrinos_theme/img/quoteyelp2.png">
  </div>
  <div class="quote-img">
    <a href="https://twitter.com/padrinospops"><img src="http://localhost:8888/wp-content/themes/padrinos_theme/img/quotetwitter2.png"></a>
  </div>
  <div class="quote-img">
    <a href="https://instagram.com/padrinospops/"><img src="http://localhost:8888/wp-content/themes/padrinos_theme/img/quoteinstagram2.png"></a>
  </div>
</section>




<?php get_footer(); ?>
