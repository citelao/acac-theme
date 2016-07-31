<footer class="footer section">
  <div class="section__wrapper">
    <div class="section__custom">
		<?php dynamic_sidebar('sidebar-footer'); ?>
    </div>
    <div class="section__content">
    	<p>
    		Copyright <?php echo date("Y") ?> ACAC. Design copyright <?php echo date("Y") ?> <a href="http://ben.stolovitz.com">Ben Stolovitz</a>.
    		All rights reserved.
    	</p>
    	<a href="https://wustl.edu" class="footer__link">
    		<img class="footer__image" src="<?php bloginfo('template_directory'); ?>/assets/images/wustllogo.svg" alt="the WUSTL logo">
    	</a>
    	<a href="https://su.wustl.edu" class="footer__link">
    		<img class="footer__image" src="<?php bloginfo('template_directory'); ?>/assets/images/sulogo.svg" alt="the WUSTL logo">
    	</a>
    </div>
  </div>
</footer>
