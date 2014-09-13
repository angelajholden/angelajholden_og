      </section><?php //Page Wrap ?>

    <section class="aboutWrap">
      <div class="aboutMe clearfix">
      	<img src="<?php bloginfo('template_url'); ?>/images/angela.jpg" alt="About Angela J. Holden Website Design" title="Angela J. Holden">
      	<p>My name is Angela Holden and I’m a freelance web designer and technical writer from Minneapolis, MN, now living in San Diego, CA. I love WordPress, content, color, typography, and providing great user experiences. I’ve been designing websites for more than four years and I love every minute that I spend doing it. In 2009 I built my first website, and in 2013 I earned a Master’s Degree in Technical Communication from Metropolitan State University.</p>

        <p>I work from my home in San Diego and I have clients in the U.S. and overseas. For more information about what I can do, please <a href="<?php bloginfo('url'); ?>/contact/">contact</a> me for a consultation.</p>

        <p>Cheers!</p>
        <div class="signature"><?php include('inc/signature.svg'); ?></div>
      </div>
    </section>

    <footer>

      <div class="footer-wrap clearfix">

        <div class="ajh-footer">
          <img src="<?php bloginfo('template_url') ?>/images/logo.png">
          <p><?php echo date('Y'); ?> &copy; Angela Holden Design LLC</p>
          <?php include('search.php'); ?>
        </div>

        <div class="ajh-footer">
          <h3 class="bold-title">Projects</h3>
          <ul>
            <li><a href="http://angelaholdendesign.com">Angela Holden Design</a></li>
            <li><a href="http://fazilsayfan.com">Fazıl Say Fan</a></li>
            <li><a href="http://circleof5ths.com">Circle of 5ths</a></li>
            <li><a href="http://responsivevideogallery.com">Responsive Video Gallery</a></li>
            <li><a href="http://wikipediageeks.com">Wikipedia Geeks</a></li>
          </ul>
          <p class="bold-title"><a href="<?php bloginfo('url') ?>/contact/">Contact me for a quote</a></p>
        </div>

        <div class="ajh-footer">
          <h3 class="bold-title">Social</h3>
          <ul>
            <li><a href="http://facebook.com/angelajholdendesignllc">Facebook</a></li>
            <li><a href="http://twitter.com/angelaholden">Twitter</a></li>
            <li><a href="https://plus.google.com/u/0/+AngelaHoldenDesign/posts">Google Plus</a></li>
          </ul>
          <h3 class="bold-title">Work</h3>
          <ul>
            <li><a href="http://github.com/angelajholden">Fork my work on Github</a></li>
            <li><a href="http://etsy.com/shop/angelajholden">Visit my Etsy Shop</a></li>
          </ul>
        </div>

      </div> <?php // End Footer Wrap ?>

      <div style="clear:both;"></div>

      <div class="bottom-footer">
        <p><a href="https://goo.gl/maps/GfWkG">Made with &#10084; in San Diego, California</a></p>
      </div>

    </footer>
    <?php wp_footer(); ?>
  </body>
</html>