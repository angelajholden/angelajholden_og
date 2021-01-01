</main>

<footer>
    <div class="wrap clearfix">

        <div class="ajh-footer">
            <a href="<?php bloginfo('url'); ?>">
                <figure class="logoSVGfooter"><?php ajh_logo(); ?></figure>
            </a>
            <p class="copyright">Copyright &copy; <?php echo date('Y'); ?><br />Angela Holden Design LLC</p>
        </div>

        <div class="ajh-footer">
            <?php ajh_social_profiles(); ?>
            <?php echo get_search_form(); ?>
        </div>

        <nav class="ajh-footer">
            <h3>Recent Projects</h3>
            <?php wp_nav_menu( array( 
				'name'			=> 'Footer One',
				'theme_location'=> 'footer_one',
				'container'		=> 'false',
				'menu_class'	=> 'footer-nav',
				'depth'			=> '1'
				));
			?>
        </nav>

    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>
