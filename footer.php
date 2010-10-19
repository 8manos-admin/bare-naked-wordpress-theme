    <footer>
	<?php
		dynamic_sidebar('footer');
	?>
    </footer>
  </div> <!--! end of #container -->


  <!-- Javascript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
  <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script> -->
  <script>!window.jQuery && document.write('<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.4.2.min.js"><\/script>')</script>


  <script src="<?php bloginfo('stylesheet_directory'); ?>/js/plugins.js?v=1"></script>
  <script src="<?php bloginfo('stylesheet_directory'); ?>/js/script.js?v=1"></script>

  <!--[if lt IE 7 ]>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/dd_belatedpng.js?v=1"></script>
  <![endif]-->


  <!-- yui profiler and profileviewer - remove for production -->
  <script src="<?php bloginfo('stylesheet_directory'); ?>/js/profiling/yahoo-profiling.min.js?v=1"></script>
  <script src="<?php bloginfo('stylesheet_directory'); ?>/js/profiling/config.js?v=1"></script>
  <!-- end profiling code -->

	<?php wp_footer(); ?>

  <!-- asynchronous google analytics: mathiasbynens.be/notes/async-analytics-snippet 
       change the UA-XXXXX-X to be your site's ID  and remove commenting characters -->
       
  <!-- 
  <script>
   var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
   (function(d, t) {
    var g = d.createElement(t),
        s = d.getElementsByTagName(t)[0];
    g.async = true;
    g.src = '//www.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g, s);
   })(document, 'script');
  </script>
  -->
  
</body>
</html>
