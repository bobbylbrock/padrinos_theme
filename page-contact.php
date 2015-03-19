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




<section class="info-mobile">
  <div class="mobileinfo">
    <a href="http://maps.google.com/maps?saddr=&daddr=4002c%20Granny%20White,%20Nashville,%20TN"><h2 class="contactinfo"><i class="fa fa-globe"></i></i> 4002c Granny White, Nashville TN, 37204</h2></a>
    <div class="infophone">
      <a href="tel:+16156101833"><h2 class="contactinfo"><i class="fa fa-phone"></i></i> (615) 610-1833</h3></a>
      </div>
      <div class="infoemail">
        <a href="mailto:lorena@padrinospops.com"><h2 class="contactinfo"><i class="fa fa-envelope"></i></i> lorena@padrinospops.com</h3></a>
        </div>
      </div>
    </section>


<body>

<section class="body">

  <form action="form.php" method="post" enctype="multipart/form-data">

    <h1 class="title">Get in touch</h1>

    <label></label>
    <input name="name" required="required" placeholder="Your Name">


    <label></label>
    <input name="email" type="email" required="required" placeholder="Your Email">


    <label></label>
    <textarea name="message" cols="20" rows="5" required="required" placeholder="Write your message here. We'll get back to you really soon."></textarea>


    <!-- <input id="cancel" name="cancel" value="Cancel" /> -->

    <input id="submit" name="submit" type="submit" value="Send it">

  </form>

</section>
</body>


<section class="info-stack">
  <div class="infoaddress">
    <a href="http://maps.google.com/maps?saddr=&daddr=4002c%20Granny%20White,%20Nashville,%20TN"><h2 class="contactinfo"><i class="fa fa-globe"></i></i> 4002c Granny White, Nashville TN, 37204</h2></a>
  <div class="infophone">
    <a href="tel:+16156101833"><h2 class="contactinfo"><i class="fa fa-phone"></i></i> (615) 610-1833</h3></a>
  </div>
  <div class="infoemail">
    <a href="mailto:lorena@padrinospops.com"><h2 class="contactinfo"><i class="fa fa-envelope"></i></i> lorena@padrinospops.com</h3></a>
  </div>
</div>
</section>


<sectionclass="map">
<div class="googlemap">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12894.040585484969!2d-86.79568910000003!3d36.10542740000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8864644415b85f77%3A0x2ad44d6482cf1ac4!2s4002+Granny+White+Pike%2C+Lipscomb+University%2C+Nashville%2C+TN+37204!5e0!3m2!1sen!2sus!4v1425070791311" width="100%" height="450" frameborder="0" style="border:0"></iframe>
</div>
</section>




<?php get_footer(); ?>
