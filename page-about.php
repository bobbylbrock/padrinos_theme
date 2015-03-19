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

    <section class="aero" style="background-image:url(http://localhost:8888/wp-content/themes/padrinos_theme/img/abouthead50.jpg);">
      <h1>Lorena Mendoza Cantu is a third generation paleta maker,<br>following in her grandfather and father’s footsteps<br>by owning and operating her own paleteria,<br>Padrino’s Pops.</h1>
    </section>

    <section class="event-head" id="event-head">
      <div class="about_title"><h2 class="about-title">Our Story</h2></div>
    </section>

    <section class="about_row1">
      <div class="abouttextimg">
        <img src="http://localhost:8888/wp-content/themes/padrinos_theme/img/about1a.png" onmouseover="this.src='http://localhost:8888/wp-content/themes/padrinos_theme/img/about1b.png'" onmouseout="this.src='http://localhost:8888/wp-content/themes/padrinos_theme/img/about1a.png'" />
      </div>
      <div class="abouttextimg">
        <img src="http://localhost:8888/wp-content/themes/padrinos_theme/img/about2a.png" onmouseover="this.src='http://localhost:8888/wp-content/themes/padrinos_theme/img/about2b.png'" onmouseout="this.src='http://localhost:8888/wp-content/themes/padrinos_theme/img/about2a.png'" />
      </div>
      <div class="abouttextimg">
        <img src="http://localhost:8888/wp-content/themes/padrinos_theme/img/about3a.png" onmouseover="this.src='http://localhost:8888/wp-content/themes/padrinos_theme/img/about3b.png'" onmouseout="this.src='http://localhost:8888/wp-content/themes/padrinos_theme/img/about3a.png'" />
      </div>
      <div class="abouttextimg">
        <img src="http://localhost:8888/wp-content/themes/padrinos_theme/img/about4a.png" onmouseover="this.src='http://localhost:8888/wp-content/themes/padrinos_theme/img/about4b.png'" onmouseout="this.src='http://localhost:8888/wp-content/themes/padrinos_theme/img/about4a.png'" />
      </div>
      <div class="abouttextimg">
        <img src="http://localhost:8888/wp-content/themes/padrinos_theme/img/about5a.png" onmouseover="this.src='http://localhost:8888/wp-content/themes/padrinos_theme/img/about5b.png'" onmouseout="this.src='http://localhost:8888/wp-content/themes/padrinos_theme/img/about5a.png'" />
      </div>
      <div class="abouttextimg">
        <img src="http://localhost:8888/wp-content/themes/padrinos_theme/img/about6a.png" onmouseover="this.src='http://localhost:8888/wp-content/themes/padrinos_theme/img/about6b.png'" onmouseout="this.src='http://localhost:8888/wp-content/themes/padrinos_theme/img/about6a.png'" />
      </div>
    </section>


    <section class="about_rowmobile">
      <div class="blockfive">
        <h2 class="simple">1978</h2>
        <h4 class="ingredients">Jose Mendoza found himself unsure how as to how he would support his 13 children and

          put them through school. Jesus, Jose’s cousin, and godfather to his eldest son, Geronimo, suggested

          purchasing the two paleterias for sale in Saltillo, Coahuila, Mexico. Jose took Jesus’ advice and risked

          everything by quitting his strawberry picking job, and taking out a loan with the help of Jesus acting as the

          co-signee.</h4>
      </div>
      <div class="blocksix">
        <h2 class="simple">1978 Cont.</h2>
        <h4 class="ingredients">Jose and Jesus traveled to Mexico City to negotiate the purchase of the two paleterias. They sent

          Jose’s son, Geronimo to learn how to use the equipment and how to make paletas. He was given just 12

          hours of training.

          Despite faulty equipment and other setbacks, the Mendozas pooled their limited resources and

          equipment between the two stores and successfully opened both stores in July of 1978.</h4>
          </div>
      <div class="blockthree">
        <h2 class="simple">1979</h2>
        <h4 class="ingredients">Geronimo Mendoza married Dora Maria Puente and started a family of his own,

          including a daughter named Lorena. In 1980, Geronimo bought one of his father’s paleterias and invested

          in new equipment, which enabled him to produce the paletas at a much faster rate, increasing the volume

          of his operations.</h4>
      </div>
      <div class="blockfour">
        <h2 class="simple">1988</h2>
        <h4 class="ingredients">The economy in Saltillo declined, so Geronimo sought out other business opportunities

          and a year later he opened a third family paleteria in Chihuahua. Business was so good that by 1993

          Geronimo relocated his family to Chihuahua.</h4>
      </div>
      <div class="blockfive">
        <h2 class="simple">2011</h2>
        <h4 class="ingredients">Geronimo decided to retire and move back to Saltillo, but his retirement didn’t last long.

          Geronimo’s passion for his paleterias proved too strong and by 2012 he opened a new paleteria, which he

          still runs today, debt-free.</h4>
      </div>
      <div class="blocksix">
        <h2 class="simple">2014</h2>
        <h4 class="ingredients">Geronimo’s daughter, Lorena Mendoza Cantu followed in her father’s footsteps and opened her

          own paleteria, Padrino’s Pops in March 2014. Her passion for her craft is evident in every paleta she

          makes. Lorena’s commitment to using fresh ingredients, as well as her dedication to the traditional paleta

          making techniques passed down through her family, are what set her paletas apart from other popsicles.</h4>
      </div>
      </section>
</main><!-- #main -->
</div><!-- #primary -->









<?php get_footer(); ?>
