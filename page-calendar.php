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

<section class="calendar">
  <div class="calblock">
    <h2 class="calhead">Find A Cart Near You</h2>
    <h4 class="calbody">We are always open at our location on Granny White.<br>During the spring and summer, though, we get a chance to stretch our legs a bit.<br>Thanks to our great partners, our carts can be found all over Middle Tennessee.<br>So, check the calendar!<br>We're probably just around the corner.</h4>
    <h3 class="arrow"><i class="fa fa-arrow-circle-right"></i></h3>
  </div>
  <div class="googlecal">
    <iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=bobbylbrock%40gmail.com&amp;color=%231B887A&amp;ctz=America%2FChicago" style=" border-width:0 " width="100%" height="600" frameborder="0" scrolling="no"></iframe>
  </div>
  <div class="googlecalmobile">
    <iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=WEEK&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=bobbylbrock%40gmail.com&amp;color=%231B887A&amp;ctz=America%2FChicago" style=" border-width:0 " width="100%" height="600" frameborder="0"></iframe> 
  </div>
</section>

<section class="event-head" id="event-head">
  <div class="event_title"><h2 class="event-title">Our Partners</h2></div>
</section>

<section class="partners">
  <div class="partner-logo">
    <a href="http://tazikiscafe.com/"><img src="http://localhost:8888/wp-content/themes/padrinos_theme/img/tazikis.png">
  </div>
  <div class="partner-logo">
    <a href="http://martinsbbqjoint.com/"><img src="http://localhost:8888/wp-content/themes/padrinos_theme/img/martins.png">
  </div>
  <div class="partner-logo">
    <a href="http://www.nashvillefarmersmarket.org/"><img src="http://localhost:8888/wp-content/themes/padrinos_theme/img/farmersmarket.png"></a>
  </div>
</section>



  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
