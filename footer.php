<footer>
  <div class="container">
    <p class="boldestDinger">become a symbol of change.</p>
    <h2 class="footerTitle">Get Perpetual Change, the monthly, quick‑tip e‑mail from Karl.</h2>
  </div>
  <div class="container">
    <?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true"]'); ?>
  </div>
  <div class="container">
    <div class="footerContent">
      <div class="footerLogo"><img id="footer_logo" src="<?php echo get_theme_file_uri('/resources/images/logo.svg'); ?>"></div>
      <?php
        wp_nav_menu( array(
          'theme_location' => 'footer-menu',
          'container_class' => 'nav-footer' ) );
      ?>
      <div class="footerAddress">
        <p>Phone: 317-858-1944</p>
        <p>39 Timber Lane, Brownsbug</p>
        <p>Indiana, 46112</p>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer();?>
</body>
</html>
