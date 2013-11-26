<?php
	if (function_exists('wpj_cut_hindrance')) {
		$lang = wpj_cut_hindrance(get_bloginfo('language'));
	} else {
		$lang = "ja";
	}
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/foundation.css" />
<script src="<?php bloginfo('template_url'); ?>/js/modernizr.js"></script>
<?php wp_head(); ?>
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script><![endif]-->