
<div id="ft"><?php
    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : ?>
        <p>(cc) <?php echo date("Y") ?> <a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a> <?php if ( "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] == get_option('home')."/" || "http://www.".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] == get_option('home')."/" || $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] == get_option('home')."/" || "www.".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] == get_option('home')."/" ) : ?>
        <?php endif; ?>| Some Rights Reserved</p>
    <?php endif; ?>
	<p><?php wp_footer() ?></p>
	</div>

</div>

<!-- Can put web stats code here -->

</body>

</html>
