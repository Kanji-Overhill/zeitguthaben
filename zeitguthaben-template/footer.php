<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Zeitguthaben_Template
 */

?>

	</main>
    <footer>
      <section class="container footer-1">
        <div class="row d-flex align-items-end">
          <div class="col-md-4 col-12">
            <img src="<?php echo get_template_directory_uri() ?>/images/logo.jpg" alt="">
            <p>
              Stefanie Plum<br>
              Konrad-Adenauer-Str. 48<br>
              53757 Sankt Augustin<br>
              T. 0176  84265160<br>
              info@zeit-gut-haben.de<br>
            </p>
          </div>
          <div class="col-md-8 col-12">
            <ul>
              <li><a href="">Startseite</a></li>
              <li><a href="">Seminare</a></li>
              <li><a href="">Coachings</a></li>
              <li><a href="">Über mich</a></li>
              <li><a href="">Blog</a></li>
              <li><a href="">Kontakt</a></li>
              <li><a href="">Impressum</a></li>
              <li><a href="">Datenshutz</a></li>
            </ul>
          </div>
        </div>
      </section>
    </footer>
    <?php wp_footer(); ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/slick.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://demos.kunkalabs.com/mixitup/mixitup.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/main.js"></script>

</body>
</html>
