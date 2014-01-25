vti_encoding:SR|utf8-nl
vti_timelastmodified:TW|31 May 2012 21:59:04 -0000
vti_author:SR|PCSD\\otto ethan
vti_modifiedby:SR|PCSD\\otto ethan
vti_nexttolasttimemodified:TW|31 May 2012 21:59:04 -0000
vti_timecreated:TR|25 Jan 2014 15:31:23 -0000
vti_cacheddtm:TX|25 Jan 2014 15:31:22 -0000
vti_filesize:IR|8253
vti_cachedtitle:SR|<?php /* Override the Title if the custom tag "_smallbiz_title" has been set. */ /* if "_smallbiz_extra_title" has been set, append this. */ $title = ""; $is_smallbiz_frontpage = is_front_page() || (get_option('smallbiz_page_on_front') == $wp_query->get_queried_object()->ID); if (is_singular() && !$is_smallbiz_frontpage){ if (get_post_meta($wp_query->get_queried_object()->ID, "_smallbiz_title", true) && get_post_meta($wp_query->get_queried_object()->ID, "_smallbiz_title", true) != ""){ ?><?php $title = get_post_meta($wp_query->get_queried_object()->ID, "_smallbiz_title", true); }else { $title = wp_title('|', true, 'right').get_bloginfo('name'); } if(get_post_meta($wp_query->get_queried_object()->ID, "_smallbiz_extra_title", true)){ if($title != ""){ $title .= ","; } $title .= get_post_meta($wp_query->get_queried_object()->ID, "_smallbiz_extra_title", true); } } else if ($is_smallbiz_frontpage){ $title = biz_option('smallbiz_title'); } if(!$title){ $title = wp_title('|', true, 'right').get_bloginfo('name');} echo $title; ?>
vti_cachedbodystyle:SR|<body style="background-color:#fff; background-image:none;overflow:hidden;">
vti_cachedlinkinfo:VX|Q|< Q|< Q|< Q|< Q|< S|< S|https://connect.facebook.net/en_US/all.js
vti_cachedsvcrellinks:VX|DQUS|wordpress/wp-content/themes/smallbiz/< DQUS|wordpress/wp-content/themes/smallbiz/< DQUS|wordpress/wp-content/themes/smallbiz/< DQUS|wordpress/wp-content/themes/smallbiz/< DQUS|wordpress/wp-content/themes/smallbiz/< DSUS|wordpress/wp-content/themes/smallbiz/< NSSS|https://connect.facebook.net/en_US/all.js
vti_cachedneedsrewrite:BR|false
vti_cachedhasbots:BR|false
vti_cachedhastheme:BR|false
vti_cachedhasborder:BR|false
vti_metatags:VR|robots noindex,nofollow HTTP-EQUIV=Content-Type <?php\\ bloginfo('html_type');\\ ?>;\\ charset=<?php\\ bloginfo('charset');\\ ?> viewport width=320px;\\ initial-scale=1.0;\\ maximum-scale=1.0;\\ minimum-scale=1.0;\\ user-scalable=0; viewport width=980px;user-scalable=1; wp_theme Expand2Web\\ SmallBiz\\ <?php\\ echo\\ biz_option('smallbiz_version');?>
vti_charset:SR|utf-8
vti_title:SR|<?php /* Override the Title if the custom tag "_smallbiz_title" has been set. */ /* if "_smallbiz_extra_title" has been set, append this. */ $title = ""; $is_smallbiz_frontpage = is_front_page() || (get_option('smallbiz_page_on_front') == $wp_query->get_queried_object()->ID); if (is_singular() && !$is_smallbiz_frontpage){ if (get_post_meta($wp_query->get_queried_object()->ID, "_smallbiz_title", true) && get_post_meta($wp_query->get_queried_object()->ID, "_smallbiz_title", true) != ""){ ?><?php $title = get_post_meta($wp_query->get_queried_object()->ID, "_smallbiz_title", true); }else { $title = wp_title('|', true, 'right').get_bloginfo('name'); } if(get_post_meta($wp_query->get_queried_object()->ID, "_smallbiz_extra_title", true)){ if($title != ""){ $title .= ","; } $title .= get_post_meta($wp_query->get_queried_object()->ID, "_smallbiz_extra_title", true); } } else if ($is_smallbiz_frontpage){ $title = biz_option('smallbiz_title'); } if(!$title){ $title = wp_title('|', true, 'right').get_bloginfo('name');} echo $title; ?>
vti_extenderversion:SR|12.0.0.0
vti_backlinkinfo:VX|
vti_syncofs_pittsfordrobotics.org\:21:TW|31 May 2012 21:59:04 -0000
vti_syncwith_pittsfordrobotics.org\:21:TW|25 Jan 2014 15:31:22 -0000
